<?php

class DataBase{

    public $host = "localhost";
    public $dbname = "Task";
    public $username = "root";
    public $password = "";

    public function dbConnect(){
        $conn = new PDO("mysql:host=$this->host;dbname=$this->dbname",
        $this->username,
        $this->password);
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        return $conn;
    }   
}