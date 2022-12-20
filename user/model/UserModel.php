<?php

include_once '../utils/MySqlUtil.php';

class UserModel {

    private $id;
    private $fullName;
    private $userName;
    private $passWord;
    private $image;
    private $ngaytao;
    private $std;
    private $diaChi;
    private $admin;

    function __construct($userName, $passWord) {
        $this->userName = $userName;
        $this->passWord = $passWord;
    }

    function getId() {
        return $this->id;
    }

    function getFullName() {
        return $this->fullName;
    }

    function getUserName() {
        return $this->userName;
    }

    function getPassWord() {
        return $this->passWord;
    }

    function getImage() {
        return $this->image;
    }

    function getNgaytao() {
        return $this->ngaytao;
    }

    function getStd() {
        return $this->std;
    }

    function getDiaChi() {
        return $this->diaChi;
    }

    function getAdmin() {
        return $this->admin;
    }

    function setId($id) {
        $this->id = $id;
    }

    function setFullName($fullName) {
        $this->fullName = $fullName;
    }

    function setUserName($userName) {
        $this->userName = $userName;
    }

    function setPassWord($passWord) {
        $this->passWord = $passWord;
    }

    function setImage($image) {
        $this->image = $image;
    }

    function setNgaytao($ngaytao) {
        $this->ngaytao = $ngaytao;
    }

    function setStd($std) {
        $this->std = $std;
    }

    function setDiaChi($diaChi) {
        $this->diaChi = $diaChi;
    }

    function setAdmin($admin) {
        $this->admin = $admin;
    }

  
    public function insertUser() {
        $dbCon = new MySQLUtils();
        $data=[
            'username'=> $this->userName,
            'password'=> $this->passWord
        ];
        $sql = "INSERT INTO user(username,password) VALUES (:username,:password)";
        $dbCon->insertData($sql,$data);
    }

    public function checkUser($name,$pass){
        $dbCon = new MySQLUtils();
        $sql = "SELECT * FROM user WHERE username='$name' or password='$pass'";
        return $dbCon->getData($sql);
    }

    public function validateUser($name,$pass){
        $dbCon = new MySQLUtils();
        $sql = "SELECT * FROM user WHERE username='$name' and password='$pass'";
        return $dbCon->getData($sql);
    }

}
