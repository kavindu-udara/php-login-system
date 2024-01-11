<?php

include('../config/app.php');
include_once('../controllers/AuthenticationController.php');
$authenticated = new AuthenticationController;

$authenticated->admin();

include("includes/header.php");

?>
    
<div class="row mt-3">
    <div class="col-3"></div>
    <div class="col-6">
        <div class="justify-content-center">
            <div class="card">
                <div class="card-header">
                    <h4 class="text-center">Admin</h4>
                </div>
                <div class="card-body">

                        <div class="mb-3">
                            
                        </div>
                </div>
            </div>
        </div>
    </div>
    <div class="col-3"></div>

</div>
<?php



include("includes/footer.php");