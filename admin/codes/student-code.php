<?php

include('../../config/app.php');
include_once('../controllers/StudentController.php');

if(isset($_POST['save_student'])){
    $inputdata = [
        'fullname' => validateInput($db->conn, $_POST['fullname']),
        'email' => validateInput($db->conn, $_POST['email']),
        'phone' => validateInput($db->conn, $_POST['mobile']),
        'course' => validateInput($db->conn, $_POST['course']),
    ];

    $student = new StudentController;
    $result = $student->create($inputdata);
    
    if($result){
        redirect('student added successfully', 'admin/student-add.php');
    }else{
        redirect('something went wrong', 'admin/student-add.php');
    }
    // echo $result;

    // $data = validateInput($db->conn, $_POST['fullname']);
}

if(isset($_POST['update_student'])){
    $id = validateInput($db->conn, $_POST['student_id']);
    $inputdata = [
        'fullname' => validateInput($db->conn, $_POST['fullname']),
        'email' => validateInput($db->conn, $_POST['email']),
        'phone' => validateInput($db->conn, $_POST['mobile']),
        'course' => validateInput($db->conn, $_POST['course']),
    ];
    $student = new StudentController;
    $result = $student->update($inputdata, $id);
    if($result){
        redirect('student updated successfully', 'admin/student-view.php');
    }else{
        redirect('something went wrong', 'admin/student-edit.php');
    }
}

if(isset($_POST['delete_student'])){
    $id = validateInput($db->conn, $_POST['delete_student']);
    $student = new StudentController;
    $result = $student -> delete($id);
    if($result){
        redirect('student deleted successfully', 'admin/student-view.php');
    }else{
        redirect('something went wrong', 'admin/student-view.php');
    }

}