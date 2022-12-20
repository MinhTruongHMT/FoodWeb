<?php
include "../model/UserModel.php";

if (isset($_POST) && !empty($_POST)) {
//    if($_POST['user_username']=="" || $_POST['user_password']==""){
//        header('Location: user_register.php?error=missing');
//        exit;
//    }
    $user = new UserModel($_POST['txt_username'], md5($_POST['txt_password']));
    $data = $user->checkUser($_POST['txt_username'],null);
  
    if ($data == NULL) {
        $user->insertUser();
        header('Location: login.php?action=subser');
        exit;
    } else{
        header('Location: user_register.php?error=exist');
        exit;
    }
}
include "../view/usercreate.php";