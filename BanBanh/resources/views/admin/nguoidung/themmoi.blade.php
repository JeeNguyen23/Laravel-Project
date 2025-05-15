@extends("admin/layout")
@section("content")
<div class="row">
	<div class="col-lg-12">
		<h1 class="page-header">Loại Sản Phẩm
		<small>Thêm Một User</small>
		</h1>
	</div>

	<!-- /.col-lg-12 -->

	<div class="col-lg-7" style="padding-bottom:120px">
		<form action="{{route('adduser')}}" method="POST" enctype="multipart/form-data">
			@csrf
			<div class="form-group">
				<label>Tên Người Dùng</label>
				<input class="form-control" name="fullname"/>
				@error("full_name")
				<div class="text-danger">{{$message}}</div>
				@enderror
			</div>
			<div class="form-group">
				<label>Email</label>
				<input class="form-control" name="email"/>
				@error("email")
				<div class="text-danger">{{$message}}</div>
				@enderror
			</div>
			  <div class="form-group">
                <label>Mật Khẩu</label>
                <input class="form-control" name="password" type="password" />
                @error('password')
                    <div class="text-danger">{{ $message }}</div>
                @enderror
            </div>
            <div class="form-group">
                <label>Vai Trò</label>
                <select class="form-control" name="role">
                    <option value="" >Khách Hàng</option>
                    <option value="1" >Admin</option>
                </select>
                @error('role')
                    <div class="text-danger">{{ $message }}</div>
                @enderror
            </div>
            <div class="form-group">
                <label>Số Điện Thoại</label>
                <input class="form-control" name="phone"  />
                @error('phone')
                    <div class="text-danger">{{ $message }}</div>
                @enderror
            </div>
            <div class="form-group">
                <label>Địa Chỉ</label>
                <textarea class="form-control" rows="5" name="address"></textarea>
                @error('address')
                    <div class="text-danger">{{ $message }}</div>
                @enderror
            </div>
			<button type="submit" class="btn btn-primary">Lưu Trữ</button>
		</form>
	</div>
</div>
@endsection