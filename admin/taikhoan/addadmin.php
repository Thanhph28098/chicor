
<div class="page-wrapper">
    <div class="page-breadcrumb">
        <div class="row">
            <div class="col-5 align-self-center">
                <h4 class="page-title">Thêm tài khoản admin</h4>
            </div>
        </div>
    </div>
    <div class="container-fluid">
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-body">
                    </div>
                    <div class="table-responsive">
                        <form action="index.php?act=addadmin_fun" method="post" enctype="multipart/form-data" style="width: 50%; margin: 0 auto;">
                            <div class="form-group">
                                <label class="col-md-12">Tên</label>
                                <div class="col-md-12">
                                    <input type="text" class="form-control form-control-line" name="user">
                                    <span style="color:red;"><?php echo isset($erron_ten)? $erron_ten: "";?></span>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-md-12">Hình ảnh</label>
                                <div class="col-md-12">
                                    <input type="file" class="form-control" style="font-size: 15px;" id="cover" name="hinh" />
                                    <span style="color:red;"><?php echo isset($erron_anh)? $erron_anh: "";?></span>
                                </div>
                                <div class="form-outline" style="text-align: center; margin-top: 20px;">
                                    <img src="https://www.freeiconspng.com/uploads/no-image-icon-13.png" id="coverPreview" alt="" width="100px">
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-md-12">Email</label>
                                <div class="col-md-12">
                                    <input type="email" class="form-control form-control-line" name="email">
                                    <span style="color:red;"><?php echo isset($erron_eml)? $erron_eml: "";?></span>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-md-12">Mật khẩu</label>
                                <div class="col-md-12">
                                    <input type="password" class="form-control form-control-line" name="pass">
                                    <span style="color:red;"><?php echo isset($erron_pass)? $erron_pass: "";?></span>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-md-12">Địa chỉ</label>
                                <div class="col-md-12">
                                    <input type="text" class="form-control form-control-line" name="dc">
                                    <span style="color:red;"><?php echo isset($erron_dc)? $erron_dc: "";?></span>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-md-12">Điện thoại</label>
                                <div class="col-md-12">
                                    <input type="text" class="form-control form-control-line" name="sdt">
                                    <span style="color:red;"><?php echo isset($erron_sdt)? $erron_sdt: "";?></span>
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="col-sm-12">
                                    <button class="btn btn-success text-white" name="themmoi">Add</button>
                                </div>
                            </div>
                            <?php
                            if (isset($thongbao) && ($thongbao != "")) echo $thongbao;
                            ?>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
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