<?php
include_once "../utils/MySQLUtils.php";
class product{
    
    
    private $id;
    private $name;
    private $gia;
    private $giasale;
    private $anh;
    private $catalodyid;
    
    public function __construct( $id,$name,$gia,$giasale,$anh,$catalodyid){
        $this->id=$id;
        $this->name=$name;
        $this->gia=$gia;
        $this->giasale=$giasale;
        $this->anh=$anh;
        $this->catalodyid=$catalodyid;
    }
    public function getid() {
        return $this->id;
    }

    public function setid( $id): void {
        $this->id = $id;
    }

    public function getname() {
        return $this->name;
    }

    public function setname( $name): void {
        $this->name = $name;
    }

    public function getgia() {
        return $this->gia;
    }

    public function setgia( $gia): void {
        $this->gia = $gia;
    }

    public function getgiasale() {
        return $this->giasale;
    }

    public function setgiasale( $giasale): void {
        $this->giasale = $giasale;
    }

    public function getanh() {
        return $this->anh;
    }

    public function setanh( $anh): void {
        $this->anh = $anh;
    }
    public function getcatalodyid() {
        return $this->catalodyid;
    }
    public function setcatalodyid( $catalodyid): void {
        $this->catalodyid = $catalodyid;
    }
   

    public function insertproduct(){
        $dbcon = new MySQLUtils();
        $query = "insert into product (name,gia,giasale,anh,cataloryID)values(:name,:gia,:giasale,:anh,:cataloryID)";
        $param = array(":name"=>$this->getname(),":gia"=>$this->getgia(),":giasale"=>$this->getgiasale(),":anh"=>$this->getanh(),":cataloryID"=>$this->getcatalodyid());
        $dbcon->insertData($query,$param);
    }
    public function getproduct(){
        $dbcon = new MySQLUtils();
        $query = "select idproduct,name,gia ,giasale,anh ,cataloryID from product where idproduct = :idproduct";
        $param = array(":idproduct"=>$this->getid());
        $user = $dbcon->getData($query,$param);
        return $user;
    }
    public function getAllproduct(){
        $dbcon = new MySQLUtils();
        $query ="select idproduct,name,gia ,giasale,anh ,cataloryID from idproduct";
        $data = $dbcon->getAllData($query);
        return $data;

    }
    public function upDateproduct(){
        $dbcon = new MySQLUtils();
        $query ="update product set name=:name, gia=:gia, giasale=:giasale, anh=:anh, cataloryID=:cataloryID where  idproduct = :idproduct ";
        $param = array(":idproduct"=>$this->getid(), ":name"=>$this->getname(), ":gia"=>$this->getgia(), ":giasale"=>$this->getgiasale(), ":anh"=>$this->getanh(),":cataloryID"=>$this->getcatalodyid());
         $dbcon->updateData($query,$param);

    }
    public function deleteproduct(){
        $dbcon = new MySQLUtils();
        $query ="delete from product where idproduct = :idproduct ";
        $param = array(":idproduct"=>$this->getid());
        $dbcon->deleteData($query,$param);

    }
    
}