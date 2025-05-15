@extends("admin/layout")
@section("content")
<!-- Page Content -->
<div class="container-fluid">
	<div class="row">
		<div class="col-lg-12">
			<h1 class="page-header">Bánh 
			<small>Danh Sách</small>
			</h1>
			@if(session('thongbao'))
                <div class="alert alert-success">
                    {{ session('thongbao') }}
                </div>
            @endif
            @if(session('error'))
                <div class="alert alert-danger">
                    {{ session('error') }}
                </div>
            @endif
		</div>
		<!-- /.col-lg-12 -->
		<table class="table table-striped table-bordered table-hover" >
			<thead>
				<tr align="center">
				<th width="300">Tên Sản Phẩm</th>
				<th width="100">Giá Gốc</th>
				<th width="150">Giá Khuyến Mãi</th>
				<th width="100">Hình</th>
				<th width="100">Hành Động</th>
				</tr>
			</thead>
			<tbody>
				@foreach($dsbanh as $dsb)
				<tr class="odd gradeX" align="center">
					<td>{{$dsb->name}}</td>
					<td>{{$dsb->unit_price}}</td>
					<td>{{$dsb->promotion_price}}</td>
					<td><img src="image/product/{{$dsb->image}}" height="70"/></td>
					<td class="center">
						<a class="btn btn-danger" href="{{route('deleteproduct', $dsb->id)}}" onclick="return confirm('Bạn có chắc muốn xóa sản phẩm')"> <i class="fa fa-trash-o fa-fw"></i> Xoá</a>
						<a class="btn btn-info" href="{{route('editproduct', $dsb->id)}}"> <i class="fa fa-pencil fa-fw"></i> Sửa</a>
					</td>
				</tr>
				@endforeach
			</tbody>
		</table>
		<div class="row">{{$dsbanh->links()}}</div>
		<!-- /.row -->
	</div>
	<!-- /.container-fluid -->
</div>
@endsection