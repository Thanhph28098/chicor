    <div class="hero-wrap hero-bread" style="background-image: url('/duan1/view/images/bg_6.jpg');">
        <div class="container">
            <div class="row no-gutters slider-text align-items-center justify-content-center">
                <div class="col-md-9 ftco-animate text-center">
                    <p class="breadcrumbs"><span class="mr-2"><a href="index.php">Trang chủ</a></span> <span>Hóa đơn</span></p>
                    <h1 class="mb-0 bread">Hóa đơn</h1>
                </div>
            </div>
        </div>
    </div>

    <section class="ftco-section ftco-cart">
        <div class="container">
            <div style="text-align: center; margin-bottom: 50px; border-bottom: 1px solid black;">
                <h3>Thông tin đơn hàng</h3>
            </div>
            <div class="row">
                <div class="col-md-12 ftco-animate">
                    <form action="index.php?act=billcomfirm" method="post">
                        <div class="row mb">
                            <table class="table">
                                <?php
                                if (isset($_SESSION['user'])) {
                                    $name = $_SESSION['user']['ho_ten'];
                                    $address = $_SESSION['user']['dia_chi'];
                                    $email = $_SESSION['user']['email'];
                                    $tel = $_SESSION['user']['sdt'];
                                }
                                ?>
                                <thead class="thead-primary">
                                    <tr class="text-center">
                                        <th>&nbsp;</th>
                                        <th>Người đặt hàng</th>
                                        <th>Địa chỉ</th>
                                        <th>Email</th>
                                        <th>Điện thoại</th>
                                        <!-- <th>Tổng đơn hàng</th> -->
                                        <th colspan="2">Thanh toán</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>&nbsp;</td>
                                        <td><input type="text" name="ho_ten" value="<?= $name ?>" class="form-control"></td>
                                        <td><input type=" text" name="dia_chi" value="<?= $address ?>" class="form-control"></td>
                                        <td><input type="text" name="email" value="<?= $email ?>" class="form-control"></td>
                                        <td><input type="text" name="sdt" value="<?= $tel ?>" class="form-control"></td>
                                        <!-- <td><input type="text" name="tong" value="<?= $tongdonhang ?>.000 VNĐ" class="form-control"></td> -->
                                        <td>
                                            <input type="radio" name="pttt" id="btn1" checked value="0">Trả tiền khi nhận hàng <br>
                                            <input type="radio" name="pttt" id="btn2" value="1">Thanh toán online
                                        </td>
                                    </tr>
                                </tbody>
                            </table>                        
                        </div>
                    </div>
                    <div class="QZ4vFF">
                        <div class="MqHNeD">
                            <div class="vXeTuK"><span>Tổng tiền hàng</span></div>
                            <div class="_30Hj4X">
                                <div>₫<?= $tongdonhang ?> </div>
                            </div>
                        </div>
                        <div class="MqHNeD">
                            <div class="vXeTuK"><span>Phí vận chuyển</span></div>
                            <div class="_30Hj4X">
                                <div>₫20000</div>
                            </div>
                        </div>
                        <div class="MqHNeD">
                            <div class="vXeTuK">
                                <span>Giảm giá phí vận chuyển</span>
                                <div class="stardust-popover ZVaifC" id="stardust-popover10" tabindex="0">
                                    <div role="button" class="stardust-popover__target">
                                    </div>
                                </div>
                            </div>
                            <div class="_30Hj4X" >
                                <div>- ₫<?php if ($tongdonhang > 199000 ) {
                                    echo "<span class='giam_phi_vc'>15000</span>";
                                } else {
                                    echo "<span class='giam_phi_vc'>0</span>";
                                }
                                ?></div>
                            </div>
                        </div>
                        <div class="MqHNeD">
                            <select name="giam_gia" id="vc_giam_gia" onchange="so_tien_giam_gia()" style="border: 1px solid rgb(222, 219, 219);">
                                    <option value="0">Voucher từ Chicor shop</option>
                                    <?php if ($tongdonhang < 200000) {
                                        echo "<option value='0'>Đặt thêm để sử dụng voucher</option>";
                                    }?>
                                <?php if($tongdonhang >= 200000){
                                    echo ($tongdonhang >= 200000) ? ("<option value=".$listvc[0]["muc_giam_gia"].">".$listvc[0]["ten_vc"]."</option>") : "";
                                    echo ($tongdonhang >= 250000) ? ("<option value=".$listvc[1]["muc_giam_gia"].">".$listvc[1]["ten_vc"]."</option>") : "";
                                    echo ($tongdonhang >= 300000) ? ("<option value=".$listvc[2]["muc_giam_gia"].">".$listvc[2]["ten_vc"]."</option>") : "";
                                    echo ($tongdonhang >= 350000) ? ("<option value=".$listvc[3]["muc_giam_gia"].">".$listvc[3]["ten_vc"]."</option>") : "";
                                    echo ($tongdonhang >= 400000) ? ("<option value=".$listvc[4]["muc_giam_gia"].">".$listvc[4]["ten_vc"]."</option>") : "";
                                    echo ($tongdonhang >= 450000) ? ("<option value=".$listvc[5]["muc_giam_gia"].">".$listvc[5]["ten_vc"]."</option>") : "";
                                    echo ($tongdonhang >= 500000) ? ("<option value=".$listvc[6]["muc_giam_gia"].">".$listvc[6]["ten_vc"]."</option>") : "";
                                    echo ($tongdonhang >= 550000) ? ("<option value=".$listvc[7]["muc_giam_gia"].">".$listvc[7]["ten_vc"]."</option>") : "";
                                    echo ($tongdonhang >= 600000) ? ("<option value=".$listvc[8]["muc_giam_gia"].">".$listvc[8]["ten_vc"]."</option>") : "";
                                    echo ($tongdonhang >= 650000) ? ("<option value=".$listvc[9]["muc_giam_gia"].">".$listvc[9]["ten_vc"]."</option>") : "";
                                    echo ($tongdonhang >= 700000)  ? ("<option value=".$listvc[10]["muc_giam_gia"].">".$listvc[10]["ten_vc"]."</option>") : "";
                                    echo ($tongdonhang >= 750000)  ? ("<option value=".$listvc[11]["muc_giam_gia"].">".$listvc[11]["ten_vc"]."</option>") : "";
                                }?>
                            </select>
                            <div class="_30Hj4X">
                                <div >- ₫<span id="so_tien_giam" class="vc_giam"></span></div>
                            </div>
                        </div>
                        <div class="MqHNeD fF6WqS">
                            <div class="vXeTuK _4I0y7U"><span>Tổng số tiền</span></div>
                            <div class="_30Hj4X">
                                <div class="fqySNq">₫<span id="tong_tien"></span></div>
                                <input type="text" name="tong" class="tong_tien" value="" hidden>
                                <input type="text" name="tong_giam" class="tong_giam" value="" hidden>  
                            </div>
                        </div>
                        <div class="MqHNeD fF6WqS">
                            <div class="vXeTuK _4I0y7U"><span style="color: red; font-size: 12px;">⚠️ Giảm giá sẽ được áp dụng với đơn hàng trên 200.000 VNĐ <br> ⚠️ Sử dụng voucher để hiện nút đặt hàng</span></div>
                        </div>
                    </div>
                    <div id="content" class="No_hienQR" style="margin: 0 auto; display: none;"><img src="/duan1/upload/ma_QR_BIDV.jpg" alt="QR" width="200px"></div>

                <div class="bill">
                    <input type="submit" value="ĐỒNG Ý ĐẶT HÀNG" name="dongydathang" class="btn btn-primary py-3 px-4" id="dongydathang">
                </div>
                </form>
            </div>
        </div>

        </div>
    </section>

    <script>
        document.getElementById("btn1").onclick = function() {
        document.getElementById("content").style.display = 'none';
        };

        document.getElementById("btn2").onclick = function() {
        document.getElementById("content").style.display = 'block';
        };

        function so_tien_giam_gia(){
            const muc_giam_gia = document.querySelector("#vc_giam_gia").value;
            const so_tien_giam = document.querySelector("#so_tien_giam");
            so_tien_giam.innerHTML = muc_giam_gia * <?= $tongdonhang?> / 100;
            so_tien_giam.value = muc_giam_gia * <?= $tongdonhang?> / 100;   
            tinh_tong();
        }

        function tinh_tong(){
            const vc_giam = document.querySelector(".vc_giam").value;
            const tong_tien = document.querySelector("#tong_tien");

            const giam_phi_vc = <?= $tongdonhang?> >= 200000 ? 15000 : 0;
            tong_tien.innerHTML = <?= $tongdonhang?>  + 20000 - giam_phi_vc - vc_giam;
            tong_tien.value = <?= $tongdonhang?>  + 20000 - giam_phi_vc - vc_giam;

            const tong = document.querySelector(".tong_tien");
            tong.value = tong_tien.value;

            const tong_giam = document.querySelector(".tong_giam");
            tong_giam.value = giam_phi_vc + vc_giam/100;
            hien_btn();
        }

        function hien_btn(){
            const btn = document.querySelector("#dongydathang");
            const tong_tien = document.querySelector("#tong_tien").value;
            
            if (tong_tien == null) {
                btn.style.display = 'none';
            } else {
                btn.style.display = 'block';
            }
        }  
        hien_btn();
        </script>
    <style>
        .QZ4vFF{
            width: 350px;
        }
        .MqHNeD{
            display: flex;
            justify-content: space-between;
            margin-bottom: 20px;
            border-bottom: 1px solid rgb(152, 151, 151);
        }
        .fqySNq{
            color: red;
        }
        .bill{
            margin: 0 auto;
            margin-top: 170px;
        }
    </style>