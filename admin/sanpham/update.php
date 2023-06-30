<?php
if (is_array($sanpham)) {
    extract($sanpham);
}
$hinhpath = "../upload/" . $hinh;
if (is_file($hinhpath)) {
    $hinh = "<img src='" . $hinhpath . "' width='150'>";
} else {
    $hinh = "no photo";
}
?>
<div class="page-wrapper">
    <div class="page-breadcrumb">
        <div class="row">
            <div class="col-5 align-self-center">
                <h4 class="page-title">Cập Nhật Sản Phẩm</h4>
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
                        <form action="index.php?act=updatesp" method="post" enctype="multipart/form-data" style="width: 50%; margin: 0 auto;">
                            <div class="form-group">
                                <label class="col-md-12">Tên sản phẩm</label>
                                <div class="col-md-12">
                                    <input type="text" class="form-control form-control-line" value="<?= $ten_sp ?>" name="tensp">
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-md-12">Hình ảnh</label>
                                <div class="col-md-12">
                                    <?= $hinh ?>
                                    <input type="file" class="form-control form-control-line" name="hinh">
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-md-12">Đơn giá</label>
                                <div class="col-md-12">
                                    <input type="number" class="form-control form-control-line" value="<?= $don_gia ?>" name="giasp">
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-md-12">Giảm Giá</label>
                                <div class="col-md-12">
                                    <input type="number" class="form-control form-control-line" name="giam_gia">
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-md-12">Ngày nhập</label>
                                <div class="col-md-12">
                                    <input type="date" class="form-control form-control-line" name="ngay_nhap">
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-md-12">Mô tả</label>
                                <div class="col-md-12">
                                    <textarea rows="5" class="form-control form-control-line" name="mota"><?= $mo_ta ?></textarea>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-sm-12">loại sản phẩm</label>
                                <div class="col-sm-12">
                                    <select name="ma_loai" class="form-select shadow-none form-control-line">
                                        <?php
                                        foreach ($listdanhmuc as $danhmuc) {
                                            extract($danhmuc);
                                            if ($iddm == $ma_loai) $s = "selected";
                                            else $s = "";
                                            echo '<option value="' . $ma_loai . '" ' . $s . '>' . $ten_loai . '</option>';
                                        }
                                        ?>
                                    </select>
                                </div>
                            </div>
                            <br>
                            <div class="form-group">
                                <label class="col-md-12">Màu Size</label>
                            <?php foreach($mau_size as $ms): ?>
                                <div class="col-md-12" style="display: flex; width: 50%;">
                                    <input type="text" class="form-control form-control-line" name="mausize" value="<?= $ms['mau_size']?>">
                                    <input type="number" class="form-control form-control-line" name="sl" value="<?= $ms['so_luong']?>">
                                </div>
                            <?php endforeach?>
                            </div>

                            <div class="form-group">
                                <input type="hidden" name="id" value="<?= $ma_sp ?>">
                                <div class="col-sm-12">
                                    <input type="submit" name="capnhat" value="Cập nhật" class="btn btn-success text-white">
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