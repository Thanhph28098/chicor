<?php
if (is_array($vc)) {
    extract($vc);
}

?>
<div class="page-wrapper">
    <div class="page-breadcrumb">
        <div class="row">
            <div class="col-5 align-self-center">
                <h4 class="page-title">Cập Nhật Voucher</h4>
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
                        <form action="index.php?act=updatevc" method="post" enctype="multipart/form-data" style="width: 50%; margin: 0 auto;">
                            <div class="form-group">
                                <label class="col-md-12">Tên Voucher</label>
                                <div class="col-md-12">
                                    <input type="text" class="form-control form-control-line" value="<?= $ten_vc ?>" name="ten_vc">
                                </div>
                            </div>
                         
                            <div class="form-group">
                                <label class="col-md-12">Mức giảm giá</label>
                                <div class="col-md-12">
                                    <input type="number" class="form-control form-control-line" value="<?= $muc_giam_gia ?>" name="muc_giam_gia">
                                </div>
                            </div>
                         
                            <div class="form-group">
                                <label class="col-md-12">Hạn sử dụng</label>
                                <div class="col-md-12">
                                    <input type="date" class="form-control form-control-line" name="hsd">
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-sm-12">loại Voucher</label>
                                <div class="col-sm-12">
                                    <select name="ma_lvc" class="form-select shadow-none form-control-line">
                                        <?php
                                        foreach ($listloaivc as $voucher) {
                                            extract($voucher);
                                            if ($id_lvc == $ma_lvc) $s = "selected";
                                            else $s = "";
                                            echo '<option value="' . $ma_lvc . '" ' . $s . '>' . $ten_lvc . '</option>';
                                        }
                                        ?>
                                    </select>
                                </div>
                            </div>
                            <div class="form-group">
                                <input type="hidden" name="ma_vc" value="<?= $ma_vc ?>">
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