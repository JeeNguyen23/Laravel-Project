@extends("admin/layout")
@section("content")
	<div class="row">
		<div class="col-md-4"></div>
		<div class="col-md-4">
			<div class="card">
				<div class="card-header">
					<h3>Thông Tin Quản Trị Viên</h3>
				</div>
				<div class="card-body">
					<table class="table table-bordered">
						<tr>
							<th>Mã Người dùng</th>
							<td>{{ $user->id }}</td>
						</tr>
						<tr>
							<th>Name</th>
							<td>{{ $user->full_name }}</td>
						</tr>
						<tr>
							<th>Email</th>
							<td>{{ $user->email }}</td>
						</tr>
						<tr>
							<th>Role</th>
							<td>{{ $user->role==1?"Quản Trị Viên":"Nhân Viên" }}</td>
						</tr>
					</table>
					<a href="{{ route('userindex') }}" class="btn btn-primary mt-3">Quay Về</a>
				</div>
			</div>
		</div>
		<div class="col-md-4"></div>
	</div>
@endsection