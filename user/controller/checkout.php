<?php

if (!isset($_SESSION))
    session_start();
include '../utils/MySqlUtil.php';
include "../model/cart_model.php";
include "../model/bill_model.php";
include "../model/detail_model.php";
$cart = new cart_model();
$data = $cart->getCart();
$username="";
if (isset($_SESSION['user'])) {
    $username = $_SESSION['user']['ten'];
} else {
    header('Location: login.php ');
    exit;
}
$conn = new MySQLUtils();
$sql = "SELECT * FROM user WHERE username='$username'";
$user = $conn->getData($sql);
if (isset($_POST) && !empty($_POST)) {
    $order = new bill_model();
    $ma = time();
    $order->insertOrder( $_POST['tongtien'],$user[0]['iduser']);
   
    $detail = new detail_model();
    foreach ($data as $v) {
        $detail->insertDetail($user[0]['iduser'], $v[0]['ma'], $v[0]['sl'], $v[0]['sl'] * $v[0]['gia']);
    }
    $cart->deleteCart();
    header('Location: checkout.php');
    exit;
} else {
    
}



include '../view/checkout.php';

