<<<<<<< HEAD
<<<<<<< HEAD
<!-- submit.php -->
=======
>>>>>>> d82be8200f37ed47a52bb873f6a6ac4d736701fd
<?php
$username = "";
$email = "";

$db = mysqli_connect(hostname:'localhost',username:'root',password:'',database:'booking details');


// Check connection
if ($db->connect_error) {
    die("Connection failed: " . $db->connect_error);
}
<<<<<<< HEAD
=======
<?php
$username = "";
$email = "";

$db = mysqli_connect(hostname:'localhost',username:'root',password:'',database:'booking details');


// Check connection
if ($db->connect_error) {
    die("Connection failed: " . $db->connect_error);
}
=======
>>>>>>> d82be8200f37ed47a52bb873f6a6ac4d736701fd

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
<<<<<<< HEAD
>>>>>>> d82be8200f37ed47a52bb873f6a6ac4d736701fd
=======
>>>>>>> d82be8200f37ed47a52bb873f6a6ac4d736701fd
?>
