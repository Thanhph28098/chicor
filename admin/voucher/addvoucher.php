<div class="page-wrapper">
    <div class="page-breadcrumb">
        <div class="row">
            <div class="col-5 align-self-center">
                <h4 class="page-title">Thêm Voucher Mới</h4>
            </div>
        </div>
    </div>
    <div class="container-fluid">
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-body">
                        <h4 class="card-title">Thêm voucher</h4>
                    </div>
                    <div class="table-responsive">
                        <form action="index.php?act=addvc_new" method="post" style="width: 50%; margin: 0 auto;">
                            <div class="form-group">
                                <label class="col-md-12">Tên voucher</label>
                                <div class="col-md-12">
                                    <input type="text" class="form-control form-control-line" name="ten_vc">
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-md-12">Mức giảm giá</label>
                                <div class="col-md-12">
                                    <input type="number" class="form-control form-control-line" name="muc_giam_gia">
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-md-12">Hạn sử dụng</label>
                                <div class="col-md-12">
                                    <input type="date" class="form-control form-control-line" name="hsd">
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-sm-12">Loại voucher</label>
                                <div class="col-sm-12">
                            
                               
                                    <select name="ma_lvc" class="form-select shadow-none form-control-line">
                                        <?php
                                        foreach ($listloaivc as $voucher) {
                                            extract($voucher);
                                            echo '<option value="' . $ma_lvc . '">' . $ten_lvc . '</option>';
                                        }
                                        ?>
                                    </select>
                             
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="col-sm-12">
                                    <button class="btn btn-success text-white" name="themmoi">Add</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>