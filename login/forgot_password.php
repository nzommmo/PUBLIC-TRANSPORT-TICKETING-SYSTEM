<?php
// Include your database connection file
include 'server.php';

// Include PHPMailer autoloader
require 'PHPMailer/src/Exception.php';
require 'PHPMailer/src/PHPMailer.php';
require 'PHPMailer/src/SMTP.php';

// Check if the form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Retrieve the email from the form
    $email = $_POST['email'];

    // Check if the email exists in the database
    $query = "SELECT * FROM users WHERE email = '$email'";
    $result = mysqli_query($db, $query);

    if ($result && mysqli_num_rows($result) == 1) {
        // Generate a random password
        $new_password = generateRandomString(8); // You can define the generateRandomString function below

        // Hash the new password
        $hashed_password = password_hash($new_password, PASSWORD_DEFAULT);

        // Update the user's password in the database
        $update_query = "UPDATE users SET password = '$hashed_password' WHERE email = '$email'";
        mysqli_query($db, $update_query);

        // Initialize PHPMailer
        $mail = new PHPMailer(true);

        // Set mailer to use SMTP
        $mail->isSMTP();

        // Specify SMTP server
        $mail->Host = 'smtp.gmail.com';

        // Enable SMTP authentication
        $mail->SMTPAuth = true;

        // SMTP username (your Gmail email address)
        $mail->Username = 'lewisanyanje@gmail.com';

        // SMTP password
        $mail->Password = 'lewisana2004';

        // Enable TLS encryption
        $mail->SMTPSecure = 'tls';

        // TCP port to connect to
        $mail->Port = 587;

        // Set sender and recipient
        $mail->setFrom('lewisandanje3@gmail.com', 'Your Name');
        $mail->addAddress($email);  // Add recipient email address

        // Set email subject and body
        $mail->Subject = 'New Password';
        $mail->Body = "Your new password is: $new_password";

        // Send email
        if($mail->send()) {
            // Inform the user
            echo "A new password has been sent to your email.";
        } else {
            echo "Failed to send email. Error: " . $mail->ErrorInfo;
        }
    } else {
        // Inform the user that the email is not found
        echo "Email not found.";
    }
}

// Function to generate random string
function generateRandomString($length = 8) {
    $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
    $randomString = '';
    for ($i = 0; $i < $length; $i++) {
        $randomString .= $characters[rand(0, strlen($characters) - 1)];
    }
    return $randomString;
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Forgot Password</title>
</head>
<body>
<h2>Forgot Password</h2>
<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
    <label>Email:</label>
    <input type="email" name="email" required>
    <br><br>
    <input type="submit" value="Submit">
</form>
</body>
</html>
