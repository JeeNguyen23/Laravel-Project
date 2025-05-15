@extends("admin/layout")
@section("content")
<div class="row">
	<div class="col-md-4"></div>
	<div class="col-md-4">
		<div class="card">
			<div class="card-header">
				<h3>Cập Nhật Thông Tin Người Dùng</h3>
				@if(Session('success'))
				<div class="text-success">{{Session('success')}}</div>
				@endif
			</div>
			<div class="card-body">
				<!-- Form cập nhật thông tin người dùng -->
				<form action="{{ route('userupdate', $user->id) }}" method="POST">
					@csrf
					<!-- Nhập tên -->
					<div class="mb-3">
						<label for="name" class="form-label">Họ Và Tên*</label>
						<input type="text" name="name" id="name" class="form-control" value="{{old('name', $user->name) }}" required>
						@error("name")
						<div class="text-danger">{{$message}}</div>
						@enderror
					</div>
					<!-- Nhập email -->
					<div class="mb-3">
						<label for="email" class="form-label">Email*</label>
						<input type="email" name="email" id="email" class="form-control" value="{{old('email', $user->email) }}" required>
						@error("email")
						<div class="text-danger">{{$message}}</div>
						@enderror
					</div>
					<!-- Checkbox để chọn đổi mật khẩu -->
					<div class="form-check mb-3">
						<input class="form-check-input" type="checkbox" id="changePasswordCheckbox" onclick="togglePasswordFields()">
						<label class="form-check-label" for="changePasswordCheckbox">Đổi Mật Khẩu</label>
					</div>
					<!-- Nhập mật khẩu mới (ẩn nếu không chọn) -->
					<div id="passwordFields" style="display: none;">
						<div class="mb-3">
							<label for="password" class="form-label">Mật Khẩu Mới</label>
							<input type="password" name="password" id="password" class="form-control">
							@error("password")
							<div class="text-danger">{{$message}}</div>
							@enderror
						</div>
						<div class="mb-3">
							<label for="password_confirmation" class="form-label">Xác Nhận Mật Khẩu Mới</label>
							<input type="password" name="password_confirmation"id="password_confirmation" class="form-control">
							@error("password_corfirmation")
							<div class="text-danger">{{$message}}</div>
							@enderror
						</div>
					</div>
					<button type="submit" class="btn btn-primary">Cập Nhật</button>
					<a href="{{ route('userindex') }}" class="btn btn-secondary mt-3">Trở về</a>
				</form>
			</div>
		</div>
	</div>
	<div class="col-md-4"></div>
</div>
<script>
	function togglePasswordFields() {
		const passwordFields = document.getElementById('passwordFields');
		const checkbox = document.getElementById('changePasswordCheckbox');
		// Toggle hiển thị các trường mật khẩu
		passwordFields.style.display = checkbox.checked ? 'block' : 'none';
	}
</script>
@endsection