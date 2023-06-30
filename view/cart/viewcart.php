<div class="hero-wrap hero-bread" style="background-image: url('/duan1/view/images/bg_6.jpg');">
        <div class="container">
            <div class="row no-gutters slider-text align-items-center justify-content-center">
                <div class="col-md-9 ftco-animate text-center">
                    <p class="breadcrumbs"><span class="mr-2"><a href="index.php">Trang chủ</a></span> <span>Giỏ hàng</span></p>
                    <h1 class="mb-0 bread">Giỏ hàng của tôi</h1>
                </div>
            </div>
        </div>
    </div>
<section class="ftco-section ftco-cart">
    <div class="container">
        <div class="row">
            <div class="col-md-12 ftco-animate">
                <div class="cart-list">
                    <table class="table">
                        <?php viewcart(1) ?>
                    </table>
                </div>
                <div class="row mb bill" style="justify-content: space-between;">
                    <a href="index.php?act=bill" class="btn btn-primary py-3 px-4">Đặt Hàng</a>
                    <a href="index.php?act=delcart" class="btn btn-primary py-3 px-4">Xóa Giỏ Hàng</a>
                </div>
            </div>
        </div>

    </div>
</section>