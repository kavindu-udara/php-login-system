<?php

include('../config/app.php');
include_once('../controllers/AuthenticationController.php');
$authenticated = new AuthenticationController;

$authenticated->admin();

include("includes/header.php");

?>
<div class="container-fluid px-4">
    <h1 class="mt-4">Student Add</h1>
    <ol class="breadcrumb mb-4">
        <li class="breadcrumb-item active">Dashboard</li>
    </ol>

    <div class="row">
        <div class="col-md-12">
            
        <?php include('../message.php'); ?>
            <div class="card">
                <div class="card-header">
                    <h4>Student Add</h4>
                </div>
                <div class="card-body">
                    <form action="codes/student-code.php" method="POST">
                        <div class="mb-3">
                            <label for="fullname">Full Name</label>
                            <input id="fullname" required type="text" name="fullname" class="form-control">
                        </div>
                        <div class="mb-3">
                            <label for="email">Email</label>
                            <input id="email" required type="email" name="email" class="form-control">
                        </div>
                        <div class="mb-3">
                            <label for="course">Course</label>
                            <input id="course" required type="text" name="course" class="form-control">
                        </div>
                        <div class="mb-3">
                            <label for="mobileno">Mobile</label>
                            <input id="mobileno" required type="text" name="mobile" class="form-control">
                        </div>
                        <div class="mb-3">
                            <button name="save_student" type="submit" class="btn btn-primary">Save Student</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
