<?php
include_once '../utils/MySqlUtil.php';
class ProductModel {
    private $name;
    private $gia;
    private $giaSale;
    private $image;
    
    
    function __construct() {
        
    }
    
    function getName() {
        return $this->name;
    }

    function getGia() {
        return $this->gia;
    }

    function getGiaSale() {
        return $this->giaSale;
    }

    function getImage() {
        return $this->image;
    }

    function setName($name) {
        $this->name = $name;
    }

    function setGia($gia) {
        $this->gia = $gia;
    }

    function setGiaSale($giaSale) {
        $this->giaSale = $giaSale;
    }

    function setImage($image) {
        $this->image = $image;
    }
    
    public function getDS() {
        $dbCon = new MySQLUtils();
        $sql = "SELECT * FROM `product`";
        return $dbCon->getData($sql);
    }

    public function getProduct($ma){
        $dbCon = new MySQLUtils();
        $sql = "SELECT * FROM product WHERE idproduct='$ma'";
        return $dbCon->getData($sql);
    }

    public function search($kw){
        $dbCon = new MySQLUtils();
        $sql = "SELECT * FROM `product` WHERE tensp like '%$kw%'";
        return $dbCon->getData($sql);
    }


}
