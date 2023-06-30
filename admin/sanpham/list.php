<div class="page-wrapper">
    <div class="page-breadcrumb">
        <div class="row">
            <div class="col-5 align-self-center">
                <h4 class="page-title">Danh Sách sản Phẩm</h4>
            </div>
        </div>
    </div>
    <div class="container-fluid">
        <form action="index.php?act=listsp" method="post">
            <input type="text" name="kyw">
            <select name="ma_loai">
                <option value="0" selected>Tất cả</option>
                <?php
                foreach ($listdanhmuc as $danhmuc) {
                    extract($danhmuc);
                    echo '<option value="' . $ma_loai . '">' . $ten_loai . '</option>';
                }
                ?>
            </select>
            <input type="submit" name="listok" value="Go">
        </form>
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-body">
                        <h4 class="card-title">Danh sách</h4>
                    </div>
                    <div class="table-responsive">
                        <table class="table table-striped">
                            <thead>
                                <tr>
                                    <th scope="col">#</th>
                                    <th scope="col">Tên sản phẩm</th>
                                    <th scope="col">Hình</th>
                                    <th scope="col">Đơn giá</th>
                                    <th scope="col">Ngày nhập</th>
                                    <th scope="col">Số lượng</th>
                                    <th scope="col">Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                foreach ($listsanpham as $sanpham) {
                                    extract($sanpham);
                                    $suasp = "index.php?act=suasp&ma_sp=" . $ma_sp;
                                    $xoasp = "index.php?act=xoasp&ma_sp=" . $ma_sp;
                                    $hinhpath = "../upload/" . $hinh;
                                    if (is_file($hinhpath)) {
                                        $hinh = "<img src='" . $hinhpath . "' width='100'>";
                                    } else {
                                        $hinh = "no photo".$hinhpath;
                                    }
                                    $soluong =  so_luong_sp($ma_sp);
                                    echo '<tr>
                                    <th scope="row">' . $ma_sp . '</th>
                                    <td>' . $ten_sp . '</td>
                                    <td>' . $hinh . '</td>
                                    <td  style="color: red;">' . $don_gia . ' VNĐ</td>
                                    <td width="10%">' . $ngay_nhap . '</td>
                                    <td class="mo_ta" width="10%">'. $soluong[0]["so_luong_tong"] . '</td>
                                    <td width="12%"><a href="' . $suasp . '" class="btn btn-success text-white">Sửa</a>
                                        <a href="' . $xoasp . '" class="btn btn-success text-white" style="background-color: red;">Xóa</a>
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