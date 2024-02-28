<?php include('server.php') ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Login page</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="login.css">
</head>
<body>
<div class="container">
    <div class="row justify-content-center mt-5">
        <div class="col-md-6">
            <div class="card">
                <div class="card-header">
                    <h2>Login</h2>
                </div>
                <form method="post" action="login.php" class="needs-validation" novalidate>
                    <?php include('error.php'); ?>
                    <div class="form-group">
                        <label for="username">Username</label>
                        <input type="text" name="username" id="username" class="form-control" required>
                    </div>
                    <div class="form-group">
                        <label for="password">Password</label>
                        <input type="password" name="password" id="password" class="form-control" required>
                    </div>
                    <div class="form-group">
                        <button type="submit" class="btn btn-primary btn-block" name="login_user">Login</button>
                    </div>
                    <p class="text-center">
                        Not yet a member? <a href="register.php">Sign up</a>
                    </p>
<<<<<<< HEAD
                    <p class="text-center">
                        Forgot password? <a href="forgot_password.php">reset</a>
                    </p>
=======
>>>>>>> d82be8200f37ed47a52bb873f6a6ac4d736701fd
                </form>
            </div>
        </div>
    </div>
</div>
</body>
</html>