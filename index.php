<?php
session_start();

if (!isset($_SESSION['username'])) {
    $_SESSION['msg'] = "You must log in first";
    header('location: login.php');
}
if (isset($_GET['logout'])) {
    session_destroy();
    unset($_SESSION['username']);
    header("location: login.php");
}
?>
<!DOCTYPE html>
<html lang="en">
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<head>
    <title>Home</title>
    <link rel="stylesheet" type="text/css" href="index.css">
</head>
<body>


<div class="navbar">
    <div class="logo">
        <?php  if (isset($_SESSION['username'])) : ?>
            <p>Welcome <strong><?php echo $_SESSION['username']; ?></strong></p>

        <?php endif ?>
    </div>
    <div class="navbar-toggle" onclick="toggleNav()">
        <span class="bar"></span>
        <span class="bar"></span>
        <span class="bar"></span>
    </div>
    <ul class="nav-list" id="navList">
        <li><a href="#">Home</a></li>
        <li><a href="#">About</a></li>
        <li><a href="#">Services</a></li>
        <li><a href="#">Contact</a></li>
        <li>
            <?php  if (isset($_SESSION['username'])) : ?>

                <p> <a href="index.php?logout='1'" style="color: red;">logout</a> </p>
            <?php endif ?></li>
    </ul>
</div>


<div class="header">
    <h2>Home Page</h2>
</div>
Welcome to public transport ticketing system
<div class="content">
    <!-- notification message -->
    <?php if (isset($_SESSION['success'])) : ?>
        <div class="error success" >
            <h3>
                <?php
                echo $_SESSION['success'];
                unset($_SESSION['success']);
                ?>
            </h3>
        </div>
    <?php endif ?>

    <!-- logged in user information -->

</div>

</body>
</html>