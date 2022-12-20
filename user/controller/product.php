<?php
include "../utils/MySqlUtil.php";
include "../model/ProductModel.php";
$product= new ProductModel();
$data = $product->getDS();
include '../view/product.php';

