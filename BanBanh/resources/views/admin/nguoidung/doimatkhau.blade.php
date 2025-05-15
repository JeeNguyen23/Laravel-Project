@extends("admin/layout")
@section("content")
	<div class="row">
		<div class="col-md-4"></div>
		<div class="col-md-4">
			<div class="card">
				<div class="card-header">
					<h3>Đổi Mật Khẩu cho {{ $user->full_name }}</h3>
				</div>
				<div class="card-body">
					<!-- Hiển thị thông báo lỗi nếu có -->
					@if ($errors->any())
					<div class="alert alert-danger">
						<ul>
							@foreach ($errors->all() as $error)
							<li>{{ $error }}</li>
							@endforeach
						</ul>
					</div>
					@endif
					<!-- Hiển thị thông báo thành công nếu có -->
					@if (session('success'))
					<div class="alert alert-success">
						{{ session('success') }}
					</div>
					@endif
					<!-- Form thay đổi mật khẩu -->
					<form action="{{ route('changepass', $user->id) }}" method="POST">
						@csrf
						<!-- Nhập mật khẩu cũ -->
						<div class="mb-3">
							<label for="old_password" class="form-label">Mật Khẩu Hiện Hành</label>
							<input type="password" name="old_password" id="old_password" class="form-control" required>
						</div>
						<!-- Nhập mật khẩu mới -->
						<div class="mb-3">
							<label for="password" class="form-label">Mật Khẩu mới</label>
							<input type="password" name="password" id="password" class="form-control" required>
						</div>
						<!-- Nhập lại mật khẩu mới -->
						<div class="mb-3">
							<label for="password_confirmation" class="form-label">Xác Nhận Mật Khẩu Mới</label>
							<input type="password" name="password_confirmation" id="password_confirmation" class="form-control" required>
						</div>
						<button type="submit" class="btn btn-primary">Cập Nhật</button>
					</form>
					<a href="{{route('userinformation', $user->id)}}" class="btn btn-secondary mt-3">Trở về</a>
				</div>
			</div>
		</div>
		<div class="col-md-4"></div>
	</div>
@endsection