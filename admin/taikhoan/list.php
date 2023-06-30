<div class="page-wrapper">
    <div class="page-breadcrumb">
        <div class="row">
            <div class="col-5 align-self-center">
                <h4 class="page-title">Danh Sách User</h4>
            </div>
        </div>
    </div>
    <div class="container-fluid">
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-body">
                        <h4 class="card-title">Danh sách Admin</h4>
                    </div>
                    <div class="table-responsive">
                        <table class="table table-striped">
                            <thead>
                                <tr>
                                    <th scope="col">#</th>
                                    <th scope="col">Tên kh</th>
                                    <th scope="col">Hình</th>
                                    <th scope="col">Email</th>
                                    <th scope="col">Số đt</th>
                                    <th scope="col">Địa Chỉ</th>
                                    <th scope="col">Vai Trò</th>
                                    <th scope="col">Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                foreach ($listtaikhoanadmin as $taikhoan) {
                                    extract($taikhoan);

                                    $hinhpath = "../upload/" . $hinh;
                                    if (is_file($hinhpath)) {
                                        $hinh = "<img src='" . $hinhpath . "' width='50'>";
                                    } else {
                                        $hinh = "no photo";
                                    }

                                    $xoatk = "index.php?act=xoatk&ma_kh=" . $ma_kh;
                                    echo '<tr>
                                    <th scope="row">' . $ma_kh . '</th>
                                    <td>' . $ho_ten . '</td>
                                    <td>' . $hinh . '</td>
                                    <td>' . $email . '</td>
                                    <td>' . $dia_chi . '</td>
                                    <td>' . $sdt . '</td>
                                    <td>Admin</td>
                                    <td><a href="' . $xoatk . '" class="btn btn-success text-white" style="background-color: red;">Xóa</a>
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
                        <h4 class="card-title">Danh sách Khách Hàng</h4>
                    </div>
                    <div class="table-responsive">
                        <table class="table table-striped">
                            <thead>
                                <tr>
                                    <th scope="col">#</th>
                                    <th scope="col">Tên kh</th>
                                    <th scope="col">Hình</th>
                                    <th scope="col">Email</th>
                                    <th scope="col">Số đt</th>
                                    <th scope="col">Địa Chỉ</th>
                                    <th scope="col">Vai Trò</th>
                                    <th scope="col">Action</th>
                                </tr>
                            </thead>
                            <tbody>
                            <?php
                                foreach ($list_kh as $valuetk) {
                                    extract($valuetk);

                                    $hinhpath = "../upload/" . $hinh;
                                    if (is_file($hinhpath)) {
                                        $hinh = "<img src='" . $hinhpath . "' width='50'>";
                                    } else {
                                        $hinh = "no photo";
                                    }

                                    $xoatk = "index.php?act=xoatk&ma_kh=" . $ma_kh;
                                    echo '<tr>
                                    <th scope="row">' . $ma_kh . '</th>
                                    <td>' . $ho_ten . '</td>
                                    <td>' . $hinh . '</td>
                                    <td>' . $email . '</td>
                                    <td>' . $dia_chi . '</td>
                                    <td>' . $sdt . '</td>
                                    <td>Khách hàng</td>
                                    <td><a href="' . $xoatk . '" class="btn btn-success text-white" style="background-color: red;">Xóa</a>
                                    </td>
                                </tr>';
                                }
                                ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>