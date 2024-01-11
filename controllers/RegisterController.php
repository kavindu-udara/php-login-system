<?php

// include('config/app.php');

class RegisterController{
    public function __construct(){
        $db = new DatabaseConnection;
        $this-> conn = $db->conn;
    }

    public function registration($fname, $lname, $email, $password){
        $register_query = "INSERT INTO users(fname, lname, email, password) VALUES ('$fname','$lname','$email','$password');";
        $result = $this->conn->query($register_query);
        return $result;
    }

    public function isUserExist($email){
        $checkUser = "SELECT email FROM users WHERE email='$email' LIMIT 1;";
        $result = $this->conn->query($checkUser);
        if($result->num_rows > 0){
            return true;
        }else{
            return false;
        }
    }

    public function confirmPAssword($password, $cpassword){
        if($password == $cpassword){
            return true;
        }else{
            return false;
        }
    }
}