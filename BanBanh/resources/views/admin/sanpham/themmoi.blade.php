@extends("admin/layout")
@section("content")
<div class="row">
	<div class="col-lg-12">
		<h1 class="page-header">Bánh
		<small>Thêm Mới</small>
		</h1>
	</div>

	<!-- /.col-lg-12 -->

	<div class="col-lg-7" style="padding-bottom:120px">
		<form action="{{route('addproduct')}}" method="POST" enctype="multipart/form-data">
			@csrf
			<div class="form-group">
                <label>Loại Sản Phẩm</label>
                <select class="form-control" name="id_type">
                    @foreach($loaiSanPham as $loai)
                        <option value="{{ $loai->id }}">{{ $loai->name }}</option>
                    @endforeach
                </select>
                @error('id_type')
                    <div class="text-danger">{{ $message }}</div>
                @enderror
            </div>
            <div class="form-group">
                <label>Tên Sản Phẩm</label>
                <input class="form-control" name="name" value="{{ old('name') }}" />
                @error('name')
                    <div class="text-danger">{{ $message }}</div>
                @enderror
            </div>
            <div class="form-group">
                <label>Giá Gốc</label>
                <input type="number" step="0.01" class="form-control" name="unit_price" value="{{ old('unit_price') }}" />
                @error('unit_price')
                    <div class="text-danger">{{ $message }}</div>
                @enderror
            </div>
            <div class="form-group">
                <label>Giá Khuyến Mãi</label>
                <input type="number" step="0.01" class="form-control" name="promotion_price" value="{{ old('promotion_price') }}" />
                @error('promotion_price')
                    <div class="text-danger">{{ $message }}</div>
                @enderror
            </div>
            <div class="form-group">
                <label>Đơn Vị</label>
                <select class="form-control" name="unit">
                    <option value="1" >Hộp</option>
                    <option value="2" >Cái</option>
                </select>
                @error('unit')
                    <div class="text-danger">{{ $message }}</div>
                @enderror
            </div>
            <div class="form-group">
                <label>Trạng Thái</label>
                <select class="form-control" name="new">
                    <option value="0" >Sản phẩm cũ</option>
                    <option value="1" >Sản phẩm mới</option>
                </select>
                @error('new')
                    <div class="text-danger">{{ $message }}</div>
                @enderror
            </div>
            <div class="form-group">
                <label>Hình Sản Phẩm</label>
                <input type="file" class="form-control" name="image" />
                @error('image')
                    <div class="text-danger">{{ $message }}</div>
                @enderror
            </div>
			<button type="submit" class="btn btn-primary">Lưu Trữ</button>
		</form>
	</div>
</div>
@endsection