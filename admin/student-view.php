<?php

include('../config/app.php');
include_once('../controllers/AuthenticationController.php');
$authenticated = new AuthenticationController;

$authenticated->admin();

include_once('controllers/StudentController.php');

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
                    <h4>Student View</h4>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-borders">
                            <thead>
                                <tr>
                                    <th>ID</th>
                                    <th>Full Name</th>
                                    <th>Email</th>
                                    <th>Phone</th>
                                    <th>Edit</th>
                                    <th>Delete</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                $students = new StudentController;
                                $result = $students->index();

                                if ($result) {
                                    foreach ($result as $row) {
                                        ?>
                                        <tr>
                                            <td><?= $row['id'] ?></td>
                                            <td><?= $row['fullname'] ?></td>
                                            <td><?= $row['email'] ?></td>
                                            <td><?= $row['phone'] ?></td>
                                            <td>
                                                <a href="student-edit.php?id=<?= $row['id']; ?>" class="btn btn-success">Edit</a>
                                            </td>
                                            <td>
                                                <!-- <a href="#" class="btn btn-danger">Delete</a> -->
                                                <form action="codes/student-code.php" method="POST">
                                                <button type="submit" value="<?= $row['id'] ?>" name="delete_student" class="btn btn-danger">Delete</button>
                                                </form>
                                            </td>
                                        </tr>
                                        <?php
                                    }
                                } else {
                                    echo "No record found";
                                }
                                ?>

                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>