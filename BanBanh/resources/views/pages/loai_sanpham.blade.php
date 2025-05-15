@extends("layouts.master")
@section("content")
<div class="inner-header">
		<div class="container">
			<div class="pull-left">
				<h6 class="inner-title">Loại Sản phẩm</h6>
			</div>
			<div class="pull-right">
				<div class="beta-breadcrumb font-large">
					<a href="{{route('trangchu')}}">Trang chủ</a> / <span>{{$loai->name}}</span>
				</div>
			</div>
			<div class="clearfix"></div>
		</div>
	</div>
	<div class="container">
		<div id="content" class="space-top-none">
			<div class="main-content">
				<div class="space60">&nbsp;</div>
				<div class="row">
					<div class="col-sm-3">
						<ul class="aside-menu">
						@foreach($type_products as $tp)
							<li><a href="{{route('loaisanpham', $tp->id)}}">{{$tp->name}}</a></li>
						@endforeach
						</ul>
					</div>
					<div class="col-sm-9">
						<div class="beta-products-list">
							<h4>Sản phẩm cùng loại</h4>
							<div class="beta-products-details">
								<p class="pull-left">{{count($sanpham_cungloai)}} được tìm thấy</p>
								<div class="clearfix"></div>
							</div>

							<div class="row">
							@foreach($sanpham_cungloai as $scl)
								<div class="col-sm-4">
									<div class="single-item">
									@if($scl->promotion_price !=0)
                                        <div class="ribbon-wrapper"><div class="ribbon sale">Sale</div></div>
                                    @endif
										<div class="single-item-header">
											<a href="{{route('chitietsanpham', $scl->id)}}"><img src="image/product/{{$scl->image}}" height="250" alt=""></a>
										</div>
										<div class="single-item-body">
											<p class="single-item-title">{{$scl->name}}</p>
											<p class="single-item-price">
											@if($scl->promotion_price==0)
                                                <span class="flash-sale">{{$scl->unit_price}}</span>
                                            @else
                                                <span class="flash-del">{{number_format($scl->unit_price)}} vnđ</span>
                                                <span class="flash-sale">{{number_format($scl->promotion_price)}} vnđ</span>
                                            @endif
											</p>
										</div>
										<div class="single-item-caption">
											<a class="add-to-cart pull-left" href="{{route('themgiohang', $scl->id)}}"><i class="fa fa-shopping-cart"></i></a>
											<a class="beta-btn primary" href="{{route('chitietsanpham', $scl->id)}}">Chi tiết <i class="fa fa-chevron-right"></i></a>
											<div class="clearfix"></div>
										</div>
									</div>
								</div>
							@endforeach
							</div>
							<div class="row">{{$sanpham_cungloai->appends(["pagediff" => $sanpham_khacloai->currentPage()])->links()}}</div>
						</div> <!-- .beta-products-list -->

						<div class="space50">&nbsp;</div>

						<div class="beta-products-list">
							<h4>Sản phẩm khác</h4>
							<div class="beta-products-details">
								<p class="pull-left">{{count($sanpham_khacloai)}} được tìm thấy</p>
								<div class="clearfix"></div>
							</div>
							<div class="row">
							@foreach($sanpham_khacloai as $skl)
								<div class="col-sm-4">
									<div class="single-item">
									@if($skl->promotion_price !=0)
                                        <div class="ribbon-wrapper"><div class="ribbon sale">Sale</div></div>
                                    @endif
										<div class="single-item-header">
											<a href="{{route('chitietsanpham', $skl->id)}}"><img src="image/product/{{$skl->image}}" height="250" alt=""></a>
										</div>
										<div class="single-item-body">
											<p class="single-item-title">{{$skl->name}}</p>
											<p class="single-item-price">
											@if($skl->promotion_price==0)
                                                <span class="flash-sale">{{$skl->unit_price}}</span>
                                            @else
                                                <span class="flash-del">{{number_format($skl->unit_price)}} vnđ</span>
                                                <span class="flash-sale">{{number_format($skl->promotion_price)}} vnđ</span>
                                            @endif
											</p>
										</div>
										<div class="single-item-caption">
											<a class="add-to-cart pull-left" href="{{route('themgiohang', $skl->id)}}"><i class="fa fa-shopping-cart"></i></a>
											<a class="beta-btn primary" href="{{route('chitietsanpham', $skl->id)}}">Chi tiết <i class="fa fa-chevron-right"></i></a>
											<div class="clearfix"></div>
										</div>
									</div>
								</div>
							@endforeach
							</div>
							<div class="row">{{$sanpham_khacloai->appends(["pagediff" => $sanpham_cungloai->currentPage()])->links()}}</div>
							<div class="space15">&nbsp;</div>
						
						</div> <!-- .beta-products-list -->
					</div>
				</div> <!-- end section with sidebar and main content -->
			</div> <!-- .main-content -->
		</div> <!-- #content -->
	</div> <!-- .container -->
@endsection