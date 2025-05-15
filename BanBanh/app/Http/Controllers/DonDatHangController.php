<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\bills;
use App\Models\bill_detail;
use Illuminate\Support\Facades\Log;


class DonDatHangController extends Controller
{
    public function get_index()
    {
        $dsdonhang = bills::all();
        return view('admin/dondathang/danhsach', compact('dsdonhang'));
    }

    public function get_BillDetail($id)
    {
        $bill = bills::findOrFail($id);
        return view('admin/dondathang/chitietddh', compact('bill'));
    }
    public function get_UpdateStatus($id)
    {
        $donhang = bills::find($id);
        $donhang->status = 1;
        $donhang->save();
        return redirect()->route("billindex")->with('thongbao','Cập nhật trạng thái đơn hàng thành công');

    }
    public function get_DeleteBill($id)
    {
        try {
            $donhang = bills::findOrFail($id);

            // Xóa các bản ghi bill_detail liên quan
            bill_detail::where('id_bill', $id)->delete();

            // Xóa đơn hàng
            $donhang->delete();

            return redirect()->route('billindex')->with('thongbao', "Xóa đơn hàng $donhang->id thành công");
        } catch (\Exception $e) {
            Log::error("Lỗi khi xóa đơn hàng ID $id: " . $e->getMessage());
            return redirect()->back()->with('error', 'Không thể xóa đơn hàng do lỗi hệ thống');
        }
    }
}
