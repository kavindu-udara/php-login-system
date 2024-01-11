<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <title>Document</title>
</head>

<body>
    <nav class="navbar navbar-expand-lg bg-body-tertiary">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">Admin</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown"
                aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNavDropdown">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="<?= base_url('index.php'); ?>">Home</a>
                    </li>

                    <?php
                    if (!isset($_SESSION['authenticated']) == TRUE) {
                        ?>
                        <li class="nav-item">
                            <a class="nav-link" href="<?= base_url('login.php'); ?>">Login</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="<?= base_url('register.php'); ?>">Signup</a>
                        </li>
                        <?php
                    }else{
                        ?>
                        <li class="nav-item">
                            <a class="nav-link" href="<?= base_url('my-rofile.php'); ?>"><?php echo $_SESSION['auth_user']['user_fname']; ?></a>
                        </li>
                        <li class="nav-item">
                            <form action="" method="POST">
                                <button class="btn btn-outline-secondary" type="submit" name="logout_btn">Logout</button>
                            </form>
                        </li>
                        <?php
                    }
                    ?>


                </ul>
            </div>
        </div>
    </nav>