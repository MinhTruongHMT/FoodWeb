<?php
include "../model/ProductModel.php";
$product = new ProductModel();
$data = $product->getProduct($_GET['id']);
var_dump($data);

include '../view/detail.php';

