
<?php
if (!isset($_SESSION))
    session_start();
?>
<div class="col-lg-6 px-5 text-end">
    <?php
    if (isset($_SESSION['user'])) {
        echo $_SESSION['user']['ten'];
    }
    ?>
    <small>Follow us:</small>
    <a class="text-body ms-3" href=""><i class="fab fa-facebook-f"></i></a>
    <a class="text-body ms-3" href=""><i class="fab fa-twitter"></i></a>
    <a class="text-body ms-3" href=""><i class="fab fa-linkedin-in"></i></a>
    <a class="text-body ms-3" href=""><i class="fab fa-instagram"></i></a>
</div>


