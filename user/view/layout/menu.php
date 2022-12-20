<nav class="navbar navbar-expand-lg navbar-light py-lg-0 px-lg-5 wow fadeIn" data-wow-delay="0.1s">
    <a href="../view/index.php" class="navbar-brand ms-4 ms-lg-0">
        <h1 class="fw-bold text-primary m-0">F<span class="text-secondary">oo</span>dy</h1>
    </a>
    <button type="button" class="navbar-toggler me-4" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarCollapse">
        <div class="navbar-nav ms-auto p-4 p-lg-0">
            <a href="../../user/controller/index.php" class="nav-item nav-link active">Home</a>
            <a href="../view/about.php" class="nav-item nav-link">About Us</a>
            <a href="../../user/controller/product.php" class="nav-item nav-link">Products</a>
            <div class="nav-item dropdown">
                <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">Pages</a>
                <div class="dropdown-menu m-0">
                    <a href="../view/blog.php" class="dropdown-item">Blog Grid</a>
                    <a href="../view/feature.php" class="dropdown-item">Our Features</a>
                    <a href="../view/testimonial.php" class="dropdown-item">Testimonial</a>
                    <a href="../view/404.php" class="dropdown-item">404 Page</a>
                </div>
            </div>
            <a href="../view/contact.php" class="nav-item nav-link">Contact Us</a>
        </div>
        <div class="d-none d-lg-flex ms-2">
            <a class="btn-sm-square bg-white rounded-circle ms-3" href="">
                <small class="fa fa-search text-body"></small>
            </a>
            <div class="nav-item dropdown">
                <a class="btn-sm-square bg-white rounded-circle ms-3">
                    <small class="fa fa-user text-body"></small>
                </a>
                <div class="dropdown-menu m-0">
                    <?php if (isset($_SESSION['user'])) { ?>
                      
                         <a href="../controller/login.php" class="dropdown-item" >Đơn Hàng</a>
                           <a href="../controller/login.php" class="dropdown-item" >Đăng Xuất</a>
                        <?php
                    } else {
                        ?>
                        <a href="../controller/login.php" class="dropdown-item">ĐĂNG NHẬP</a>
                        <a href="../controller/user_register.php" class="dropdown-item">ĐĂNG KÝ</a>
                        <?php
                    }
                    ?>



                </div>
            </div>
            <a class="btn-sm-square bg-white rounded-circle ms-3" href="../controller/oder.php">
                <small class="fa fa-shopping-bag text-body"></small>
            </a>
        </div>
    </div>
</nav>

