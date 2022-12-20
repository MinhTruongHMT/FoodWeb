<?php

class MySQLUtils {

    private $servername;
    private $username;
    private $password;
    private $dbname;
    private static $conn;

    public function __construct() {
        $this->servername = "localhost";
        $this->username = "root";
        $this->password = "123456";
        $this->dbname = "fooddb";
        if (self::$conn == NULL) {
            $this->connectDB();
        } else {
            return self::$conn;
        }
    }

    public function __destruct() {
        $this->servername = "";
        $this->username = "";
        $this->password = "";
        $this->dbname = "";
        self::$conn = NULL;
    }

    public function connectDB() {
        try {
            self::$conn = new PDO("mysql:host=$this->servername;dbname=$this->dbname", $this->username, $this->password);
            // set the PDO error mode to exception
            self::$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            self::$conn->exec("set names utf8");
            return self::$conn;
        } catch (PDOException $e) {
            echo "Connection failed: " . $e->getMessage();
        }
    }

    public function disconnectDB() {
        self::$conn = NULL;
    }

    public function insertData($sql,$data=array()) {
        $stm = self::$conn->prepare($sql);
        $stm->execute($data);
        $this->disconnectDB();
    }

    public function getData($sql) {
        $stm = self::$conn->prepare($sql);
        $stm->execute();
        $data = $stm->fetchAll();
        $this->disconnectDB();
        return $data;
    }

}

?>