<div class="page-wrapper">
    <div class="page-breadcrumb">
        <div class="row">
            <div class="col-5 align-self-center">
                <h4 class="page-title">Danh Sách Loại Sản Phẩm</h4>
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
                                foreach ($listdanhmuc as $danhmuc) {
                                    extract($danhmuc);
                                    $suadm = "index.php?act=suadm&ma_loai=" . $ma_loai;
                                    $xoadm = "index.php?act=xoadm&ma_loai=" . $ma_loai;
                                    echo '<tr>
                                                <th scope="row">' . $ma_loai . '</th>
                                                <td>' . $ten_loai . '</td>
                                                <td><a href="' . $suadm . '" class="btn btn-success text-white">Sửa</a>
                                                    <a href="' . $xoadm . '" class="btn btn-success text-white" style="background-color: red;">Xóa</a>
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
                        <h4 class="card-title">Thêm Loại Sản Phẩm</h4>
                    </div>
                    <div class="table-responsive">
                        <form action="index.php?act=adddm" method="post">
                            <div class="form-group">
                                <label class="col-md-12"> Tên Loại</label>
                                <div class="col-md-12">
                                    <input type="text" placeholder="Nhập tên loại sản phẩm" class="form-control form-control-line" name="ten_loai">
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