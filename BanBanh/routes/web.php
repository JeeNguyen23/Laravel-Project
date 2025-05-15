<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PageController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\DonDatHangController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\ProductController;

Route::group(["prefix" => "QuanLyBanBanh"], function(){
    Route::get('/',[PageController::class, "getTrangchu"])->name('trangchu');
    Route::get('/loai-san-pham/{type}',[PageController::class, "getLoaiSanPham"])->name('loaisanpham');
    Route::get('/chi-tiet-san-pham/{id}',[PageController::class, "getChiTietSanPham"])->name('chitietsanpham');
    Route::get('/lien-he',[PageController::class, "getLienHe"])->name('lienhe');
    Route::get('/gioi-thieu',[PageController::class, "getGioiThieu"])->name('gioithieu');
    Route::get("/them-vao-gio-hang/{id}",[PageController::class, "get_ThemGioHang"])->name("themgiohang");
    Route::get("/xoa-gio-hang/{id}",[PageController::class, "get_XoaGioHang"])->name("xoagiohang");
    Route::get("/dat-hang", [PageController::class, "get_DatHang"])->name("dathang");
    Route::post("dat-hang", [PageController::class, "post_DatHang"])->name("dathang");
    Route::get("/tim-kiem",[PageController::class, "get_timkiem"])->name("timkiem");
    Route::get("/dang-ky",[PageController::class, "get_DangKy"])->name("dangky");
    Route::post("/dang-ky",[PageController::class, "post_DangKy"])->name("dangky");
    Route::get("/dang-nhap",[PageController::class, "get_DangNhap"])->name("dangnhap");
    Route::post("/dang-nhap",[PageController::class, "post_DangNhap"])->name("dangnhap");
    Route::get('dang-xuat',[PageController::class,"get_DangXuat"])->name("dangxuat");

});

Route::group(["prefix" => "admin","middleware" => "baove"], function(){
    Route::get("/index",[AdminController::class, "get_index"])->name("adminindex");
    Route::get("/them-loai-moi",[AdminController::class, "get_AddType"])->name("addtype");
    Route::post("/them-loai-moi",[AdminController::class, "post_AddType"])->name("addtype");
    Route::get("/capnhat-loai-sanpham/{id}",[AdminController::class, "get_EditType"])->name("edittype");
    Route::post("/capnhat-loai-sanpham/{id}",[AdminController::class, "post_EditType"])->name("edittype");
    Route::get("/xoa-loai-sanpham/{id}",[AdminController::class, "get_DeleteType"])->name("deletetype");

    Route::get("/billindex",[DonDatHangController::class,"get_index"])->name("billindex");
    Route::get("chi-tiet-don-dat-hang/{id}",[DonDatHangController::class,"get_BillDetail"])->name("billdetail");
    Route::get("/cap-nhat-don-hang/{id}",[DonDatHangController::class,"get_UpdateStatus"])->name("updatebill");
    Route::get("/xoa-don-hang/{id}",[DonDatHangController::class,"get_DeleteBill"])->name("deletebill");


    Route::get("/userindex",[UserController::class,"get_index"])->name("userindex");
    Route::get("/userinformation/{id}", [UserController::class,"get_Info"])->name("userinformation");
    Route::get("/changepassword/{id}",[UserController::class,"get_ChangePass"])->name("changepass");
    Route::post("/changepassword/{id}",[UserController::class,"post_ChangePass"])->name("changepass");
    Route::get("/useradd",[UserController::class, "get_AddUser"])->name("adduser");
    Route::post("/useradd",[UserController::class, "post_AddUser"])->name("adduser");
    Route::get("/userupdate/{id}",[UserController::class,"get_UserUpdate"])->name("userupdate");
    Route::post("/userupdate/{id}",[UserController::class,"post_UserUpdate"])->name("userupdate");
    Route::get("/userdelete/{id}",[UserController::class,"get_UserDelete"])->name("userdelete");

    Route::get("/productindex",[ProductController::class, "get_index"])->name("productindex");
    Route::get("/them-san-pham",[ProductController::class, "get_AddProduct"])->name("addproduct");
    Route::post("/them-san-pham",[ProductController::class, "post_AddProduct"])->name("addproduct");
    Route::get("/capnhat-san-pham/{id}",[ProductController::class, "get_EditProduct"])->name("editproduct");
    Route::post("/capnhat-san-pham/{id}",[ProductController::class, "post_EditProduct"])->name("editproduct");
    Route::get("/xoa-san-pham/{id}",[ProductController::class, "get_DeleteProducts"])->name("deleteproduct");

});



Route::get('/', function () {
    return view('welcome');
});
