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
                        <li class="breadcrumb-item text-dark active" aria-current="page">Oder</li>
                    </ol>
                </nav>
            </div>
        </div>
        <!-- Page Header End -->

        <!-- Contact Start -->
        <div class="container-xxl py-6">

        </div>
        <div class="container-fluid">
        <div class="row px-xl-5">
            <div class="col-lg-8 table-responsive mb-5">
                <table class="table table-light table-borderless table-hover text-center mb-0">
                    <thead class="thead-dark">
                        <tr>
                            <th>Sản phẩm</th>
                            <th>Đơn giá</th>
                            <th>Số lượng</th>
                            <th>Tổng tiền</th>
                            <th>Thao tác</th>
                        </tr>
                    </thead>
                    <tbody class="align-middle">
                        <?php $total = 0;?>
                        <?php 
                      
                            foreach($data as $v){    
                                $tt = $v[0]['gia'] * $v[0]['sl'];
                                $total += $tt;
                                ?>
                        <tr>
                            <td class="align-middle"><?php echo $v[0]['ten'];?></td>
                            <td class="align-middle"><?php echo number_format ($v[0]['gia']);?>đ</td>
                            <td class="align-middle">
                                <div class="input-group quantity mx-auto" style="width: 100px;">
                                    <!-- <div class="input-group-btn">
                                            <button class="btn btn-sm btn-primary btn-minus" >
                                                <i class="fa fa-minus"></i>
                                            </button>
                                        </div> -->
                                    <input type="text"
                                        class="form-control form-control-sm bg-secondary border-0 text-center"
                                        value="<?php echo $v[0]['sl']; ?>" readonly>
                                    <!-- <div class="input-group-btn">
                                            <button class="btn btn-sm btn-primary btn-plus">
                                                <i class="fa fa-plus"></i>
                                            </button>
                                        </div> -->
                                </div>
                            </td>
                            <td class="align-middle"><?php echo number_format ($tt);?></td>
                            <td class="align-middle">
                                <form action="../controller/oder.php?id=<?php echo $v[0]['ma'];?>" method="post">
                                    <button type="submit" name="btnXoa" class="btn btn-sm btn-danger"><i
                                            class="fa fa-times"></i></button>
                                </form>
                            </td>
                        </tr>
                        <?php
                            }
                         ?>
                    </tbody>
                </table>
            </div>
            <div class="col-lg-4">
                <!-- <form class="mb-30" action="">
                        <div class="input-group">
                            <input type="text" class="form-control border-0 p-4" placeholder="Nhập mã giảm giá tại đây">
                            <div class="input-group-append">
                                <button class="btn btn-primary">Áp dụng Voucher</button>
                            </div>
                        </div>
                    </form> -->
                <h5 class="section-title position-relative text-uppercase mb-3"><span class="bg-secondary pr-3">Tổng
                        tiền giỏ hàng</span></h5>
                <div class="bg-light p-30 mb-5">
                    <!-- <div class="border-bottom pb-2">
                            <div class="d-flex justify-content-between mb-3">
                                <h6>Tạm tính</h6>
                                <h6>$150</h6>
                            </div>
                            <div class="d-flex justify-content-between">
                                <h6 class="font-weight-medium">Phí vận chuyển</h6>
                                <h6 class="font-weight-medium">$10</h6>
                            </div>
                        </div> -->
                    <div class="pt-2">
                        <div class="d-flex justify-content-between mt-2">
                            <h5>Thành tiền</h5>
                            <h5><?php echo number_format($total)?> VND</h5>
                        </div>
                        <form action="../controller/checkout.php" method="get">
                            <?php if(isset($_SESSION['cart']) && count($_SESSION['cart'])){?>
                        <button class="btn btn-block btn-primary font-weight-bold my-3 py-3">Thanh toán</button>
                        <?php }else{?>
                            <p class="alert alert-danger">Chưa có sản phẩm trong giỏ hàng</p>
                        <?php } ?>
                        </form>
                    </div>
                </div>
            </div>
        </div>
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