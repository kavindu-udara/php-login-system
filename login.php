<?php

include('config/app.php');
// include('codes/authentication_code.php');

$auth -> isLoggedIn();

include('includes/header.php');

?>
<div class="row mt-3">
    <div class="col-3"></div>
    <div class="col-6">
        <div class="justify-content-center">
            <?php include('message.php'); ?>
            <div class="card">
                <div class="card-header">
                    <h4 class="text-center">Login</h4>
                </div>
                <div class="card-body">
                    <form action="" method="POST">

                        <div class="mb-3">
                            <label for="input-email">Email</label>
                            <input type="email" name="email" id="input-email" class="form-control">
                        </div>
                        <div class="mb-3">
                            <label for="input-password">Password</label>
                            <input type="password" name="password" id="input-password" class="form-control">
                        </div>
                        <div class="mb-3">
                            <button type="submit" class="btn btn-primary" name="login_btn">Submit</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <div class="col-3"></div>

</div>
<?php

include('includes/footer.php');

?>