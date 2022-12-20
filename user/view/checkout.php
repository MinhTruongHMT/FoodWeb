<!DOCTYPE html>
<html lang="en">

    <head>
        <?php include 'layout/head.php' ?>
    </head>

    <body>
        <!-- Spinner Start -->

        <!-- Spinner End -->


        <!-- Navbar Start -->
        <div class="container-fluid fixed-top px-0 wow fadeIn" data-wow-delay="0.1s">
            <div class="top-bar row gx-0 align-items-center d-none d-lg-flex">
                <div class="col-lg-6 px-5 text-start">
                    <small><i class="fa fa-map-marker-alt me-2"></i>123 Street, New York, USA</small>
                    <small class="ms-4"><i class="fa fa-envelope me-2"></i>info@example.com</small>
                </div>
                <?php include 'layout/follow.php'; ?>
            </div>

            <?php include 'layout/menu.php'; ?>
        </div>
        <!-- Navbar End -->


        <!-- Page Header Start -->
        <div class="container-fluid page-header wow fadeIn" data-wow-delay="0.1s">
            <div class="container">
                <h1 class="display-3 mb-3 animated slideInDown">Contact Us</h1>
                <nav aria-label="breadcrumb animated slideInDown">
                    <ol class="breadcrumb mb-0">
                        <li class="breadcrumb-item"><a class="text-body" href="#">Home</a></li>
                        <li class="breadcrumb-item"><a class="text-body" href="#">Pages</a></li>
                        <li class="breadcrumb-item text-dark active" aria-current="page">Login</li>
                    </ol>
                </nav>
            </div>
        </div>
        <!-- Page Header End -->

        <!-- Contact Start -->
        <div class="container-fluid">
            <p class=""></p>
            <form action="./checkout.php" method="post">
            <div class="row px-xl-5">
                <div class="col-lg-8">
                    <h5 class="section-title position-relative text-uppercase mb-3"><span class="bg-secondary pr-3">THÔNG TIN GIAO HÀNG</span></h5>
                    <div class="bg-light p-30 mb-5">
                        <div class="row">
                            <div class="col-md-6 form-group">
                                <label>Họ tên người nhận</label>
                                <input class="form-control" name="ten" type="text"  required value="<?php 
                                if(isset($_SESSION['user']))
                                echo $_SESSION['user']['ten'];
                                else{
                                echo "";
                                }?>">
                            </div>
                            <!-- <div class="col-md-6 form-group">
                                <label>Email</label>
                                <input class="form-control" name="" type="text" placeholder="example@email.com">
                            </div> -->
                            <div class="col-md-6 form-group">
                                <label>Số điện thoại</label>
                                <input class="form-control" name="sdt" type="number" value="<?php echo $user[0]['sdt']?>"required>
                            </div>
                            <div class="col-md-12 form-group">
                                <label>Địa chỉ nhận hàng</label>
                                <input class="form-control" name="diachi" type="text" value="<?php echo $user[0]['diachi']?>" required>
                            </div>
                            <!-- <div class="col-md-6 form-group">
                                <label>Phường/Xã</label>
                                <input class="form-control" name="" type="text" placeholder="Xã Long Thới, Huyện Nhà Bè">
                            </div>
                            <div class="col-md-6 form-group">
                                <label>Quận/Huyện</label>
                                <select class="custom-select">
                                    <option selected>Quận 1</option>
                                    <option>Quận 2</option>
                                    <option>Quận 3</option>
                                    <option>Quận 4</option>
                                    <option>Quận 5</option>
                                    <option>Quận 6</option>
                                    <option>Quận 7</option>
                                    <option>Quận 8</option>
                                    <option>Quận 9</option>
                                    <option>Quận 10</option>
                                    <option>Quận 11</option>
                                    <option>Quận 12</option>
                                    <option>Huyện Nhà Bè</option>
                                    <option>Huyện Củ Chi</option>
                                </select>
                            </div> -->
                            <!-- <div class="col-md-6 form-group">
                                <label>Thành phố</label>
                                <input class="form-control" type="text" placeholder="Hồ Chí Minh">
                            </div> -->
                        </div>
                    </div>
                    <!-- <div class="mb-5">
                        <h5 class="section-title position-relative text-uppercase mb-3"><span class="bg-secondary pr-3">Phương thức vận chuyển</span></h5>
                        <div class="bg-light p-30">
                            <div class="form-group">
                                <div class="custom-control custom-radio">
                                    <input type="radio" class="custom-control-input" name="payment" id="paypal">
                                    <label class="custom-control-label" for="paypal">Giao hàng miễn phí</label>
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="custom-control custom-radio">
                                    <input type="radio" class="custom-control-input" name="payment" id="directcheck">
                                    <label class="custom-control-label" for="directcheck">Giao hàng tiêu chuẩn</label>
                                </div>
                            </div>
                            <div class="form-group mb-4">
                                <div class="custom-control custom-radio">
                                    <input type="radio" class="custom-control-input" name="payment" id="banktransfer">
                                    <label class="custom-control-label" for="banktransfer">Giao hàng nhanh</label>
                                </div>
                            </div>
                        </div>
                    </div> -->
                </div>
                <div class="col-lg-4">
                    <h5 class="section-title position-relative text-uppercase mb-3"><span class="bg-secondary pr-3">ĐƠN HÀNG</span></h5>
                    <div class="bg-light p-30 mb-5">
                        <div class="border-bottom">
                            <h6 class="mb-3">Danh sách sản phẩm</h6>
                            <?php 
                            $total=0;
                            $SL=0;
                            foreach($data as $v){    
                                $tt = $v[0]['gia'] * $v[0]['sl'];
                                $SL += $v[0]['sl'];
                                $total += $tt;
                                ?>
                            <div class="d-flex justify-content-between">
                                <p><?php echo $v[0]['ten'];?></p>
                                <p><?php echo number_format ($v[0]['gia']);?> VND</p>
                                <p><?php echo $v[0]['sl']; ?></p>
                                <p><?php echo number_format ($tt);?> VND</p>
                            </div>
                            <?php
                            }
                         ?>
                        </div>
                        <div class="border-bottom pt-3 pb-2">
                            <div class="d-flex justify-content-between mb-3">
                                <h6>Tạm tính</h6>
                                <h6 name="tongtien"><?php echo number_format ($total);?> VND</h6>
                            </div>
                            <div class="d-flex justify-content-between">
                                <h6 class="font-weight-medium">Phụ phí</h6>
                                <h6 class="font-weight-medium">0 VND</h6>
                            </div>
                        </div>
                        <div class="pt-2">
                            <div class="d-flex justify-content-between mt-2">
                                <h5>Thành tiền</h5>
                                <h5><?php echo number_format ($total);?> VND</h5>
                            </div>
                        </div>
                    </div>
                    <div class="mb-5">
                        <h5 class="section-title position-relative text-uppercase mb-3"><span class="bg-secondary pr-3">Hình thức thanh toán</span></h5>
                        <div class="bg-light p-30">
                            <div class="form-group">
                                <div class="custom-control custom-radio">
                                    <input type="radio" class="custom-control-input" name="thanhtoan" id="paypal" value="CK" required>
                                    <label class="custom-control-label" for="paypal">Chuyển khoản</label>
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="custom-control custom-radio">
                                    <input type="radio" class="custom-control-input" name="thanhtoan" id="directcheck" value="TT" required>
                                    <label class="custom-control-label" for="directcheck">Trực tiếp</label>
                                </div>
                            </div>
                            <div class="form-group mb-4">
                                <div class="custom-control custom-radio">
                                    <input type="radio" class="custom-control-input" name="thanhtoan" id="banktransfer" value="VDT" required>
                                    <label class="custom-control-label" for="banktransfer">Ví điện tử</label>
                                </div>
                            </div>
                            <div class="form-group mb-4">
                                <input type="hidden" class="custom-control-input" name="tongtien" value="<?php echo number_format ($total);?>">
                                <input type="hidden" class="custom-control-input" name="soluong" value="<?php echo $SL;?>">
                            </div>
                            <button type="submit" class="btn btn-block btn-primary font-weight-bold py-3">Xác nhận đặt hàng</button>
                        </div>
                    </div> 
                </div>
            </div>
            </form>
        </div>
        <!-- Contact End -->


        <!-- Google Map Start -->

        <!-- Google Map End -->


        <!-- Footer Start -->
        <?php include 'layout/footer.php'; ?>>
        <!-- Footer End -->


        <!-- Back to Top -->
        <a href="#" class="btn btn-lg btn-primary btn-lg-square rounded-circle back-to-top"><i class="bi bi-arrow-up"></i></a>


        <!-- JavaScript Libraries -->
        <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
        <script src="../view/lib/wow/wow.min.js"></script>
        <script src="../view/lib/easing/easing.min.js"></script>
        <script src="../view/lib/waypoints/waypoints.min.js"></script>
        <script src="../view/lib/owlcarousel/owl.carousel.min.js"></script>

        <!-- Template Javascript -->
        <script src="../view/js/main.js"></script>
    </body>

</html>