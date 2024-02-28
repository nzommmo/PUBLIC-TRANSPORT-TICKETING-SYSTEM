<<<<<<< HEAD
<!-- submit.php -->
<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST['name'];
    $email = $_POST['email'];
    
    // Display the submitted data
    echo "Name: $name <br>";
    echo "Email: $email";
} else {
    // Handle non-POST requests
    echo "Form submission failed!";
}
=======
<?php
$username = "";
$email = "";

$db = mysqli_connect(hostname:'localhost',username:'root',password:'',database:'booking details');


// Check connection
if ($db->connect_error) {
    die("Connection failed: " . $db->connect_error);
}

// Retrieve form data
$Name = $_POST['Name'];
$RegistrationNo = $_POST['Vehicle_Reg_No'];
$Boarding = $_POST['Boarding'];
$Alight = $_POST['Alight'];
$Fare = $_POST['Fare'];
$SeatNo = $_POST['Seat_No'];


// Sanitize and validate data (you may add more validation)


// Insert data into database
$sql = "INSERT INTO `bookings`(`First_Name`, `Departure`, `Alight`, `Bus_Reg_No`, `Seat_No`, `Fare`) VALUES ('[$Name]','[$Boarding]','[$Alight]','[$RegistrationNo]','[$SeatNo]','[$Fare]')";

if ($db->query($sql) === TRUE) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $db->error;
}

// Close connection
$db->close();
>>>>>>> d82be8200f37ed47a52bb873f6a6ac4d736701fd
?>
