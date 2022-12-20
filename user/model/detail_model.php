<?php

class detail_model {

    public function __construct() {
        
    }

    public function __destruct() {
        
    }

    public function insertDetail($iduser, $idsp, $sl, $tt) {
        $dbCon = new MySQLUtils();
        $data = [
            'iduser' => $iduser,
            'idsp' => $idsp,
            'sl' => $sl,
            'tt' => $tt
        ];
        $sql = "INSERT INTO oderdetail(oderid,productid,soluong,tongtien) VALUES (:iduser,:idsp,:sl,:tt)";
        $dbCon->insertData($sql, $data);
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
