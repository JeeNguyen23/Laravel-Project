@extends("admin/layout")
@section("content")
<div class="container">
	<div class="row">
		<div class="col-md-4 col-md-offset-4">
			<div class="login-panel panel panel-default">
				<div class="panel-heading">
					<h3 class="panel-title">Vui lòng đăng nhập</h3>
					@if(Session::has("thongbao"))

					<div class="text-
					danger">{{Session::get("thongbao")}}</div>
					@endif
				</div>
				<div class="panel-body">
					<form role="form" action="{{route('dangnhap')}}"method="POST">
						@csrf
						<fieldset>
							<div class="form-group">
								<input class="form-control" placeholder="E-mail" name="email" type="email" autofocus>
								@error("email")
								<div class="text-danger">{{$message}}</div>
								@enderror
							</div>
							<div class="form-group">
								<input class="form-control" placeholder="Password" name="password" type="password" value="">
								@error("password")
								<div class="text-danger">{{$message}}</div>
								@enderror
							</div>
							<button type="submit" class="btn btn-lg btn-success btn-block">Đăng Nhập</button>
						</fieldset>
					</form>
				</div>
			</div>
		</div>
	</div>
</div>
@endsection