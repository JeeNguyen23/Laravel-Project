<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
class UserController extends Controller
{
    public function get_index()
    {
     $dsnguoidung = User::all();
        return view("admin/nguoidung/danhsach", compact("dsnguoidung"));
    }
    public function get_Info($id)
    {
        // Lấy thông tin người dùng theo id
        $user = User::find($id);
        // Trả về view hiển thị thông tin người dùng
        return view('admin/nguoidung/thongtin', compact('user'));
    }
    public function get_ChangePass($id)
    {
        // Lấy thông tin người dùng theo ID
        $user = User::find($id);
        // Trả về view đổi mật khẩu
        return view('admin/nguoidung/doimatkhau', compact('user'));
    }
     public function get_AddUser()
    {
        $user = User::all();
        return view("admin/nguoidung/themmoi");
    }

    public function post_AddUser(Request $request)
    {
        $validated = $request->validate([
            'fullname' => 'required|string|max:255',
            'email' => 'required|email|unique:users,email',
            'password' => 'required|string|min:6',
            'role' => 'nullable|in:1', // NULL: Khách hàng, 1: Admin
            'phone' => 'nullable|string|max:20',
            'address' => 'nullable|string|max:255',
        ], [
            'fullname.required' => 'Tên người dùng không được để trống',
            'fullname.max' => 'Tên người dùng tối đa 255 ký tự',
            'email.required' => 'Email không được để trống',
            'email.email' => 'Email không đúng định dạng',
            'email.unique' => 'Email đã tồn tại',
            'password.required' => 'Mật khẩu không được để trống',
            'password.min' => 'Mật khẩu phải có ít nhất 6 ký tự',
            'phone.max' => 'Số điện thoại tối đa 20 ký tự',
            'address.max' => 'Địa chỉ tối đa 255 ký tự',
        ]);

        $user = new User();
        $user->full_name = $validated['fullname'];
        $user->email = $validated['email'];
        $user->password = Hash::make($validated['password']);
        $user->role = $validated['role'] ?? null; // NULL nếu không chọn admin
        $user->phone = $validated['phone'];
        $user->address = $validated['address'];
        $user->save();

        return redirect()->route('userindex')->with('thongbao', 'Thêm người dùng thành công');
    }
    public function post_ChangePass(Request $req, $id)
    {
        // Validate form, bao gồm trường password cũ và mới
        $valdata = $req->validate([
            'old_password' => 'required',
            'password' => 'required|string|min:8|confirmed',
        ],[
            'old_password.required' => "Bạn chưa nhập mật khẩu cũ",
            'password.required' => 'Bạn chưa nhập mật khẩu mới',
            'password.min' => "Mật khẩu tối thiểu 8 ký tự",
            "password.confirmed" => "Mật khẩu nhập không khớp"
        ]);
        // Tìm người dùng theo ID
        $user = User::find($id);
        // Kiểm tra mật khẩu cũ có khớp không
        if (!Hash::check($req->old_password, $user->password)) {
            return back()->withErrors(['old_password' => 'Mật khẩu cũ nhập vào chưa chính xác.']);
        }
        // Nếu khớp, cập nhật mật khẩu mới
        $user->password = Hash::make($valdata['password']);
        $user->save();
        return redirect()->back()->with('success', 'Đã đổi mật khẩu thành công!');
    }
    public function get_UserUpdate($id)
    {
        // Lấy thông tin người dùng theo id
        $user = User::findOrFail($id);
        // Trả về view chỉnh sửa thông tin người dùng
        return view('admin/nguoidung/capnhat', compact('user'));
    }
    public function post_UserUpdate(Request $req, $id)
    {
        // Validate các trường
        $valdata = $req->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email',
            'password' => 'nullable|string|min:8|confirmed',
        ],[
            'name.required' => "Chưa nhập họ tên người dùng",
            'email.email' => "Email chưa đúng định dạng",
            'password.min' => "Mật khẩu mới tối thiểu 8 ký tự !!!",
            'password.confirmed' => "Mật khẩu không khớp",
        ]);
        // Tìm người dùng theo id
        $user = User::find($id);
        // Cập nhật thông tin
        $user->name = $valdata['name'];
        $user->email = $valdata['email'];
        // Nếu người dùng muốn thay đổi mật khẩu
        if ($req->filled('password')) {
            $user->password = Hash::make($req->password);
        }
        //Lưu thông tin
        $user->save();
        return redirect()->back()->with('success', 'Cập nhật thông tin người dùng thành công');
    }
    public function get_UserDelete($id)
    {
        $user = User::find($id);
        $user->delete();
        return redirect()->back()->with("thongbao", "Đã xoá người dùng tên $user->name");
    }
}
