	<section id="home-section" class="hero">
		<div class="home-slider owl-carousel">
			<div class="slider-item js-fullheight">
				<div class="overlay"></div>
				<div class="container-fluid p-0">
					<div class="row d-md-flex no-gutters slider-text align-items-center justify-content-end" data-scrollax-parent="true">
						<img class="one-third order-md-last img-fluid" src="/duan1/view/images/bg_1.png" alt="">
						<div class="one-forth d-flex align-items-center ftco-animate" data-scrollax=" properties: { translateY: '70%' }">
							<div class="text">
								<span class="subheading">#Hàng mới về</span>
								<div class="horizontal">
									<h1 class="mb-4 mt-3">Bộ sưu tập thời trang 2022</h1>
									<p class="mb-4">Với xu hướng hiện đại, một chiếc áo khoác không chỉ giúp bạn chống lại thời tiết mà nó còn giúp bạn hoàn thiện bộ trang phục và khẳng định cá tính thời trang của mình. 360 xin gợi ý đến các bạn những chiếc áo khoác nam mà nam giới ai cũng cần có một chiếc trong tủ đồ hàng ngày.</p>

									<p><a href="#" class="btn-custom">khám phá ngay</a></p>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>

			<div class="slider-item js-fullheight">
				<div class="overlay"></div>
				<div class="container-fluid p-0">
					<div class="row d-flex no-gutters slider-text align-items-center justify-content-end" data-scrollax-parent="true">
						<img class="one-third order-md-last img-fluid" src="/duan1/view/images/bg_2.png" alt="">
						<div class="one-forth d-flex align-items-center ftco-animate" data-scrollax=" properties: { translateY: '70%' }">
							<div class="text">
								<span class="subheading">#Hàng mới về</span>
								<div class="horizontal">
									<h1 class="mb-4 mt-3">Bộ sưu tập mùa đông mới</h1>
									<p class="mb-4">Để trở thành một người đàn ông phong độ, đẳng cấp và bản lĩnh trong sự nghiệp, không những cần có nhưng tố chất trong tính cách con người, mà quan trọng hơn hết, đó chính là cách bạn thể hiện ra qua vẻ bề ngoài của bạn. Cho dù thời trang nam có thay đổi thế nào, bạn cũng không nên phá vỡ những quy tắc “bất di bất dịch” trong cách chọn và phối hợp trang phục nam.</p>

									<p><a href="#" class="btn-custom">khám phá ngay</a></p>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
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

	<section class="ftco-section bg-light">
		<div class="container">
			<div class="row justify-content-center mb-3 pb-3">
				<div class="col-md-12 heading-section text-center ftco-animate">
					<h2 class="mb-4">Sản phẩm mới của shop</h2>
					<p>Để đón chào một mùa đông với quần áo ấm, Chicor shop xin ra mắt loạt sản phẩm mới</p>
				</div>
			</div>
		</div>
		<!-- <div class="boxsp ' . $mr . '">
	        <div class="row img"><a href="' . $linksp . '"><img src="' . $ha . '" alt=""></a></div>
	        <p id="dongia">$' . $don_gia . '</p>
	        <h3 id="tensp"><a href="' . $linksp . '">' . $ten_sp . '</a></h3>
	        <div class="btnaddtocart">
	            <form action="index.php?act=addtocart" method="post">
	                <input type="hidden" name="ma_sp" value="' . $ma_sp . '">
	                <input type="hidden" name="ten_sp" value="' . $ten_sp . '">
	                <input type="hidden" name="hinh" value="' . $hinh . '">
	                <input type="hidden" name="don_gia" value="' . $don_gia . '">
	                <input type="submit" name="addtocart" value="Thêm vào giỏ hàng">
	            </form>
	        </div>
	    </div> -->

		<div class="container">
			<div class="row">
				<?php
				$i = 0;
				foreach ($spnew as $sp) {
					extract($sp);
					$linksp = "index.php?act=sanphamct&idsp=" . $ma_sp;
					$ha = $img_path . $hinh;
					//<!-- 1 item -->
					echo '<div class="col-sm-12 col-md-6 col-lg-3 ftco-animate d-flex" >
	                <div class="product d-flex flex-column">
	                    <a href="' . $linksp . '" class="img-prod"><img class="img-fluid" src="' . $ha . '" alt="Colorlib Template" width="255" height="255">
	                        <div class="overlay"></div>
	                    </a>
	                    <div class="text py-3 pb-4 px-3">
	                        <div class="d-flex">
	                            <div class="cat">
	                                <span>Lifestyle</span>
	                            </div>
	                            <div class="rating">
	                                <p class="text-right mb-0">
	                                    <a href="#"><span class="ion-ios-star-outline"></span></a>
	                                    <a href="#"><span class="ion-ios-star-outline"></span></a>
	                                    <a href="#"><span class="ion-ios-star-outline"></span></a>
	                                    <a href="#"><span class="ion-ios-star-outline"></span></a>
	                                    <a href="#"><span class="ion-ios-star-outline"></span></a>
	                                </p>
	                            </div>
	                        </div>
	                        <h3><a href="' . $linksp . '" style="word-wrap: break-word;white-space: normal;overflow: hidden;display: -webkit-box; text-overflow: ellipsis;-webkit-box-orient: vertical;-webkit-line-clamp: 2;">' . $ten_sp . '</a></h3>
	                        <div class="pricing" >
	                            <p class="price"><span style="color: red;">' . $don_gia . ' VNĐ</span></p>
	                        </div>
	                        <p class="bottom-area d-flex px-3">
	                            <a href="'. $linksp .'" class="add-to-cart text-center py-2 mr-1"><span>Thêm giỏ hàng<i class="ion-ios-add ml-1"></i>
                                </span></a>
	                            <a href="'. $linksp .'" class="buy-now text-center py-2">Mua ngay<span><i class="ion-ios-cart ml-1"></i></span></a>
	                        </p>
	                    </div>
	                </div> 
	            </div>';
					$i += 1; //index.php?act=addtocart&ma_sp=' . $ma_sp . '
				}
				?>
			</div>
		</div>
	</section>


	<section class="ftco-section testimony-section">
		<div class="container">
			<div class="row">
				<div class="col-lg-5">
					<div class="services-flow">
						<div class="services-2 p-4 d-flex ftco-animate">
							<div class="icon">
								<span class="flaticon-bag"></span>
							</div>
							<div class="text">
                            <h3>Free Shipping</h3>
                            <p class="mb-0">Đăng kí tài khoản và đặt hàng để hưởng ưu đãi free ship mọi nơi trên toàn quốc</p>
                        </div>
                    </div>
                    <div class="services-2 p-4 d-flex ftco-animate">
                        <div class="icon">
                            <span class="flaticon-heart-box"></span>
                        </div>
                        <div class="text">
                            <h3>Quà tặng giá trị</h3>
                            <p class="mb-0">Shop luôn luôn tri ân khách hàng VIP của shop</p>
                        </div>
                    </div>
                    <div class="services-2 p-4 d-flex ftco-animate">
                        <div class="icon">
                            <span class="flaticon-payment-security"></span>
                        </div>
                        <div class="text">
                            <h3>Hỗ trợ cả ngày</h3>
                            <p class="mb-0">Shop luôn sẵn sàng hỗ trợ kịp thời khi bạn có thắc mắc</p>
                        </div>
                    </div>
                    <div class="services-2 p-4 d-flex ftco-animate">
                        <div class="icon">
                            <span class="flaticon-customer-service"></span>
                        </div>
                        <div class="text">
                            <h3>Hỗ trợ cả ngày</h3>
                            <p class="mb-0">Shop luôn sẵn sàng hỗ trợ kịp thời khi bạn có thắc mắc</p>
                        </div>
						</div>
					</div>
				</div>
				<div class="col-lg-7">
					<div class="heading-section ftco-animate mb-5">
						<h2 class="mb-4">Khách hàng hài lòng của chúng tôi nói</h2>
						<p>Có ng nói về cái này thì có lẽ là một người mẫu này anh em tinh tế mình thấy nó cũng là người nhà mình đi học thêm đi rồi biết nó là một người mẫu này anh em tinh tế mình thấy nó cũng là người nhà mình đi học</p>
					</div>
					<div class="carousel-testimony owl-carousel">
						<div class="item">
							<div class="testimony-wrap">
								<div class="user-img mb-4" style="background-image: url(/duan1/view/images/person_1.jpg)">
									<span class="quote d-flex align-items-center justify-content-center">
										<i class="icon-quote-left"></i>
									</span>
								</div>
								<div class="text">
									<p class="mb-4 pl-4 line">Có ng nói về cái này thì có lẽ là một người mẫu này anh em tinh tế mình thấy nó cũng là người nhà mình đi học thêm đi rồi biết nó là một người mẫu này anh em tinh tế mình thấy nó cũng là người nhà mình đi học</p>
									<p class="name">Garreth Smith</p>
									<span class="position">Nhà thiết kế thời trang</span>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>

	<section class="ftco-gallery">
		<div class="container">
			<div class="row justify-content-center">
				<div class="col-md-8 heading-section text-center mb-4 ftco-animate">
					<h2 class="mb-4">Theo dõi Page Facebook</h2>
					<p>Theo dõi page facebook củashop để nhận thông báo về sản phẩm mới ra</p>
				</div>
			</div>
		</div>
		<div class="container-fluid px-0">
			<div class="row no-gutters">
				<div class="col-md-4 col-lg-2 ftco-animate">
					<a href="images/gallery-1.jpg" class="gallery image-popup img d-flex align-items-center" style="background-image: url(/duan1/view/images/gallery-1.jpg);">
						<div class="icon mb-4 d-flex align-items-center justify-content-center">
							<span class="icon-instagram"></span>
						</div>
					</a>
				</div>
				<div class="col-md-4 col-lg-2 ftco-animate">
					<a href="images/gallery-2.jpg" class="gallery image-popup img d-flex align-items-center" style="background-image: url(/duan1/view/images/gallery-2.jpg);">
						<div class="icon mb-4 d-flex align-items-center justify-content-center">
							<span class="icon-instagram"></span>
						</div>
					</a>
				</div>
				<div class="col-md-4 col-lg-2 ftco-animate">
					<a href="images/gallery-3.jpg" class="gallery image-popup img d-flex align-items-center" style="background-image: url(/duan1/view/images/gallery-3.jpg);">
						<div class="icon mb-4 d-flex align-items-center justify-content-center">
							<span class="icon-instagram"></span>
						</div>
					</a>
				</div>
				<div class="col-md-4 col-lg-2 ftco-animate">
					<a href="images/gallery-4.jpg" class="gallery image-popup img d-flex align-items-center" style="background-image: url(/duan1/view/images/gallery-4.jpg);">
						<div class="icon mb-4 d-flex align-items-center justify-content-center">
							<span class="icon-instagram"></span>
						</div>
					</a>
				</div>
				<div class="col-md-4 col-lg-2 ftco-animate">
					<a href="images/gallery-5.jpg" class="gallery image-popup img d-flex align-items-center" style="background-image: url(/duan1/view/images/gallery-5.jpg);">
						<div class="icon mb-4 d-flex align-items-center justify-content-center">
							<span class="icon-instagram"></span>
						</div>
					</a>
				</div>
				<div class="col-md-4 col-lg-2 ftco-animate">
					<a href="images/gallery-6.jpg" class="gallery image-popup img d-flex align-items-center" style="background-image: url(/duan1/view/images/gallery-6.jpg);">
						<div class="icon mb-4 d-flex align-items-center justify-content-center">
							<span class="icon-instagram"></span>
						</div>
					</a>
				</div>
			</div>
		</div>
	</section>