<?php

// include('config/app.php');
include_once('controllers/RegisterController.php');
include_once('controllers/LoginController.php');

$auth = new LoginController;
// register
if(isset($_POST['register_btn'])){
    // validate input fields
    $fname = validateInput($db->conn, $_POST['fname']);    
    $lname = validateInput($db->conn, $_POST['lname']);    
    $email = validateInput($db->conn, $_POST['email']);  $_POST[''];    
    $password = validateInput($db->conn, $_POST['password']);    
    $cpassword = validateInput($db->conn, $_POST['cpassword']);   

    $register = new RegisterController;
    $result_password = $register -> confirmPAssword($password, $cpassword);

    if($result_password){
        $result_user = $register -> isUserExist($email);
        if($result_user){
            redirect('Email is Already Exists', 'register.php');
        }else{
            $register_query = $register -> registration($fname, $lname, $email, $password);
            if($register_query){
                redirect('Register Success !!', 'login.php');
            }else{
                redirect('Something went wrong', 'register.php');
            }
        }
    }else{
        redirect('Password and Confirm Password Does not match', 'register.php');
    }
}

// login
if(isset($_POST['login_btn'])){
    $email = validateInput($db->conn, $_POST['email']);
    $password = validateInput($db->conn, $_POST['password']);

    $checkLogin = $auth->userLogin($email, $password);
    if($checkLogin){

        if($_SESSION['auth_role'] == '1'){
            redirect('Logged in successfully!', 'admin/index.php');
        }else{
            redirect('Logged in successfully!', 'index.php');
        }

        // redirect('Logged in success', 'index.php');
    }else{
        redirect("invalid email or password", 'login.php');
    }
}

if(isset($_POST['logout_btn'])){
    $checkedLoggedOut = $auth -> logout();

    if($checkedLoggedOut){
        redirect("logged out success !", 'login.php');
    }
}