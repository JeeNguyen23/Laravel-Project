@extends("layouts.master")
@section("content")
<div class="inner-header">
    <div class="container">
        <div class="pull-left">
            <h6 class="inner-title">Giới thiệu</h6>
        </div>
        <div class="pull-right">
            <div class="beta-breadcrumb font-large">
            <a href="{{ route('trangchu') }}">Trang Chủ</a> / <span>Giới Thiệu</span>
            </div>
        </div>
        <div class="clearfix"></div>
    </div>
</div>
<div class="container">
    <div id="content">
        <div class="our-history">
            <h2 class="text-center wow fadeInDown">Lịch Sử Cửa Hàng</h2>
            <div class="space35">&nbsp;</div>

            <div class="history-slider">
                <div class="history-navigation">
                    <a data-slide-index="0" href="blog_with_2sidebars_type_e.html" class="circle"><span class="auto-center">2003</span></a>
                    <a data-slide-index="1" href="blog_with_2sidebars_type_e.html" class="circle"><span class="auto-center">2004</span></a>
                    <a data-slide-index="2" href="blog_with_2sidebars_type_e.html" class="circle"><span class="auto-center">2005</span></a>
                    <a data-slide-index="3" href="blog_with_2sidebars_type_e.html" class="circle"><span class="auto-center">2007</span></a>
                    <a data-slide-index="4" href="blog_with_2sidebars_type_e.html" class="circle"><span class="auto-center">2009</span></a>
                    <a data-slide-index="5" href="blog_with_2sidebars_type_e.html" class="circle"><span class="auto-center">2011</span></a>
                    <a data-slide-index="6" href="blog_with_2sidebars_type_e.html" class="circle"><span class="auto-center">2014</span></a>
                </div>

                <div class="history-slides">
                    <div>
                        <div class="row">
                            <div class="col-sm-5">
                                <img src="{{ asset('assets/dest/images/history.jpg') }}" alt="Lịch sử 2003">
                            </div>
                            <div class="col-sm-7">
                                <h5 class="other-title">Thành Lập</h5>
                                <p>
                                    123 Đường Bánh Ngọt,<br />
                                    Quận 1, TP. Hồ Chí Minh<br />
                                    Việt Nam
                                </p>
                                <div class="space20">&nbsp;</div>
                                <p>Bánh Ngọt Việt được thành lập với niềm đam mê mang đến những chiếc bánh thơm ngon, chất lượng cao cho khách hàng. Chúng tôi bắt đầu từ một cửa hàng nhỏ tại TP. Hồ Chí Minh, với sứ mệnh lan tỏa niềm vui qua từng món bánh ngọt được làm từ trái tim.</p>
                            </div>
                        </div>
                    </div>
                    <div>
                        <div class="row">
                            <div class="col-sm-5">
                                <img src="{{ asset('assets/dest/images/history.jpg') }}" alt="Lịch sử 2004">
                            </div>
                            <div class="col-sm-7">
                                <h5 class="other-title">Mở Rộng Menu</h5>
                                <p>
                                    123 Đường Bánh Ngọt,<br />
                                    Quận 1, TP. Hồ Chí Minh<br />
                                    Việt Nam
                                </p>
                                <div class="space20">&nbsp;</div>
                                <p>Chúng tôi giới thiệu thêm nhiều loại bánh mới như bánh kem, bánh mì ngọt và bánh quy, nhận được sự yêu thích lớn từ khách hàng. Đây là bước ngoặt quan trọng giúp Bánh Ngọt Việt khẳng định vị thế tại thị trường bánh ngọt TP. Hồ Chí Minh.</p>
                            </div>
                        </div>
                    </div>
                    <div>
                        <div class="row">
                            <div class="col-sm-5">
                                <img src="{{ asset('assets/dest/images/history.jpg') }}" alt="Lịch sử 2005">
                            </div>
                            <div class="col-sm-7">
                                <h5 class="other-title">Chi Nhánh Mới</h5>
                                <p>
                                    456 Đường Hoa Mai,<br />
                                    Quận 3, TP. Hồ Chí Minh<br />
                                    Việt Nam
                                </p>
                                <div class="space20">&nbsp;</div>
                                <p>Chúng tôi mở chi nhánh thứ hai tại Quận 3, mang đến không gian ấm cúng và những chiếc bánh ngọt chất lượng cho nhiều khách hàng hơn. Sự mở rộng này đánh dấu bước phát triển mạnh mẽ của Bánh Ngọt Việt.</p>
                            </div>
                        </div>
                    </div>
                    <div>
                        <div class="row">
                            <div class="col-sm-5">
                                <img src="{{ asset('assets/dest/images/history.jpg') }}" alt="Lịch sử 2007">
                            </div>
                            <div class="col-sm-7">
                                <h5 class="other-title">Hợp Tác Nguyên Liệu</h5>
                                <p>
                                    123 Đường Bánh Ngọt,<br />
                                    Quận 1, TP. Hồ Chí Minh<br />
                                    Việt Nam
                                </p>
                                <div class="space20">&nbsp;</div>
                                <p>Chúng tôi hợp tác với các nhà cung cấp nguyên liệu cao cấp tại Việt Nam, đảm bảo mọi chiếc bánh đều được làm từ những nguyên liệu tươi ngon nhất, an toàn và chất lượng.</p>
                            </div>
                        </div>
                    </div>
                    <div>
                        <div class="row">
                            <div class="col-sm-5">
                                <img src="{{ asset('assets/dest/images/history.jpg') }}" alt="Lịch sử 2009">
                            </div>
                            <div class="col-sm-7">
                                <h5 class="other-title">Dịch Vụ Đặt Hàng Online</h5>
                                <p>
                                    123 Đường Bánh Ngọt,<br />
                                    Quận 1, TP. Hồ Chí Minh<br />
                                    Việt Nam
                                </p>
                                <div class="space20">&nbsp;</div>
                                <p>Chúng tôi ra mắt dịch vụ đặt hàng online, giúp khách hàng dễ dàng mua bánh mọi lúc mọi nơi. Website chính thức của Bánh Ngọt Việt được ra đời, nhận được nhiều phản hồi tích cực.</p>
                            </div>
                        </div>
                    </div>
                    <div>
                        <div class="row">
                            <div class="col-sm-5">
                                <img src="{{ asset('assets/dest/images/history.jpg') }}" alt="Lịch sử 2011">
                            </div>
                            <div class="col-sm-7">
                                <h5 class="other-title">Giải Thưởng Ẩm Thực</h5>
                                <p>
                                    123 Đường Bánh Ngọt,<br />
                                    Quận 1, TP. Hồ Chí Minh<br />
                                    Việt Nam
                                </p>
                                <div class="space20">&nbsp;</div>
                                <p>Bánh Ngọt Việt vinh dự nhận giải thưởng "Cửa Hàng Bánh Ngọt Đẹp Nhất TP. Hồ Chí Minh", khẳng định chất lượng và sự sáng tạo trong từng sản phẩm.</p>
                            </div>
                        </div>
                    </div>
                    <div>
                        <div class="row">
                            <div class="col-sm-5">
                                <img src="{{ asset('assets/dest/images/history.jpg') }}" alt="Lịch sử 2014">
                            </div>
                            <div class="col-sm-7">
                                <h5 class="other-title">Phát Triển Thương Hiệu</h5>
                                <p>
                                    123 Đường Bánh Ngọt,<br />
                                    Quận 1, TP. Hồ Chí Minh<br />
                                    Việt Nam
                                </p>
                                <div class="space20">&nbsp;</div>
                                <p>Chúng tôi tái định vị thương hiệu với logo mới và phong cách hiện đại hơn, tiếp tục sứ mệnh mang đến niềm vui và hạnh phúc qua những chiếc bánh ngọt ngon miệng.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

            <div class="space50">&nbsp;</div>
        <hr />
        <div class="space50">&nbsp;</div>
        <h2 class="text-center wow fadeInDown">Đam Mê Của Chúng Tôi Tạo Nên Dịch Vụ Tuyệt Vời</h2>
        <div class="space20">&nbsp;</div>
        <p class="text-center wow fadeInLeft">Chúng tôi luôn đặt tâm huyết vào từng chiếc bánh, mang đến trải nghiệm ngọt ngào và đáng nhớ cho khách hàng.<br /> Mỗi sản phẩm là một câu chuyện, được làm nên từ tình yêu và sự sáng tạo.</p>
        <div class="space35">&nbsp;</div>

        <div class="row">
            <div class="col-sm-2 col-sm-push-2">
                <div class="beta-counter">
                    <p class="beta-counter-icon"><i class="fa fa-user"></i></p>
                    <p class="beta-counter-value timer numbers" data-to="5000" data-speed="2000">5000</p>
                    <p class="beta-counter-title">Khách Hàng Hài Lòng</p>
                </div>
            </div>

            <div class="col-sm-2 col-sm-push-2">
                <div class="beta-counter">
                    <p class="beta-counter-icon"><i class="fa fa-birthday-cake"></i></p>
                    <p class="beta-counter-value timer numbers" data-to="10000" data-speed="2000">10000</p>
                    <p class="beta-counter-title">Chiếc Bánh Đã Bán</p>
                </div>
            </div>

            <div class="col-sm-2 col-sm-push-2">
                <div class="beta-counter">
                    <p class="beta-counter-icon"><i class="fa fa-clock-o"></i></p>
                    <p class="beta-counter-value timer numbers" data-to="15000" data-speed="2000">15000</p>
                    <p class="beta-counter-title">Giờ Phục Vụ</p>
                </div>
            </div>

            <div class="col-sm-2 col-sm-push-2">
                <div class="beta-counter">
                    <p class="beta-counter-icon"><i class="fa fa-heart"></i></p>
                    <p class="beta-counter-value timer numbers" data-to="50" data-speed="2000">50</p>
                    <p class="beta-counter-title">Loại Bánh Mới</p>
                </div>
            </div>
        </div> <!-- .beta-counter block end -->

        
        <div class="space50">&nbsp;</div>
        <hr />
        <div class="space50">&nbsp;</div>

        <h2 class="text-center wow fadeInDown">Đội Ngũ Tuyệt Vời Của Chúng Tôi</h2>
        <div class="space20">&nbsp;</div>
        <h5 class="text-center other-title wow fadeInLeft">Người Sáng Lập</h5>
        <p class="text-center wow fadeInRight">Đội ngũ sáng lập của chúng tôi là những người đam mê làm bánh, luôn sáng tạo để mang đến những sản phẩm tuyệt vời.</p>
        <div class="space20">&nbsp;</div>
        <div class="row">
            <div class="col-sm-6 wow fadeInLeft">
                <div class="beta-person media">
                    <img class="pull-left" src="{{ asset('assets/dest/images/person2.jpg') }}" alt="Người sáng lập 1">
                    <div class="media-body beta-person-body">
                        <h5>Nguyễn Văn An</h5>
                        <p class="font-large">Người Sáng Lập</p>
                        <p>Nguyễn Văn An là đầu bếp chính với hơn 15 năm kinh nghiệm trong nghề làm bánh. Anh đã mang đến những công thức độc đáo, làm nên thương hiệu Bánh Ngọt Việt.</p>
                        <a href="#">Xem thêm <i class="fa fa-chevron-right"></i></a>
                    </div>
                </div>
            </div>
            <div class="col-sm-6 wow fadeInRight">
                <div class="beta-person media">
                    <img class="pull-left" src="{{ asset('assets/dest/images/person3.jpg') }}" alt="Người sáng lập 2">
                    <div class="media-body beta-person-body">
                        <h5>Trần Thị Mai</h5>
                        <p class="font-large">Người Sáng Lập</p>
                        <p>Trần Thị Mai là người phụ trách chiến lược kinh doanh, giúp Bánh Ngọt Việt phát triển mạnh mẽ và mở rộng quy mô tại TP. Hồ Chí Minh.</p>
                        <a href="#">Xem thêm <i class="fa fa-chevron-right"></i></a>
                    </div>
                </div>
            </div>
        </div>
        
        <div class="space60">&nbsp;</div>
        <h5 class="text-center other-title wow fadeInDown">Những Chuyên Gia Hàng Đầu</h5>
        <p class="text-center wow fadeInUp">Đội ngũ của chúng tôi bao gồm những thợ làm bánh lành nghề, luôn sẵn sàng phục vụ bạn.</p>
        <div class="space20">&nbsp;</div>
        <div class="row">
            <div class="col-sm-3">
                <div class="beta-person beta-person-full">
                    <div class="bets-img-hover">
                        <img src="{{ asset('assets/dest/images/person1.jpg') }}" alt="Thợ bánh 1">
                    </div>
                    <div class="beta-person-body">
                        <h5>Lê Hoàng Nam</h5>
                        <p class="font-large">Thợ Làm Bánh</p>
                        <p>Chuyên gia bánh kem với kỹ năng trang trí tinh tế, Nam luôn mang đến những chiếc bánh đẹp mắt và ngon miệng.</p>
                        <a href="#">Xem thêm <i class="fa fa-chevron-right"></i></a>
                    </div>
                </div>
            </div>
            <div class="col-sm-3">
                <div class="beta-person beta-person-full">
                    <div class="bets-img-hover">
                        <img src="{{ asset('assets/dest/images/person2.jpg') }}" alt="Thợ bánh 2">
                    </div>
                    <div class="beta-person-body">
                        <h5>Phạm Thị Hương</h5>
                        <p class="font-large">Thợ Làm Bánh</p>
                        <p>Hương chuyên về bánh mì ngọt và bánh quy, với các công thức sáng tạo được khách hàng yêu thích.</p>
                        <a href="#">Xem thêm <i class="fa fa-chevron-right"></i></a>
                    </div>
                </div>
            </div>
            <div class="col-sm-3">
                <div class="beta-person beta-person-full">
                    <div class="bets-img-hover">
                        <img src="{{ asset('assets/dest/images/person3.jpg') }}" alt="Thợ bánh 3">
                    </div>
                    <div class="beta-person-body">
                        <h5>Ngô Minh Tuấn</h5>
                        <p class="font-large">Thợ Làm Bánh</p>
                        <p>Tuấn là chuyên gia về bánh sinh nhật, luôn tạo ra những thiết kế độc đáo theo yêu cầu khách hàng.</p>
                        <a href="#">Xem thêm <i class="fa fa-chevron-right"></i></a>
                    </div>
                </div>
            </div>
            <div class="col-sm-3">
                <div class="beta-person beta-person-full">
                    <div class="bets-img-hover">
                        <img src="{{ asset('assets/dest/images/person4.jpg') }}" alt="Thợ bánh 4">
                    </div>
                    <div class="beta-person-body">
                        <h5>Đỗ Thị Lan</h5>
                        <p class="font-large">Thợ Làm Bánh</p>
                        <p>Lan chuyên về bánh truyền thống Việt Nam, mang đến hương vị quê hương qua từng sản phẩm.</p>
                        <a href="#">Xem thêm <i class="fa fa-chevron-right"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </div> <!-- #content -->
</div> <!-- .container -->
@endsection