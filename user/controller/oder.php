<?php

include "../model/cart_model.php";

$cart = new cart_model();
if (isset($_POST) && !empty($_POST)) {
    if (isset($_POST['sl-product']) && isset($_GET['id'])) {
        $sl = isset($_POST['sl-product']) ? $_POST['sl-product'] : 0;
        $id = isset($_GET['id']) ? $_GET['id'] : '';
        $cart->insertPro($id, $sl);
        header('Location: user_order.php');
        exit;
    } else if (isset($_POST['btnXoa']) && isset($_GET['id'])) {
        $id = isset($_GET['id']) ? $_GET['id'] : '';
        $cart->deletePro($id);
        header('Location: oder.php');
        exit;
    }
}
if (isset($_GET['id'])) {
    $id = isset($_GET['id']) ? $_GET['id'] : '';
    $cart->insertPro($id, 1);
    header('Location: oder.php');
    exit;
}

$data = $cart->getCart();
include "../view/oder.php";
