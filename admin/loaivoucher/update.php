<?php
if (is_array($dm)) {
    extract($dm);
}
?>
<div class="page-wrapper">
    <div class="page-breadcrumb">
        <div class="row">
            <div class="col-5 align-self-center">
                <h4 class="page-title">Cập Nhật Loại Sản Phẩm</h4>
            </div>
        </div>
    </div>
    <div class="container-fluid">
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-body">
                        <h4 class="card-title">Loại Sản Phẩm</h4>
                    </div>
                    <div class="table-responsive">
                        <form action="index.php?act=updatelvc" method="post">
                            <div class="form-group">
                                <label class="col-md-12"> Tên Loại</label>
                                <div class="col-md-12">
                                    <input type="text" placeholder="Nhập tên loại sản phẩm" class="form-control form-control-line" name="ten_lvc" value="<?php if (isset($ten_lvc) && ($ten_lvc != "")) echo $ten_lvc; ?>">
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="col-sm-12">
                                    <input type="hidden" name="ma_lvc" value="<?php if (isset($ma_lvc) && ($ma_lvc > 0)) echo $ma_lvc; ?>">
                                    <button class="btn btn-success text-white" name="capnhat">Update</button>
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
