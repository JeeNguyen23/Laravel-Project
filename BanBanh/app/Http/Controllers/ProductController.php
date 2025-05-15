<?php

namespace App\Http\Controllers;

use App\Models\bill_detail;
use Illuminate\Http\Request;
use App\Models\products;
use App\Models\type_products;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Log;
class ProductController extends Controller
{
     public function get_index()
    {
        $dsbanh = products::paginate(10);
        return view("admin/sanpham/danhsach", compact("dsbanh"));
    }

    public function get_AddProduct()
    {
        $loaiSanPham = type_products::all();
        return view('admin.sanpham.themmoi', compact('loaiSanPham'));
    }

    public function post_addproduct(Request $req)
    {
        $validated = $req->validate([
            'name' => 'required|string|max:50',
            'id_type' => 'required|exists:type_products,id',
            'unit_price' => 'required|numeric|min:0',
            'promotion_price' => 'nullable|numeric|min:0',
            'unit' => 'required|in:1,2', // 1: Hộp, 2: Cái
            'new' => 'required|in:0,1', // 0: Cũ, 1: Mới
            'image' => 'required|image|mimes:jpg,jpeg,png,gif|max:2048',
        ], [
            'name.required' => 'Không nhập giá trị rỗng cho tên bánh mì',
            'name.max' => 'Tên bánh mì tối đa 50 ký tự',
            'id_type.required' => 'Vui lòng chọn loại sản phẩm',
            'id_type.exists' => 'Loại sản phẩm không tồn tại',
            'unit_price.required' => 'Giá gốc không được để trống',
            'unit_price.numeric' => 'Giá gốc phải là số',
            'promotion_price.numeric' => 'Giá khuyến mãi phải là số',
            'unit.required' => 'Vui lòng chọn đơn vị',
            'unit.in' => 'Đơn vị không hợp lệ',
            'new.required' => 'Vui lòng chọn trạng thái sản phẩm',
            'new.in' => 'Trạng thái sản phẩm không hợp lệ',
            'image.required' => 'Phải chọn hình loại bánh mì',
            'image.image' => 'Phải chọn tập tin hình',
            'image.mimes' => 'Chỉ chọn các tập tin hình jpg, jpeg, png, gif',
            'image.max' => 'Kích thước tập tin tối đa 2MB',
        ]);

        $image = $req->file('image');
        $imageName = time() . '_' . $image->getClientOriginalName();
        

        $banh = new products();
        $banh->name = $validated['name'];
        $banh->id_type = $validated['id_type'];
        $banh->unit_price = $validated['unit_price'];
        $banh->promotion_price = $validated['promotion_price'] ?? 0;
        $banh->unit = $validated['unit'];
        $banh->new = $validated['new'];
        $banh->image = $imageName;
        $banh->save();
        $image->move("image/product", $imageName);

        return redirect()->route('productindex')->with('thongbao', 'Thêm sản phẩm thành công');
    }

    public function get_EditProduct($id)
    {
        $products = products::find($id);
        $loaiSanPham = type_products::all();
        return view("admin/sanpham/suasanpham", compact('products', 'loaiSanPham'));
    }
    public function post_EditProduct(Request $req, $id)
    {
        $valdata = $req->validate([
            'name' => 'required|string|max:50',
            'id_type' => 'required|exists:type_products,id',
            'unit_price' => 'required|numeric|min:0',
            'promotion_price' => 'nullable|numeric|min:0',
            'unit' => 'required|in:1,2', // 1: Hộp, 2: Cái
            'new' => 'required|in:0,1', // 0: Cũ, 1: Mới
            'image' => 'nullable|image|mimes:jpg,jpeg,png,gif|max:2048',
        ],[
            'name.required' => 'Không nhập giá trị rỗng cho tên bánh mì',
            'name.max' => 'Tên bánh mì tối đa 50 ký tự',
            'id_type.required' => 'Vui lòng chọn loại sản phẩm',
            'id_type.exists' => 'Loại sản phẩm không tồn tại',
            'unit_price.required' => 'Giá gốc không được để trống',
            'unit_price.numeric' => 'Giá gốc phải là số',
            'promotion_price.numeric' => 'Giá khuyến mãi phải là số',
            'unit.required' => 'Vui lòng chọn đơn vị',
            'unit.in' => 'Đơn vị không hợp lệ',
            'new.required' => 'Vui lòng chọn trạng thái sản phẩm',
            'new.in' => 'Trạng thái sản phẩm không hợp lệ',
            'image.image' => 'Phải chọn tập tin hình',
            'image.mimes' => 'Chỉ chọn các tập tin hình jpg, jpeg, png, gif',
            'image.max' => 'Kích thước tập tin tối đa 2MB',
        ]);
        
            if ($req->hasFile('image')) {
            $image = $req->file('image');
            $imageName = time() . '_' . $image->getClientOriginalName();
            $image->move("image/product", $imageName);
        }
        else
        {
            $imageName = $req["fileold"];
        }
            $banh = products::find($id);
            $banh->name = $valdata['name'];
            $banh->id_type = $valdata['id_type'];
            $banh->unit_price = $valdata['unit_price'];
            $banh->promotion_price = $valdata['promotion_price'] ?? 0;
            $banh->unit = $valdata['unit'];
            $banh->new = $valdata['new'];
            $banh->image = $imageName;
            $banh->save();

            return redirect()->route('productindex')->with('thongbao', 'Cập nhật sản phẩm thành công');
        
    }
    public function get_DeleteProducts($id)
    {
        try {
            $product = products::findOrFail($id);

            // Kiểm tra sản phẩm có trong bill_detail
            if (bill_detail::where('id_product', $id)->exists()) {
                return redirect()->back()->with('error', 'Không thể xóa sản phẩm vì đã có trong đơn hàng');
            }

            // Xóa file hình ảnh nếu tồn tại
            $destinationPath = public_path('image/product');
            if ($product->image && File::exists("$destinationPath/{$product->image}")) {
                File::delete("$destinationPath/{$product->image}");
            }

            // Xóa sản phẩm
            $product->delete();

            return redirect()->route('productindex')->with('thongbao', "Đã xóa sản phẩm $product->name thành công");
        } catch (\Exception $e) {
            Log::error("Lỗi khi xóa sản phẩm ID $id: " . $e->getMessage());
            return redirect()->route('productindex')->with('error', 'Không thể xóa sản phẩm do lỗi hệ thống');
        }
    }
}
