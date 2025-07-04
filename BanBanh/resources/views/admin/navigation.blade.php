<nav class="navbar navbar-default navbar-static-top" role="navigation" style="margin-bottom: 0">
	<div class="navbar-header">
	<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
		<span class="sr-only">Toggle navigation</span>
		<span class="icon-bar"></span>
		<span class="icon-bar"></span>
		<span class="icon-bar"></span>
	</button>
	<a class="navbar-brand" href="index.html">Vùng Quản Trị - Quản Lý Bán Bánh</a>
	</div>
	<!-- /.navbar-header -->
	<ul class="nav navbar-top-links navbar-right">
		<!-- /.dropdown -->
		<li class="dropdown">
			<a class="dropdown-toggle" data-toggle="dropdown" href="#">
			<i class="fa fa-user fa-fw"></i> <i class="fa fa-caret-down"></i></a>
			<ul class="dropdown-menu dropdown-user">
				<li><a href="{{route('userinformation',Auth::user()->id)}}"><i class="fa fa-user fa-fw"></i> Thông Tin NgườiDùng</a></li>
				<li><a href="{{route('changepass',Auth::user()->id)}}"><i class="fa fa-gear fa-fw"></i> Đổi Mật Khẩu</a></li>
				<li class="divider"></li>
				<li><a href="{{route('dangxuat')}}"><i class="fa fa-sign-out fa-fw"></i> Đăng xuất</a></li>
			</ul>
			<!-- /.dropdown-user -->
		</li>
		<!-- /.dropdown -->
	</ul>
	<!-- /.navbar-top-links -->
	<div class="navbar-default sidebar" role="navigation">
		<div class="sidebar-nav navbar-collapse">
			<ul class="nav" id="side-menu">
				<li class="sidebar-search">
					<div class="input-group custom-search-form">
						<input type="text" class="form-control" placeholder="Search...">

						<span class="input-group-btn">
							<button class="btn btn-default" type="button"><i class="fa fa-search"></i></button>
						</span>
					</div>
					<!-- /input-group -->
				</li>
				<li>
					<a href="#"><i class="fa fa-dashboard fa-fw"></i> Danh Mục</a>
				</li>
				<li>
					<a href="#"><i class="fa fa-cube fa-fw"></i> Đơn Đặt Hàng<span class="fa arrow"></span> </a>
					<ul class="nav nav-second-level">
						<li>
							<a href="{{route('billindex')}}">Danh Sách</a>
						</li>
					</ul>
				</li>
				<li>
					<a href="#"><i class="fa fa-bar-chart-o fa-fw"></i> Loại Bánh<span class="fa arrow"></span></a>
					<ul class="nav nav-second-level">
						<li>
							<a href="{{route('adminindex')}}">Danh Sách</a>
						</li>
						<li>
							<a href="{{route('addtype')}}">Thêm Mới</a>
						</li>
					</ul>
					<!-- /.nav-second-level -->
				</li>
				<li>
					<a href="#"><i class="fa fa-cube fa-fw"></i> Sản Phẩm<span class="fa arrow"></span></a>
					<ul class="nav nav-second-level">
						<li>
							<a href="{{route('productindex')}}">Danh Sách</a>
						</li>
						<li>
							<a href="{{route('addproduct')}}">Thêm Mới</a>
						</li>
					</ul>
					<!-- /.nav-second-level -->
				</li>
				<li>
				<a href="#"><i class="fa fa-users fa-fw"></i> Người Dùng<span class="fa arrow"></span></a>
					<ul class="nav nav-second-level">
						<li>
							<a href="{{route('userindex')}}">Danh Sách</a>
						</li>
						<li>
							<a href="{{route('adduser')}}">Thêm Mới</a>
						</li>
					</ul>
					<!-- /.nav-second-level -->
				</li>
			</ul>
		</div>
		<!-- /.sidebar-collapse -->
	</div>
	<!-- /.navbar-static-side -->
</nav>