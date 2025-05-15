<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\slide;
use App\Models\products;
use App\Models\type_products;
use App\Models\cart;
use App\Models\bill_detail;
use App\Models\bills;
use App\Models\customer;
use App\Models\User;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;

class PageController extends Controller
{
    public function get_DangNhap()
    {
        return view("pages/dangnhap");
    }
    public function post_DangNhap(Request $req)
    {
        $val = $req->validate([
            'email' => 'email',
            'password' => 'min:8|max:30',
        ],[
            'email.email' => 'địa chỉ thư không đúng định dạng',
            'password.min' => 'mật khẩu tối thiểu 8 ký tự',
            'password.max' => 'mật khẩu tối đa 30 ký tự',
        ]);
        $chungthuc = array('email' => $val['email'], 'password' => $val['password']);
        if (Auth::attempt($chungthuc))
        {
            if(Auth::user()->role==1)
            {
                 return redirect()->route("billindex");
            }
            else
                return redirect()->route("trangchu");
           
        }
        else
        {
            return redirect()->back()->with("thongbao", "Đăng nhập thất bại");
        }
    }
    public function get_DangXuat()
    {
        Auth::logout();
        return redirect()->route("trangchu");
    }

    public function get_DangKy()
    {
        return view("pages/dangky");
    }
    public function post_DangKy(Request $req)
    {
        $val = $req->validate([
            'name' => 'required',
            'email' => 'email|unique:users',
            'password' => 'min:8|max:30',
            'repassword' => 'same:password'
        ],[
            'name.required' => "chưa nhập tên",
            'email.email' => 'Địa chỉ thư không đúng định dạng',
            'email.unique' => 'Địa chỉ thư đã có người đăng ký',
            'password.min' => 'Mật khẩu tối thiểu 8 ký tự',
            'password.max' => 'Mật khẩu tối đa 30 ký tự',
            'repassword.same' => 'Mật khẩu không khớp !!!'
        ]);
        $user = new User();
        $user->full_name = $val["name"];
        $user->email = $val["email"];
        $user->password = Hash::make($val["password"]);
        $user->save();
        return redirect()->back()->with("thongbao", "Đăng ký thành công");
    }

    public function get_TimKiem(Request $req)
    {
        $tukhoa = $req["tukhoa"];
        if (is_numeric($tukhoa))
        {
            $dssanpham = products::where('unit_price', ">=", $tukhoa)->get();
        } else {
            $dssanpham = products::where('name', 'like', '%'.$tukhoa.'%')->get();
    }
    return view('pages/timkiem', compact("dssanpham"));
    }
    public function get_DatHang()
    {
        return view('pages/dathang');
    }

    public function post_DatHang(Request $req)
    {
        $cart = Session::get('cart');

        $cus = new customer();
        $cus->name = $req->name;
        $cus->gender = $req->gender;
        $cus->email = $req->email;
        $cus->address = $req->address;
        $cus->phone_number = $req->phone_number;
        $cus->note = $req->note;
        $cus->save();

        $bill = new bills();
        $bill->id_customer = $cus->id;
        $bill->date_order = date('Y-m-d');
        $bill->total = $cart->totalPrice;
        $bill->payment = $req->payment_method;
        $bill->status = 0;
        $bill->note = $req->note;
        $bill->save();

        foreach($cart->items as $key => $value)
        {
            $bd = new bill_detail();
            $bd->id_bill = $bill->id;
            $bd->id_product = $key;
            $bd->quantity = $value['qty'];
            $bd->unit_price = ($value["price"] / $value["qty"]);
            $bd->save();
        }
        Session::forget("cart");
        return view("pages/thongbao");
    }

    public function get_ThemGioHang(Request $req, $id)
    {
        $sanpham = products::find($id);
        $oldcart = Session('cart') ? Session::get('cart') : null;
        $cart = new cart($oldcart);
        $cart->add($sanpham, $id);
        $req->session()->put('cart', $cart);
        return redirect()->back();
    }

    public function get_XoaGioHang($id)
    {
        $oldcart = Session('cart') ? Session::get('cart') : null;
        $cart = new cart($oldcart);
        $cart->reduceByOne($id);
        if (count($cart->items)>0)
        {
            Session::put('cart', $cart);
        }
        else
        {
            Session::forget('cart');
        }
        return redirect()->back();
    }

    public function getTrangChu()
    {
        $slide = slide::all();
        $new_product = products::where("new" ,"=" ,1)->paginate(4, ['*'], 'pagenew');
        $normal_product = products::where("new", "=", 0)->paginate(8, ['*'], 'pagenormal');
        return view("pages.trangchu", compact("slide", "new_product", "normal_product"));
    }

    public function getLoaiSanPham($type)
    {
        $loai = type_products::find($type);
        $sanpham_cungloai = products::where("id_type", "=", $type)->paginate(3, ['*'], 'pagesame');
        $sanpham_khacloai = products::where("id_type", "=", $type)->paginate(6, ['*'], 'pagediff');
        return view("pages.loai_sanpham", compact("loai", "sanpham_cungloai", "sanpham_khacloai"));
    }

    public function getChiTietSanPham($id)
    {
        $sanpham = products::find($id);
        $sanpham_lienquan = products::where("id_type", "=", $sanpham->id_type)->paginate(6);
        
        $sanpham_banchay = products::join("Bill_Detail", "products.id", "=", "Bill_Detail.id_product")
                        ->selectRaw("products.id, name, image, promotion_price, products.unit_price, sum(quantity) as total")
                        ->groupby("products.id", "name", "image", "promotion_price", "products.unit_price")
                        ->orderByDesc("total")->take(4)->get();
        return view("pages.chitiet_sanpham", compact("sanpham", "sanpham_lienquan", "sanpham_banchay"));
    }

    public function getLienHe()
    {
        return view("pages.lienhe");
    }

    public function getGioiThieu()
    {
        return view("pages.gioithieu");
    }
}
