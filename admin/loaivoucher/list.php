<div class="page-wrapper">
    <div class="page-breadcrumb">
        <div class="row">
            <div class="col-5 align-self-center">
                <h4 class="page-title">Danh Sách Loại Voucher</h4>
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
                        <table class="table table-striped">
                            <thead>
                                <tr>
                                    <th scope="col">#</th>
                                    <th scope="col">Tên Loại</th>
                                    <th scope="col">Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                foreach ($listloaivc as $voucher) {
                                    extract($voucher);
                                    $sualvc = "index.php?act=sualvc&ma_lvc=" . $ma_lvc;
                                    $xoalvc = "index.php?act=xoalvc&ma_lvc=" . $ma_lvc;
                                    echo '<tr>
                                                <th scope="row">' . $ma_lvc . '</th>
                                                <td>' . $ten_lvc . '</td>
                                                <td><a href="' . $sualvc . '" class="btn btn-success text-white">Sửa</a>
                                                    <a href="' . $xoalvc . '" class="btn btn-success text-white" style="background-color: red;">Xóa</a>
                                                </td>
                                            </tr>';
                                }
                                ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
            <div class="col-12">
                <div class="card">
                    <div class="card-body">
                        <h4 class="card-title">Thêm Loại Voucher</h4>
                    </div>
                    <div class="table-responsive">
                        <form action="index.php?act=addlvc" method="post">
                            <div class="form-group">
                                <label class="col-md-12"> Tên Loại voucher</label>
                                <div class="col-md-12">
                                    <input type="text" placeholder="Nhập tên loại voucher" class="form-control form-control-line" name="ten_lvc">
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
