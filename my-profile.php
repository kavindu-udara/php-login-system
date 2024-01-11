<?php

include('config/app.php');
include_once('controllers/AuthenticationController.php');

$data = $authenticated->authDetail();

include('includes/header.php');

echo "<h1 class='text-center'> my profile page </h1>";

?>
<div class="row mt-3">
    <div class="col-3"></div>
    <div class="col-6">
        <div class="justify-content-center">
            <?php include('message.php'); ?>
            <div class="card">
                <div class="card-header">
                    <h4 class="text-center">User Profile</h4>
                </div>
                <div class="card-body">
                        <div class="mb-3">
                            <label for="input-fname">First Name</label>
                            <input type="text" value="<?= $data['fname']; ?>" name="fname" id="input-fname" class="form-control">
                        </div>
                        <div class="mb-3">
                            <label for="input-fname">Last Name</label>
                            <input type="text" value="<?= $data['lname']; ?>" name="fname" id="input-fname" class="form-control">
                        </div>
                        <div class="mb-3">
                            <label for="input-fname">Email</label>
                            <input type="text" value="<?= $data['email']; ?>" name="fname" id="input-fname" class="form-control">
                        </div>
                        <div class="mb-3">
                            <label for="input-fname">Created At</label>
                            <input type="text" value="<?= $data['created_at']; ?>" name="fname" id="input-fname" class="form-control">
                        </div>
                </div>
            </div>
        </div>
    </div>
    <div class="col-3"></div>

</div>

<?php

include('message.php');

include('includes/footer.php');