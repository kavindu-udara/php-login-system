<?php

class DatabaseConnection{
    public function __construct(){
        $conn = new mysqli(DB_HOST, DB_USER, DB_PASSWORD, DB_DATABASE);

        // error handle
        if($conn -> connect_error){
            die ("<h1>Database Connection Failed !</h1>");
        }
        // echo "Database connected success !";
        return $this->conn = $conn;
    }
}