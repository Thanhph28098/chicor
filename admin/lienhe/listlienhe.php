<div class="page-wrapper">
    <div class="page-breadcrumb">
        <div class="row">
            <div class="col-5 align-self-center">
                <h4 class="page-title">Danh Sách Liên Hệ</h4>
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
                                    <th scope="col">Khách Hàng</th>
                                    <th scope="col">Email</th>
                                    <th scope="col">Tiêu Đề</th>
                                    <th scope="col">Nội Dung</th>
                                    <th scope="col">Action</th>
                                </tr>
                            </thead>
                            <tbody>
                            <?php
                                foreach ($listlienhe as $lienhe) {
                                    extract($lienhe);
                                    
                                    $xoalh = "index.php?act=xoalh&id=" . $id;
                                    echo '<tr>
                                                <th scope="row">' . $id . '</th>
                                                <td>' . $yourname . '</td>
                                                <td>' . $youremail . '</td>
                                                <td>' . $title . '</td>
                                                <td>' . $message . '</td>
                                              <td>
                                                    <a href="' . $xoalh . '" class="btn btn-success text-white" style="background-color: red;">Xóa</a>
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
