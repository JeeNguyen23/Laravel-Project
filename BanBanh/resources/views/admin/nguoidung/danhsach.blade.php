@extends("admin/layout")
@section("content")
	<h1 class="my-4">Danh sách người dùng</h1>
	@if(Session("thongbao"))
		<h2 class="text-success">{{Session("thongbao")}}</h2>
	@endif
<table class="table table-bordered">
	<thead class="thead-light">
		<tr>
			<th>ID</th>
			<th>Tên</th>
			<th>Email</th>
			<th>Vai trò</th>
			<th>Thao Tác</th>
		</tr>
	</thead>
	<tbody>
		@foreach($dsnguoidung as $user)
			@if($user->role==0)
			<tr>
				<td>{{ $user->id }}</td>
				<td>{{ $user->full_name }}</td>
				<td>{{ $user->email }}</td>
				<td>{{ $user->role==1?"Quản trị viên":"Nhân Viên Thường"}}</td>
				<td>
					<a href="{{route('userdelete', $user->id)}}" class="btn btn-danger">Xoá</a>
					<a href="{{route('userupdate', $user->id)}}" class="btn btn-info">Cập Nhật</a></td>
			</tr>
				@endif
			@endforeach
	</tbody>
</table>
@endsection