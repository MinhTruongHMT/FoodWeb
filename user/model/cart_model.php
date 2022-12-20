<?php
include '../model/ProductModel.php';
class cart_model{
    private $cart;

    public function __construct() {
        if(!isset($_SESSION))
            session_start();
        $this->cart=isset($_SESSION['cart'])?$_SESSION['cart']:[];
    }
    public function __destruct(){
        $_SESSION['cart']= $this->cart;
    }

    public function insertPro($ma,$sl){
        $sp= new ProductModel();
        $data= $sp->getProduct($ma);
        if(count($data)>0 && !isset($this->cart[$ma])){
            $array[] = ['ma'=>$data[0]['idproduct'],'ten'=>$data[0]['name'],'gia'=>$data[0]['gia'],'sl'=>$sl];
            $this->cart[$ma]=$array;
        }else if(isset($this->cart[$ma])){
            $array[] = ['ma'=>$data[0]['idproduct'],'ten'=>$data[0]['name'],'gia'=>$data[0]['gia'],'sl'=>$this->cart[$ma][0]['sl']+$sl];
            $this->cart[$ma]=$array;
        }
    }

    public function deletePro($ma){
        unset($this->cart[$ma]);
    }

    public function getCart(){
        return $this->cart;
    }
    public function deleteCart(){
        unset($this->cart);
    }
}