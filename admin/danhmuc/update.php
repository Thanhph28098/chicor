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
                        <form action="index.php?act=updatedm" method="post">
                            <div class="form-group">
                                <label class="col-md-12"> Tên Loại</label>
                                <div class="col-md-12">
                                    <input type="text" placeholder="Nhập tên loại sản phẩm" class="form-control form-control-line" name="ten_loai" value="<?php if (isset($ten_loai) && ($ten_loai != "")) echo $ten_loai; ?>">
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="col-sm-12">
                                    <input type="hidden" name="ma_loai" value="<?php if (isset($ma_loai) && ($ma_loai > 0)) echo $ma_loai; ?>">
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