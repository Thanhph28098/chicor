    <div class="hero-wrap hero-bread" style="background-image: url('/duan1/view/images/bg_6.jpg');">
        <div class="container">
            <div class="row no-gutters slider-text align-items-center justify-content-center">
                <div class="col-md-9 ftco-animate text-center">
                    <p class="breadcrumbs"><span class="mr-2"><a href="index.php">Home</a></span> <span>User</span></p>
                    <h1 class="mb-0 bread">Edit User</h1>
                </div>
            </div>
        </div>
    </div>

    <div class="page-wrapper">
        <div class="page-breadcrumb">
            <div class="container-fluid">
                <div class="row">
                    <?php
                    if (isset($_SESSION['user']) && (is_array($_SESSION['user']))) {
                        extract($_SESSION['user']);
                    }
                    ?>
                    <div class="col-lg-4 col-xlg-3">
                        <div class="card">
                            <div class="card-body">
                                <center class="mt-4"> <img src="/duan1-3/upload/<?= $hinh?>" class="rounded-circle" width="100" />
                                    <h4 class="card-title mt-2"><?= $ho_ten ?></h4>
                                    <h6 class="card-subtitle">Accoubts Manager Amix corp</h6>
                                    <div class="row text-center justify-content-md-center">
                                        <div class="col-4"><a href="javascript:void(0)" class="link"><i class="mdi mdi-account-network"></i>
                                                <font class="font-medium">254</font>
                                            </a></div>
                                        <div class="col-4"><a href="javascript:void(0)" class="link"><i class="mdi mdi-camera"></i>
                                                <font class="font-medium">54</font>
                                            </a></div>
                                    </div>
                                </center>
                            </div>
                            <div>
                                <hr>
                            </div>
                            <div class="card-body"> <small class="text-muted">Email address </small>
                                <h6><?= $email ?></h6> <small class="text-muted pt-4 db">Phone</small>
                                <h6><?= $sdt ?></h6> <small class="text-muted pt-4 db">Address</small>
                                <h6><?= $dia_chi ?></h6>
                                <div class="map-box">
                                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d470029.1604841957!2d72.29955005258641!3d23.019996818380896!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x395e848aba5bd449%3A0x4fcedd11614f6516!2sAhmedabad%2C+Gujarat!5e0!3m2!1sen!2sin!4v1493204785508" width="100%" height="150" frameborder="0" style="border:0" allowfullscreen></iframe>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Column -->
                    <!-- Column -->
                    <div class="col-lg-8 col-xlg-9">
                        <div class="card">
                            <div class="card-body">
                                <form action="index.php?act=edit_taikhoan_fun" method="post" class="form-horizontal form-material mx-2" enctype="multipart/form-data">
                                    <div class="form-group">
                                        <label class="col-md-12">Họ tên</label>
                                        <div class="col-md-12">
                                            <input type="text" class="form-control form-control-line" name="user" value="<?= $ho_ten ?>">
                                            <span style="color:red;"><?php echo isset($erron_ten)? $erron_ten: "";?></span>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="example-email" class="col-md-12">Ảnh</label>
                                        <div class="col-md-12">
                                            <input type="file" class="form-control form-control-line" name="hinh">
                                            <span style="color:red;"><?php echo isset($erron_anh)? $erron_anh: "";?></span>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="example-email" class="col-md-12">Email</label>
                                        <div class="col-md-12">
                                            <input type="email" class="form-control form-control-line" name="email" value="<?= $email ?>" id="example-email">
                                            <span style="color:red;"><?php echo isset($erron_eml)? $erron_eml: "";?></span>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-md-12">Mật khẩu</label>
                                        <div class="col-md-12">
                                            <input type="password" value="password" class="form-control form-control-line" name="pass" value="<?= $mat_khau ?>">
                                            <span style="color:red;"><?php echo isset($erron_pass)? $erron_pass: "";?></span>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-md-12">Điện thoại</label>
                                        <div class="col-md-12">
                                            <input type="text" class="form-control form-control-line" name="sdt" value="<?= $sdt ?>">
                                            <span style="color:red;"><?php echo isset($erron_sdt)? $erron_sdt: "";?></span>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-md-12">Địa chỉ</label>
                                        <div class="col-md-12">
                                            <input type="text" class="form-control form-control-line" name="dc" value="<?= $dia_chi ?>">
                                            <span style="color:red;"><?php echo isset($erron_dc)? $erron_dc: "";?></span>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <div class="col-sm-12">
                                            <input type="hidden" name="id" value="<?= $ma_kh ?>">
                                            <input type="submit" value="Update Profile" name="capnhat" class="btn btn-success text-white">
                                        </div>
                                    </div>
                                    <h2 class="thongbao">
                                        <?php
                                        if (isset($thongbao) && ($thongbao != "")) {
                                            echo $thongbao;
                                        }
                                        ?>
                                    </h2>
                                </form>
                            </div>
                        </div>
                    </div>
                    <!-- Column -->
                </div>
            </div>