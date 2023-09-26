<?php

include '../Database/Database.php';

abstract class Model {
    protected $db;

    public function __construct(){
        $dataBase = new DataBase();
        $this->db = $dataBase->dbConnect();
    }
}