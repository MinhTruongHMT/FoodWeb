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
        <?php
        foreach ($data as $k => $v) {
            ?>
            <div class="col-lg-7 h-auto mb-30">
                <div class="h-100 bg-light p-30">
                    <h3><?php echo $v['name']; ?></h3>
                    <div class="d-flex mb-3">
                        <div class="text-primary mr-2">
                            <small class="fas fa-star"></small>
                            <small class="fas fa-star"></small>
                            <small class="fas fa-star"></small>
                            <small class="fas fa-star-half-alt"></small>
                            <small class="far fa-star"></small>
                        </div>
                        <small class="pt-1">(99 Reviews)</small>
                    </div>
                    <h3 class="font-weight-semi-bold mb-4"><?php echo number_format($v['gia']); ?> VND</h3>
                    <p class="mb-4">null</p>

                    <div class="d-flex align-items-center mb-4 pt-2">
                        <form action="../controller/oder.php?id=<?php echo $v['idproduct']; ?>" method="post">
                            <div class="input-group quantity mr-3" style="width: 130px;">
                                <input type="number" name="sl-product" class="form-control bg-secondary border-0 text-center" value="1">
                            </div>
                            <button class="btn btn-primary px-3"><i class="fa fa-shopping-cart mr-1"></i>Thêm vào giỏ hàng</button>
                        </form>
                    </div>
                    <div class="d-flex pt-2">
                        <strong class="text-dark mr-2">Chia sẻ lên:</strong>
                        <div class="d-inline-flex">
                            <a class="text-dark px-2" href="">
                                <i class="fab fa-facebook-f"></i>
                            </a>
                            <a class="text-dark px-2" href="">
                                <i class="fab fa-twitter"></i>
                            </a>
                            <a class="text-dark px-2" href="">
                                <i class="fab fa-linkedin-in"></i>
                            </a>
                            <a class="text-dark px-2" href="">
                                <i class="fab fa-pinterest"></i>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        <?php } ?>
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