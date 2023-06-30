<div class="page-wrapper">
    <div class="page-breadcrumb">
        <div class="row">
            <div class="col-5 align-self-center">
                <h4 class="page-title">Danh Sách Voucher</h4>
            </div>
        </div>
    </div>
    <div class="container-fluid">
        <form action="index.php?act=listvc" method="post">
            <input type="text" name="kyw">
            <select name="ma_lvc">
                <option value="0" selected>Tất cả</option>
                <?php
                foreach ($listloaivc as $voucher) {
                    extract($voucher);
                    echo '<option value="' . $ma_lvc . '">' . $ten_lvc . '</option>';
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
                                    <th scope="col">Tên voucher</th>
                                    <th scope="col">Mức giảm giá </th>
                                    <th scope="col">Hạn sử dụng </th>
                                    <th scope="col">Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                foreach ($listvc as $vc) {
                                    extract($vc);
                                    
                                                       
                                    $suavc = "index.php?act=suavc&ma_vc=" . $ma_vc;
                                    $xoavc = "index.php?act=xoavc&ma_vc=" . $ma_vc;
                                  
                                   
                                    echo '<tr>
                                    <th scope="row">' . $ma_vc . '</th>
                                    <td>' . $ten_vc . '</td>
                                  
                                    <td  style="color: red;">' . $muc_giam_gia . '%</td>
                                    <td width="10%">' . $hsd . '</td>
                                   
                                    
                                    
                                    
                                    <td width="12%"><a href="' . $suavc . '" class="btn btn-success text-white">Sửa</a>
                                        <a href="' . $xoavc . '" class="btn btn-success text-white" style="background-color: red;">Xóa</a>
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