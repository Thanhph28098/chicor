<div class="hero-wrap hero-bread" style="background-image: url('/duan1/view/images/bg_6.jpg');">
    <div class="container">
        <div class="row no-gutters slider-text align-items-center justify-content-center">
            <div class="col-md-9 ftco-animate text-center">
                <p class="breadcrumbs"><span class="mr-2"><a href="index.html">Trang Chủ</a></span> <span>Đăng
                        Ký</span>
                </p>
                <h1 class="mb-0 bread">Đăng Ký</h1>
            </div>
        </div>
    </div>
</div>

<section class="ftco-section ftco-no-pb ftco-no-pt bg-light">
    <div style="text-align: center;">
        <h1>Sigup</h1>
    </div>
    <div class="container">
        <form action="index.php?act=dangky" method="post" enctype="multipart/form-data">
            <!-- 2 column grid layout with text inputs for the first and last names -->
            <div class="row mb-4">
                <div class="col">
                    <div class="form-outline">
                        <label class="form-label" for="form6Example1">Tên</label>
                        <input type="text" id="form6Example1" class="form-control" name="user" />
                        <span style="color:red;"><?php echo isset($erron_ten)? $erron_ten: "";?></span>
                    </div>
                    <div class="form-outline">
                        <label class="form-label" for="form6Example2">Điện thoại</label>
                        <input type="number" id="form6Example2" class="form-control" name="sdt" />
                        <span style="color:red;"><?php echo isset($erron_sdt)? $erron_sdt: "";?></span>
                    </div>
                </div>
                <div class="col">
                    <div class="form-outline">
                        <label class="form-label" for="form6Example2">Ảnh</label>
                        <input type="file" class="form-control" style="font-size: 15px;" id="cover" name="hinh" />
                        <span style="color:red;"><?php echo isset($erron_anh)? $erron_anh: "";?></span>
                    </div>
                    <div class="form-outline" style="text-align: center;">
                        <img src="https://www.freeiconspng.com/uploads/no-image-icon-13.png" id="coverPreview" alt="" width="100px">
                    </div>
                </div>
            </div>

            <!-- Email input -->
            <div class="form-outline mb-4">
                <label class="form-label" for="form6Example5">Email</label>
                <input type="email" id="form6Example5" class="form-control" require name="email" />
                <span style="color:red;"><?php echo isset($erron_eml)? $erron_eml: "";?></span>
            </div>

            <!-- Text input -->
            <div class="form-outline mb-4">
                <label class="form-label" for="form6Example3">Mật khẩu</label>
                <input type="password" id="form6Example3" class="form-control" name="pass" />
                <span style="color:red;"><?php echo isset($erron_pass)? $erron_pass: "";?></span>
            </div>

            <!-- Text input -->
            <div class="form-outline mb-4">
                <label class="form-label" for="form6Example4">Địa chỉ</label>
                <input type="text" id="form6Example4" class="form-control" name="dc" />
                <span style="color:red;"><?php echo isset($erron_dc)? $erron_dc: "";?></span>
            </div>


            <!-- Checkbox -->
            <div class="form-check  justify-content-center mb-4">
                <input class="form-check-input" type="checkbox" value="" checked />
                <label class="form-check-label" for="form6Example8"> Create an account? </label>
            </div>

            <!-- Submit button -->
            <button type="submit" class="btn btn-primary btn-block mb-4" style="height: 50px;" name="dangky">Sig Up</button>
        </form>
    </div>
</section>

<script>
    let coverPreview = document.getElementById('coverPreview');
    let cover = document.getElementById('cover');

    coverPreview.addEventListener('click', _ => cover.click());

    cover.addEventListener("change", _ => {
        let file = cover.files[0];
        let reader = new FileReader();
        reader.onload = function() {
            coverPreview.src = reader.result;
        }
        reader.readAsDataURL(file);
    });
</script>
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

<!-- <form action="index.php?act=dangky" method="post">
    <div class="row mb10">
        Email
        <input type="email" name="email" require>
    </div>
    <div class="row mb10">
        Tên đăng nhập
        <input type="text" name="user">
    </div>
    <div class="row mb10">
        Mật khẩu
        <input type="password" name="pass">
    </div>
    <div class="row mb10">
        <input type="submit" value="Đăng ký" name="dangky">
        <input type="reset" value="Nhập lại">
    </div>
</form> -->