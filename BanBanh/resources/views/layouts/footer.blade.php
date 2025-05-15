	<div id="footer" class="color-div">
		<div class="container">
			<div class="row">
				<div class="col-sm-3">
					<div class="widget">
						<h4 class="widget-title">Bánh Ngọt Việt</h4>
						<p>Chào mừng bạn đến với Bánh Ngọt Việt! Chúng tôi chuyên cung cấp các loại bánh ngọt tươi ngon, làm từ nguyên liệu chất lượng cao, mang đến hương vị đậm đà và yêu thương.</p>
					</div>
				</div>
				<div class="col-sm-2">
					<div class="widget">
						<h4 class="widget-title">Thông Tin </h4>
						<div>
							<ul class="list-unstyled">
								<li><a href="{{ route('trangchu') }}"><i class="fa fa-chevron-right"></i> Trang Chủ</a></li>
								<li><a href="{{ route('gioithieu') }}"><i class="fa fa-chevron-right"></i> Giới Thiệu</a></li>
								<li><a href="{{ route('loaisanpham', 1) }}"><i class="fa fa-chevron-right"></i> Sản Phẩm</a></li>
								<li><a href="{{ route('lienhe') }}"><i class="fa fa-chevron-right"></i> Liên Hệ</a></li>
								<li><a href="{{ route('dangky') }}"><i class="fa fa-chevron-right"></i> Đăng Ký</a></li>
                    		</ul>
						</div>
					</div>
				</div>
				<div class="col-sm-3">
                <div class="widget">
                    <h4 class="widget-title">Liên Hệ</h4>
                    <div class="contact-info">
                        <p>
                            <span class="contact-icon"><i class="fa fa-map-marker"></i></span>
                            <span class="contact-text">123 Đường Bánh Ngọt, Quận 1, TP. Hồ Chí Minh</span>
                        </p>
                        <p>
                            <span class="contact-icon"><i class="fa fa-phone"></i></span>
                            <span class="contact-text">0909 123 456</span>
                        </p>
                        <p>
                            <span class="contact-icon"><i class="fa fa-envelope"></i></span>
                            <span class="contact-text">info@banhngotviet.vn</span>
                        </p>
                        <p>
                            <span class="contact-icon"><i class="fa fa-facebook-square"></i></span>
                            <span class="contact-text"><a href="https://facebook.com/banhngotviet" target="_blank">Facebook</a></span>
                        </p>
                        <p>
                            <span class="contact-icon"><i class="fa fa-comment"></i></span>
                            <span class="contact-text"><a href="https://zalo.me/0347131350" target="_blank">Zalo</a></span>
                        </p>
                    </div>
                </div>
            </div>
				<div class="col-sm-3">
					<div class="widget">
						<h4 class="widget-title">Đăng Ký Nhận Tin</h4>
						<p>Đăng ký để nhận thông tin ưu đãi và các món bánh mới nhất!</p>
						<form action="#" method="post">
						<input type="email" name="email" class="form-control" placeholder="Nhập email của bạn" required>
                            <span class="input-group-btn">
                                <button class="btn btn-primary" type="submit">Đăng Ký</button>
                            </span>
						</form>
					</div>
				</div>
			</div> <!-- .row -->
		</div> <!-- .container -->
	</div> <!-- #footer -->
	<div class="copyright">
		<div class="container">
			<p class="pull-left">Bản quyền (&copy;)2025 Bánh Ngọt Việt. Mọi quyền được bảo lưu </p>
			<p class="pull-right pay-options">
				<a href="#"><img src="image/pay/master.png" class="payment-logo" alt="MasterCard" height="10px"/></a>
				<a href="#"><img src="image/pay/applepay.png" class="payment-logo" alt="ApplePay" /></a>
				<a href="#"><img src="image/pay/visa.png" class="payment-logo" alt="Visa" /></a>
				<a href="#"><img src="image/pay/paypal.png" class="payment-logo" alt="PayPal" /></a>
			</p>
			<div class="clearfix"></div>
		</div> <!-- .container -->
	</div> <!-- .copyright -->

<style>
.contact-info p {
    display: flex;
    align-items: center;
    margin-bottom: 10px;
    font-size: 14px !important;
    line-height: 24px !important;
    padding-left: 0 !important; /* Loại bỏ padding-left từ CSS ghi đè */
    vertical-align: middle !important; /* Ưu tiên căn giữa */
}

.contact-info .contact-icon {
    flex: 0 0 24px;
    text-align: center;
    margin-right: 10px; /* Khoảng cách giữa icon và văn bản */
}

.contact-info .contact-icon i {
    color: #ff6f61;
    font-size: 16px;
    line-height: 24px;
}

.contact-info .contact-text {
    flex: 1;
    line-height: 24px;
    font-family: "Open Sans", sans-serif !important; /* Đồng bộ font */
    font-weight: 300 !important; /* Đồng bộ weight */
    color: #7b8fa3 !important; /* Đồng bộ màu */
}

.contact-info a {
    color: #555;
    text-decoration: none;
}

.contact-info a:hover {
    color: #ff6f61;
}

@media (max-width: 767px) {
    .contact-info p {
        white-space: normal;
    }
}

.copyright .pay-options .payment-logo {
    display: inline-block;
    border: 2px solid #fff; /* Khung trắng */
    border-radius: 5px; /* Góc bo tròn */
    padding: 5px; /* Khoảng cách trong khung */
    margin-left: 10px; /* Khoảng cách giữa các khung */
    transition: border-color 0.3s; /* Hiệu ứng khi hover */
}

.copyright .pay-options .payment-logo:first-child {
    margin-left: 0; /* Loại bỏ margin cho logo đầu tiên */
}

.copyright .pay-options .payment-logo:hover {
    border-color: #ff6f61; /* Thay đổi màu khung khi hover */
}

.copyright .pay-options img {
    height: 30px; /* Kích thước ảnh */
    vertical-align: middle; /* Căn giữa ảnh */
}
</style>