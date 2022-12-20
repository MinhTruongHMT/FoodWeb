<?php
session_start();
include "../model/UserModel.php";
if (isset($_SESSION['user'])) {
    unset($_SESSION['user']);
}
if (isset($_POST) && !empty($_POST)) {
//    if (isset($_POST['btnRegister'])) {
//        header('Location: user_register.php');
//        exit;
//    }
//    if ($_POST['user_username'] == "" || $_POST['user_password'] == "") {
//        header('Location: user_login.php?error=missing');
//        exit;
//    }
    $user = new UserModel($_POST['txt_username'], md5($_POST['txt_password']));
    $data = $user->validateUser($_POST['txt_username'], md5($_POST['txt_password']));
    
    if ($data == NULL) {
        header('Location: login.php?error=wrong');
        exit;
    } else {
        $_SESSION['user'] = ['ten' => $_POST['txt_username']];
        header('Location: index.php');
        exit;
    }
}
include "../view/login.php";
