<?php

include('../config/app.php');
include_once('./controllers/StudentController.php');
include_once('../controllers/AuthenticationController.php');
$authenticated = new AuthenticationController;

$authenticated->admin();

// include_once('./controllers/StudentController.php');

include("includes/header.php");

?>
<div class="container-fluid px-4">
    <h1 class="mt-4">Student Edit</h1>
    <ol class="breadcrumb mb-4">
        <li class="breadcrumb-item active">Dashboard</li>
    </ol>

    <div class="row">
        <div class="col-md-12">

            <?php include('../message.php'); ?>
            <div class="card">
                <div class="card-header">
                    <h4>Student Edit</h4>
                </div>
                <div class="card-body">
                    <?php
                    if (isset($_GET['id'])) {
                        $student_id = validateInput($db->conn, $_GET['id']);
                        $student = new StudentController;
                        $result = $student->edit($student_id);
                        if ($result) {
                            ?>
                            <form action="codes/student-code.php" method="POST">
                                <input type="hidden" name="student_id" value="<?= $result['id']; ?>">
                                <div class="mb-3">
                                    <label for="fullname">Full Name</label>
                                    <input value="<?= $result['fullname']; ?>" id="fullname" required type="text" name="fullname" class="form-control">
                                </div>
                                <div class="mb-3">
                                    <label for="email">Email</label>
                                    <input value="<?= $result['email']; ?>" id="email" required type="email" name="email" class="form-control">
                                </div>
                                <div class="mb-3">
                                    <label for="course">Course</label>
                                    <input value="<?= $result['course']; ?>" id="course" required type="text" name="course" class="form-control">
                                </div>
                                <div class="mb-3">
                                    <label for="mobileno">Mobile</label>
                                    <input value="<?= $result['phone']; ?>" id="mobileno" required type="text" name="mobile" class="form-control">
                                </div>
                                <div class="mb-3">
                                    <button name="update_student" type="submit" class="btn btn-primary">Save Changes</button>
                                </div>
                            </form>
                            <?php
                        } else {
                            echo "<h4>No record found</h4>";
                            // echo ($student_id);
                        }
                    } else {
                        echo "<h4>Something went wrong</h4>";
                    }
                    ?>

                </div>
            </div>
        </div>
    </div>
</div>