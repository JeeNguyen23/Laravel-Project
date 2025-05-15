@extends("layouts/master")
@section("content")
<div class="inner-header">
	<div class="container">
		<div class="pull-left">
			<h6 class="inner-title">Đăng ký thành viên</h6>
		</div>
		<div class="pull-right">
			<div class="beta-breadcrumb">
				<a href="{{route('trangchu')}}">Trang chủ</a> / <span>Đăng kí</span>
				</div>
		</div>
		<div class="clearfix"></div>
	</div>
</div>

<div class="container">
	<div id="content">
		<form action="{{route('dangky')}}" method="post" class="beta-form-checkout">
			@csrf
			<div class="row">
				<div class="col-sm-3"></div>
				<div class="col-sm-6">
					<h4>Nhập thông tin thành viên</h4>
					@if(Session::has("thongbao"))
					<h5 class="text-success">{{Session::get("thongbao")}}</h5>
					@endif
					<div class="space20">&nbsp;</div>
					<div class="form-block">
						<label for="email">Email*</label>

						<input type="email" class="form-control" name="email" id="email" required>

						@error("email")
						<div class="text-danger">{{$message}}</div>
						@enderror
					</div>
					<div class="form-block">
						<label for="name">Họ Và Tên *</label>

						<input type="text" class="form-control" name="name" id="name" required>

						@error("name")
						<div class="text-danger">{{$message}}</div>
						@enderror
					</div>
					<div class="form-block">
						<label for="phone">Mật Khẩu*</label>

						<input type="password" class="form-control" name="password" required>

						@error("password")
						<div class="text-danger">{{$message}}</div>
						@enderror
					</div>
					<div class="form-block">
						<label for="phone">Nhập lại mật khẩu*</label>

						<input type="password" class="form-control" name="repassword" required>

						@error("repassword")
						<div class="text-danger">{{$message}}</div>
						@enderror
					</div>
					<div class="form-block">
						<button type="submit" class="btn btn-primary">Đăng Ký</button>
					</div>
				</div>

				<div class="col-sm-3"></div>
			</div>
		</form>
	</div> <!-- #content -->
</div> <!-- .container -->
@endsection