@extends("layouts.master")
@section("content")
<div class="inner-header">
<div class="container">
    <div class="pull-left">
        <h6 class="inner-title">Sản phẩm {{$sanpham->name}}</h6>
    </div>
    <div class="pull-right">
        <div class="beta-breadcrumb font-large">
            <a href="{{route('trangchu')}}">Trang chủ</a> / <span>{{$sanpham->name}}</span>
        </div>
    </div>
    <div class="clearfix"></div>
</div>
</div>
<div class="container">
<div id="content">
    <div class="row">
        <div class="col-sm-9">

            <div class="row">
                <div class="col-sm-4">
                    <img src="image/product/{{$sanpham->image}}" alt="{{$sanpham->name}}">
                </div>
                <div class="col-sm-8">
                    <div class="single-item-body">
                        <p class="single-item-title">{{$sanpham->name}}</p>
                        <p class="single-item-price">
                        @if($sanpham->promotion_price==0)
                            <span class="flash-sale">{{$new->unit_price}}</span>
                        @else
                            <span class="flash-del">{{number_format($sanpham->unit_price)}} vnđ</span>
                            <span class="flash-sale">{{number_format($sanpham->promotion_price)}} vnđ</span>
                        @endif
                        </p>
                    </div>

                    <div class="clearfix"></div>
                    <div class="space20">&nbsp;</div>

                    <div class="single-item-desc">
                        <p>{{$sanpham->description}}</p>
                    </div>
                    <div class="space20">&nbsp;</div>

                    <p>Options:</p>
                    <div class="single-item-options">
                        <select class="wc-select" name="size">
                            <option>Chọn ĐVT</option>
                            <option value="XS" {{$sanpham->unit=="hộp"?"selected":""}}>Hộp</option>
                            <option value="XS" {{$sanpham->unit=="cái"?"selected":""}}>Cái</option>
                        </select>
                        <a class="add-to-cart" href="{{route('themgiohang', $sanpham->id)}}"><i class="fa fa-shopping-cart"></i></a>
                        <div class="clearfix"></div>
                    </div>
                </div>
            </div>

            <div class="space40">&nbsp;</div>
            <div class="woocommerce-tabs">
                <ul class="tabs">
                    <li><a href="#tab-description">Description</a></li>
                    <li><a href="#tab-reviews">Reviews (0)</a></li>
                </ul>

                <div class="panel" id="tab-description">
                    <p>{{$sanpham->description}}</p>
                </div>
                <div class="panel" id="tab-reviews">
                    <p>No Reviews</p>
                </div>
            </div>
            <div class="space50">&nbsp;</div>
            <div class="beta-products-list">
                <h4>Sản phẩm cùng loại</h4>
                <div class="row">
                @foreach($sanpham_lienquan as $slq)
                    <div class="col-sm-4">
                        <div class="single-item">
                        @if($slq->promotion_price !=0)
                            <div class="ribbon-wrapper"><div class="ribbon sale">Sale</div></div>
                        @endif
                            <div class="single-item-header">
                                <a href="{{route('chitietsanpham', $slq->id)}}"><img src="image/product/{{$slq->image}}" height="250" alt=""></a>
                            </div>
                            <div class="single-item-body">
                                <p class="single-item-title">{{$slq->name}}</p>
                                <p class="single-item-price">
                                @if($slq->promotion_price==0)
                                    <span class="flash-sale">{{$slq->unit_price}}</span>
                                @else
                                    <span class="flash-del">{{number_format($slq->unit_price)}} vnđ</span>
                                    <span class="flash-sale">{{number_format($slq->promotion_price)}} vnđ</span>
                                @endif
                                </p>
                            </div>
                            <div class="single-item-caption">
                                <a class="add-to-cart pull-left" href="{{route('themgiohang', $slq->id)}}"><i class="fa fa-shopping-cart"></i></a>
                                <a class="beta-btn primary" href="{{route('chitietsanpham', $slq->id)}}">Chi tiết <i class="fa fa-chevron-right"></i></a>
                                <div class="clearfix"></div>
                            </div>
                        </div>
                    </div>
                @endforeach
                </div>
                <div class="row">{{$sanpham_lienquan->links()}}</div>
            </div> <!-- .beta-products-list -->
        </div>
        <div class="col-sm-3 aside">
            <div class="widget">
                <h3 class="widget-title">Sản phẩm bán chạy</h3>
                <div class="widget-body">
                    <div class="beta-sales beta-lists">

                        @foreach($sanpham_banchay as $sbc)
                        <div class="media beta-sales-item">
                            <a class="pull-left" href="{{route('chitietsanpham', $sbc->id)}}"><img src="image/product/{{$sbc->image}}" alt="abc"></a>
                            <div class="media-body">
                                {{$sbc->name}}
                                @if($sbc->promotion_price==0)
                                    <span class="flash-sale">{{$sbc->unit_price}}</span>
                                @else
                                    <span class="flash-del">{{number_format($sbc->unit_price)}} vnđ</span>
                                    <span class="flash-sale">{{number_format($sbc->promotion_price)}} vnđ</span>
                                @endif
                            </div>
                        </div>
                    @endforeach    
                    </div>
                </div>
            </div> <!-- best sellers widget -->
 
        </div>
    </div>
</div> <!-- #content -->
</div> <!-- .container -->
@endsection