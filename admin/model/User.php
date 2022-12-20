<?php
include_once "../utils/MySQLUtils.php";
class User{
    // mới thay db nên sẽ có lỗi nên chắc chắc sẽ phải thay đỏi nhiều 
    //chỉ mới thây kết nối thôi
    
    private $id;
    private $fullname;
    private $username;
    private $password;
    private $ngaytao;
    private $admin;
    private $sdt;
    private $diachi;
    public function __construct( $id,$fullname,$username,$password,$ngaytao,$admin,$sdt,$diachi){
        $this->id=$id;
        $this->fullname=$fullname;
        $this->username=$username;
        $this->password=$password;
        $this->ngaytao=$ngaytao;
        $this->admin=$admin;
        $this->sdt=$sdt;
        $this->diachi=$diachi;
    }
    public function getid() {
        return $this->id;
    }

    public function setid( $id): void {
        $this->id = $id;
    }

    public function getfullname() {
        return $this->fullname;
    }

    public function setfullname( $fullname): void {
        $this->fullname = $fullname;
    }

    public function getusername() {
        return $this->username;
    }

    public function setusername( $username): void {
        $this->username = $username;
    }

    public function getpassword() {
        return $this->password;
    }

    public function setpassword( $password): void {
        $this->password = $password;
    }

    public function getadmin() {
        return $this->admin;
    }

    public function setadmin( $admin): void {
        $this->admin = $admin;
    }
    public function getngaytao() {
        return $this->ngaytao;
    }
    public function setngaytao( $ngaytao): void {
        $this->ngaytao = $ngaytao;
    }
    public function getsdt() {
        return $this->sdt;
    }
    public function setsdt( $sdt): void {
        $this->sdt = $sdt;
    }
    public function getdiachi() {
        return $this->diachi;
    }
    public function setdiachi( $diachi): void {
        $this->diachi = $diachi;
    }

    public function insertUser(){
        $dbcon = new MySQLUtils();
        $query = "insert into user (fullname,username,password,admin,ngaytao)values(:fullname,:username,:password,:admin,:ngaytao)";
        $param = array(":fullname"=>$this->getfullname(),":username"=>$this->getusername(),":password"=>$this->getpassword(),":admin"=>$this->getadmin(),":ngaytao"=>$this->getngaytao());
        $dbcon->insertData($query,$param);
    }
    public function getUser(){
        $dbcon = new MySQLUtils();
        $query = "select iduser,fullname,username ,password,admin,ngaytao,sdt,diachi from user where iduser = :iduser";
        $param = array(":iduser"=>$this->getid());
        $user = $dbcon->getData($query,$param);
        return $user;
    }
    public function getAllUser(){
        $dbcon = new MySQLUtils();
        $query ="select * from user";
        $data = $dbcon->getAllData($query);
        return $data;

    }
    public function upDateUser(){
        $dbcon = new MySQLUtils();
        $query ="update user set fullname=:fullname, password=:password, admin=:admin, sdt=:sdt, diachi=:diachi where  iduser = :iduser ";
        $param = array(":iduser"=>$this->getid(), ":fullname"=>$this->getfullname(), ":password"=>$this->getpassword(), ":admin"=>$this->getadmin(), ":sdt"=>$this->getsdt(),":diachi"=>$this->getdiachi());
         $dbcon->updateData($query,$param);

    }
    public function deleteUser(){
        $dbcon = new MySQLUtils();
        $query ="delete from user where iduser = :iduser ";
        $param = array(":iduser"=>$this->getid());
        $dbcon->deleteData($query,$param);

    }
    
}