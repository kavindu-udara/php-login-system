<?php

class StudentController{

    public function __construct(){
        $db = new DatabaseConnection;
        $this->conn = $db -> conn;
    }
    public function create($inputData){
        $data = "'". implode ( "','", $inputData ) ."'";
        // echo $data;

        $studentQuery = "INSERT INTO students (fullname, email, phone, course) VALUES ($data)";

        $result = $this->conn->query($studentQuery);

        if($result){
            return true;
        }else{
            return false;
        }
    }
}