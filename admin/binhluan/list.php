<div class="page-wrapper">
    <div class="page-breadcrumb">
        <div class="row">
            <div class="col-5 align-self-center">
                <h4 class="page-title">Danh Sách Bình Luận</h4>
            </div>
        </div>
    </div>
    <div class="container-fluid">
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
                                    <th scope="col">Số bình luận</th>
                                    <th scope="col">Ngày bình luận cũ nhất</th>
                                    <th scope="col">Ngày bình luận mới nhất</th>
                                    <th scope="col">Action</th>
                                </tr>
                            </thead>
                                <tbody>
                                <?php
                                foreach ($listsp as $sp) {
                                    $idpro = $sp['ma_sp'];
                                    $sql = "SELECT ten_sp FROM `san_pham` WHERE ma_sp = '$idpro';";
                                    $sql1=  "SELECT COUNT(ma_bl) as 'tongbl' FROM `binh_luan` where idpro = '$idpro';";
                                    $sql2=  "SELECT MAX(ngay_bl) as 'maxbl' FROM `binh_luan` where idpro = '$idpro';";
                                    $sql3 =  "SELECT MIN(ngay_bl) as 'minbl' FROM `binh_luan` where idpro = '$idpro';";
                                    $tensp = pdo_query_one($sql);
                                    $countbl=pdo_query_one($sql1);
                                    $oldbl=pdo_query_one($sql2);
                                    $newbl=pdo_query_one($sql3);
                                    if($countbl['tongbl']>0){
                                    echo '
                                    <tr>
                                    <th scope="row"></th>
                                    <td>'.$tensp["ten_sp"].'</td>
                                    <td>'.$countbl['tongbl'].'</td>
                                    <td>'.$oldbl['maxbl'].'</td>
                                    <td>'.$newbl['minbl'].'</td>
                                    <td><a href="index.php?act=chitietbl&masp='.$idpro.'" class="btn btn-success text-white">Xem
                                            chi tiết</a></td>
                                </tr>';}
                                }
                                ?>
                                </tbody>
                        </table>
                    </div>
                </div>
            </div>

        </div>
    </div>