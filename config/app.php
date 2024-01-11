<?php
session_start();
// make DB connection

define('DB_HOST', 'localhost');
define('DB_USER', 'root');
define('DB_PASSWORD', '');
define('DB_DATABASE', 'login_system');

define('SITE_URL', 'http://localhost/login_system_oop/');

include_once('DatabaseConnection.php');
$db = new DatabaseConnection;

function base_url($slug){
    echo SITE_URL.$slug;
}

function redirect($message, $page){
    $redirectTo = SITE_URL.$page;
    $_SESSION['message'] = "$message";
    header("Location: $redirectTo");
    exit(0);
}

function validateInput($dbcon, $input){
    return mysqli_real_escape_string($dbcon, $input);
}