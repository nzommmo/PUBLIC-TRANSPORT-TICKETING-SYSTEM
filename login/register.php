<?php include('server.php') ?>
<!DOCTYPE html>
<html lang="eng">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registration page</title>
    <link rel="stylesheet" type="text/css" href="login.css">
    <link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>
<div class="container">
    <div class="card">
        <div class="card-header">
            Register
        </div>
        <form method="post" action="register.php" class="needs-validation" novalidate>
            <?php include('error.php'); ?>
            <div class="form-group">
                <label for="username">Username</label>
                <input type="text" name="username" id="username" class="form-control" value="<?php echo $username; ?>" required>
            </div>
            <div class="form-group">
                <label for="email">Email</label>
                <input type="email" name="email" id="email" class="form-control" value="<?php echo $email; ?>" required>
            </div>
            <div class="form-group">
                <label for="password_1">Password</label>
                <input type="password" name="password_1" id="password_1" class="form-control" required>
            </div>
            <div class="form-group">
                <label for="password_2">Confirm password</label>
                <input type="password" name="password_2" id="password_2" class="form-control" required>
            </div>
            <div class="form-group">
                <button type="submit" class="btn btn-primary" name="reg_user">Register</button>
            </div>
            <p class="text-center">
                Already a member? <a href="login.php">Sign in</a>
            </p>
        </form>
    </div>
</div>

</body>
</html>