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
    <div class="container-xxl py-6">
        <div class="container">
            <div class="section-header text-center mx-auto mb-5 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 500px;">
                <h1 class="display-5 mb-3">Register</h1>
                
            </div>
            <div class="row g-5 justify-content-center">
               
                <div class="col-lg-7 col-md-12 wow fadeInUp" data-wow-delay="0.5s">
                    
                    <form action="../controller/user_register.php" method="post">
                        <div class="row g-3">
                            <div class="col-12">
                                <div class="form-floating">
                                    <input type="text" class="form-control" id="name" name="txt_username" placeholder="Your Name">
                                    <label for="name">User Name</label>
                                </div>
                            </div>
                           
                            <div class="col-12">
                                <div class="form-floating">
                                    <input type="password" class="form-control" id="subject" name="txt_password" placeholder="Subject">
                                    <label for="subject">Pass Word</label>
                                </div>
                            </div>
                           
                            <div class="col-12">
                                <button class="btn btn-primary rounded-pill py-3 px-5" type="submit">Login</button>
                            </div>
                        </div>
                    </form>
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