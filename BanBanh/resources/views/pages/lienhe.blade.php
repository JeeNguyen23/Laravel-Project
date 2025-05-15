@extends("layouts.master")
@section("content")
<div class="inner-header">
    <div class="container">
        <div class="pull-left">
            <h6 class="inner-title">Thư Góp Ý Kiến</h6>
        </div>
        <div class="pull-right">
            <div class="beta-breadcrumb font-large">
                <a href="{{route('trangchu')}}">Trang Chủ</a> / <span>Liên Hệ</span>
            </div>
        </div>
        <div class="clearfix"></div>
    </div>
</div>
<div class="beta-map">
    <div class="abs-fullwidth beta-map wow flipInX">
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3919.447734914246!2d106.69829871462303!3d10.776389692314858!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x31752f38f8e112df%3A0x12e6d908e1b1c11c!2sHo+Chi+Minh+City%2C+Vietnam!5e0!3m2!1sen!2s!4v1634567891234" ></iframe>
    </div>
</div>
<div class="container">
    <div id="content" class="space-top-none">
        <div class="space50"> </div>
        <div class="row">
            <div class="col-sm-8">
                <h2>Nhập Nội Dung Góp Ý</h2>
                <div class="space20"> </div>
                <p>Chúng tôi luôn trân trọng ý kiến đóng góp của bạn để cải thiện chất lượng dịch vụ và sản phẩm. Vui lòng điền thông tin dưới đây, đội ngũ Bánh Ngọt Việt sẽ phản hồi bạn sớm nhất!</p>
                <div class="space20"> </div>
                <form action="" method="post" class="contact-form">
                    @csrf
                    <div class="form-block">
                        <input name="name" type="text" value="{{ Auth::user()->name }}" placeholder="Họ và tên" readonly>
                    </div>
                    <div class="form-block">
                        <input name="your-email" type="email" value="{{ Auth::user()->email }}" placeholder="Email của bạn" readonly>
                    </div>
                    <div class="form-block">
                        <input name="subject" type="text" placeholder="Chủ đề góp ý">
                    </div>
                    <div class="form-block">
                        <textarea name="message" placeholder="Nội dung góp ý của bạn"></textarea>
                    </div>
                    <div class="form-block">
                        <button type="submit" class="beta-btn primary">Gửi Góp Ý <i class="fa fa-chevron-right"></i></button>
                    </div>
                </form>
            </div>
            <div class="col-sm-4">
                <h2>Thông Tin Liên Hệ</h2>
                <div class="space20"> </div>

                <div class="contact-item">
                    <h6 class="contact-title"><i class="fa fa-map-marker"></i> Địa Chỉ</h6>
                    <div class="contact-row">
                        <span class="contact-icon"><i class="fa fa-map-marker"></i></span>
                        <span class="contact-text">123 Đường Bánh Ngọt, Quận 1, TP. Hồ Chí Minh, Việt Nam</span>
                    </div>
                </div>
                <div class="space20"> </div>

                <div class="contact-item">
                    <h6 class="contact-title"><i class="fa fa-envelope"></i> Liên Hệ Hợp Tác</h6>
                    <div class="contact-row">
                        <span class="contact-icon"><i class="fa fa-envelope"></i></span>
                        <span class="contact-text">Nếu bạn muốn hợp tác kinh doanh, vui lòng liên hệ qua email: <br><a href="mailto:info@banhngotviet.vn">info@banhngotviet.vn</a></span>
                    </div>
                </div>
                <div class="space20"> </div>

                <div class="contact-item">
                    <h6 class="contact-title"><i class="fa fa-user-plus"></i> Tuyển Dụng</h6>
                    <div class="contact-row">
                        <span class="contact-icon"><i class="fa fa-user-plus"></i></span>
                        <span class="contact-text">Chúng tôi luôn tìm kiếm những tài năng để gia nhập đội ngũ. Liên hệ qua email: <br><a href="mailto:tuyendung@banhngotviet.vn">tuyendung@banhngotviet.vn</a></span>
                    </div>
                </div>
            </div>
        </div>
    </div> <!-- #content -->
</div> <!-- .container -->
@endsection