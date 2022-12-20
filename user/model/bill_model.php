<?php

class bill_model {

    public function __construct() {
        
    }

    public function __destruct() {
        
    }

    public function insertOrder($tongtien, $iduser) {
        $dbCon = new MySQLUtils();
        $data = [
            'tongtien' => $tongtien,
            'iduser' => $iduser
        ];
        $sql = "INSERT INTO oder (tongtien,userid,status) VALUES (:tongtien,:iduser,'Chờ xác nhận')";
        $dbCon->insertData($sql, $data);
    }
 

}
