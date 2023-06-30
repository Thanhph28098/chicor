
<div class="page-wrapper">
    <div class="page-breadcrumb">
        <div class="row">
            <div class="col-5 align-self-center">
                <h4 class="page-title">Thêm Sản Phẩm Mới</h4>
            </div>
        </div>
    </div>
    <div class="container-fluid">
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-body">
                        <h4 class="card-title">Thêm Sản Phẩm</h4>
                    </div>
                    <div class="table-responsive">
                        <form action="index.php?act=addsp_new" method="post" enctype="multipart/form-data" style="width: 50%; margin: 0 auto;">
                            <div class="form-group">
                                <label class="col-md-12">Tên sản phẩm</label>
                                <div class="col-md-12">
                                    <input type="text" class="form-control form-control-line" name="tensp">
                                    <span style="color:red;"><?php echo isset($erron_ten)? $erron_ten: "";?></span>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-md-12">Hình ảnh</label>
                                <div class="col-md-12">
                                    <input type="file" class="form-control form-control-line" name="hinh">
                                    <span style="color:red;"><?php echo isset($erron_anh)? $erron_anh: "";?></span>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-md-12">Đơn giá</label>
                                <div class="col-md-12">
                                    <input type="number" class="form-control form-control-line" name="don_gia">
                                    <span style="color:red;"><?php echo isset($erron_gia)? $erron_gia: "";?></span>
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
                                    <span style="color:red;"><?php echo isset($erron_ngay)? $erron_ngay: "";?></span>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-md-12">Mô tả</label>
                                <div class="col-md-12">
                                    <textarea rows="5" class="form-control form-control-line" name="mo_ta"></textarea>
                                    <span style="color:red;"><?php echo isset($erron_mota)? $erron_mota: "";?></span>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-sm-12">loại sản phẩm</label>
                                <div class="col-sm-12">
                                    <select name="ma_loai" class="form-select shadow-none form-control-line">
                                        <?php
                                        foreach ($listdanhmuc as $danhmuc) {
                                            extract($danhmuc);
                                            echo '<option value="' . $ma_loai . '">' . $ten_loai . '</option>';
                                        }
                                        ?>
                                    </select>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-md-12">Màu Size</label>
                                <div class="col-md-12" style="display: flex; width: 50%;">
                                    <input type="text" class="form-control form-control-line" name="mausize1" placeholder="Đen - S">
                                    <input type="number" class="form-control form-control-line" name="sl1" value="" placeholder="số lượng: 5">
                                    <span style="color:red;"><?php echo isset($erron_mz1)? $erron_mz1: "";?></span>
                                </div>
                                <div class="col-md-12" style="display: flex; width: 50%;">
                                    <input type="text" class="form-control form-control-line" name="mausize2" placeholder="Đen - M">
                                    <input type="number" class="form-control form-control-line" name="sl2" value="" placeholder="số lượng: 5">
                                    <span style="color:red;"><?php echo isset($erron_mz2)? $erron_mz2: "";?></span>
                                </div>
                                <div class="col-md-12" style="display: flex; width: 50%;">
                                    <input type="text" class="form-control form-control-line" name="mausize3" placeholder="Đen - L">
                                    <input type="number" class="form-control form-control-line" name="sl3" value="" placeholder="số lượng: 5">
                                    
                                </div>
                                <div class="col-md-12" style="display: flex; width: 50%;">
                                    <input type="text" class="form-control form-control-line" name="mausize4" placeholder="Đen - XL">
                                    <input type="number" class="form-control form-control-line" name="sl4" value="" placeholder="số lượng: 5">
                                    
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