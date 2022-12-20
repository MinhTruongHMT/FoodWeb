<?php
class MySQLUtils{
    private $username;
    private $servername;
    private $password;
    private $dbname;
    private static $conn;

    public function __construct(){
        $this->servername = "localhost";
        $this->username = "root";
        $this->password = "123456";
        $this->dbname="fooddb";
        if(self::$conn==null){
          
          $this->connectDB();
        }
          return self ::$conn;
        
    }
    public function __destruct(){
      $this->servername = "";
      $this->username = "";
      $this->password = "";
      $this->dbname="";
      self::$conn= null;
    }
    private function connectDB(){
        
      try {
        self::$conn = new PDO("mysql:host=$this->servername;dbname=$this->dbname", $this->username, $this->password);
        // set the PDO error mode to exception
        self::$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        echo"ket noi thanh cong";
        
        return self::$conn;
      } catch(PDOException $e) {
        echo "Connection failed: " . $e->getMessage();
      }
    }
  
   public function disconnectDB(){
      echo "ngat ket noi ";
      self::$conn = null;
    }

    public function insertData($query,$param = array()){
      $stmt = self::$conn->prepare($query);
      $stmt->execute($param);
    }
    public function getData($query,$param = array()){
      $stmt = self::$conn->prepare($query);
      $stmt->execute($param);
      return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }
    public function getAllData($query){
      $stmt = self::$conn->prepare($query);
      $stmt->execute();
      return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }
    public function updateData($query,$param=array()){
      $stmt = self::$conn->prepare($query);
      $stmt->execute($param);
      // return $stmt->rowCount();
    }
    public function deleteData($query,$param=array()){
      $stmt = self::$conn->prepare($query);
      $stmt->execute($param);
      // return $stmt->rowCount();
    }
  


}
