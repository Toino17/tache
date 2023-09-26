<?php

include '../Models/Model.php';

class Get extends Model{

    public function selectAll(){
        $sql = "SELECT * FROM `task`;";
        $stmt = $this->db->prepare($sql);
        $stmt->execute();
        $data = $stmt->fetchAll(PDO::FETCH_ASSOC);
        echo json_encode($data);
    }
}

$get = new Get();

$get->selectAll();

