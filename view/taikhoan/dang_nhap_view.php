<div class="hero-wrap hero-bread" style="background-image: url('/duan1/view/images/bg_6.jpg');">
    <div class="container">
        <div class="row no-gutters slider-text align-items-center justify-content-center">
            <div class="col-md-9 ftco-animate text-center">
                <p class="breadcrumbs"><span class="mr-2"><a href="index.html">Trang chủ</a></span> <span>Đăng
                        Nhập</span>
                </p>
                <h1 class="mb-0 bread">Đăng Nhập</h1>
            </div>
        </div>
    </div>
</div>
<div style="text-align: center;">
    <h1>Log In</h1>
</div>
<section class="vh-100">
    <div class="container py-5 h-100">
        <div class="row d-flex align-items-center justify-content-center h-100">
            <div class="col-md-8 col-lg-7 col-xl-6">
                <img src="/duan1/view/images/svg_dang_nhap.jpg" class="img-fluid" alt="Phone image">
            </div>
            <div class="col-md-7 col-lg-5 col-xl-5 offset-xl-1">
                <form action="index.php?act=dangnhap" method="post">
                    <!-- Email input -->
                    <div class="form-outline mb-4">
                        <label class="form-label" for="form1Example13">Email</label>
                        <input type="email" id="form1Example13" class="form-control form-control-lg" name="email" />
                        <span style="color:red;"><?php echo isset($erron_email)? $erron_email: "";?></span>
                    </div>

                    <!-- Password input -->
                    <div class="form-outline mb-4">
                        <label class="form-label" for="form1Example23">Mật khẩu</label>
                        <input type="password" id="form1Example23" class="form-control form-control-lg" name="pass" />
                        <span style="color:red;"><?php echo isset($erron_pass)? $erron_pass: "";?></span>
                    </div>

                    <div class="d-flex justify-content-around align-items-center mb-4">
                        <!-- Checkbox -->
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" value="" id="form1Example3" checked />
                            <label class="form-check-label" for="form1Example3"> Remember me </label>
                        </div>
                        <a href="#!">Quên mật khẩu?</a>
                    </div>

                    <!-- Submit button -->
                    <button type="submit" class="btn btn-primary btn-lg btn-block" style="height: 50px;" name="dangnhap">Sign in</button>

                    <div class="divider d-flex align-items-center my-4">
                        <p class="text-center fw-bold mx-3 mb-0 text-muted">OR</p>
                    </div>

                    <a class="btn btn-primary btn-lg btn-block" style="background-color: #3b5998; height: 50px;" href="#!" role="button">
                        <i class="fab fa-facebook-f me-2"></i>Đăng nhập với Facebook
                    </a>
                    <a class="btn btn-primary btn-lg btn-block" style="background-color: #55acee; height: 50px;" href="#!" role="button">
                        <i class="fab fa-twitter me-2"></i>Đăng nhập với Google</a>

                </form>
            </div>
        </div>
    </div>
    <style>
        .divider:after,
        .divider:before {
            content: "";
            flex: 1;
            height: 1px;
            background: #eee;
        }
    </style>
</section>


<section class="ftco-section ftco-no-pt ftco-no-pb">
    <div class="container">
        <div class="row no-gutters ftco-services">
            <div class="col-lg-4 text-center d-flex align-self-stretch ftco-animate">
                <div class="media block-6 services p-4 py-md-5">
                    <div class="icon d-flex justify-content-center align-items-center mb-4">
                        <span class="flaticon-bag"></span>
                    </div>
                    <div class="media-body">
							<h3 class="heading">Free Ship</h3>
							<p>Đăng kí tài khoản và đặt hàng để hưởng ưu đãi free ship mọi nơi trên toàn quốc.</p>
						</div>
					</div>
				</div>
				<div class="col-lg-4 text-center d-flex align-self-stretch ftco-animate">
					<div class="media block-6 services p-4 py-md-5">
						<div class="icon d-flex justify-content-center align-items-center mb-4">
							<span class="flaticon-customer-service"></span>
						</div>
						<div class="media-body">
							<h3 class="heading">Hỗ trợ kịp thời</h3>
							<p>Shop luôn sẵn sàng hỗ trợ kịp thời khi bạn có thắc mắc.</p>
						</div>
					</div>
				</div>
				<div class="col-lg-4 text-center d-flex align-self-stretch ftco-animate">
					<div class="media block-6 services p-4 py-md-5">
						<div class="icon d-flex justify-content-center align-items-center mb-4">
							<span class="flaticon-payment-security"></span>
						</div>
						<div class="media-body">
							<h3 class="heading">Thanh toán an toàn</h3>
							<p>Thanh toán khi nhận hàng và quét mã QR.</p>
						</div>
                </div>
            </div>
        </div>
    </div>
</section>