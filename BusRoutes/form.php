
<?php
// Set your database connection parameters
$hostname = 'localhost';
$username = 'root';
$password = '';
$database = 'booking details';

// Connect to the database
$db = new mysqli($hostname, $username, $password, $database);

// Check connection
if ($db->connect_error) {
    die("Connection failed: " . $db->connect_error);
}


$username = "";
$email = "";

$db = mysqli_connect(hostname:'localhost',username:'root',password:'',database:'booking details');


// Check connection
if ($db->connect_error) {
    die("Connection failed: " . $db->connect_error);
}

// Retrieve form data (sanitize and validate as needed)
$Name = mysqli_real_escape_string($db, $_POST['Name']);
$RegistrationNo = mysqli_real_escape_string($db, $_POST['Vehicle_Reg_No']);
$Boarding = mysqli_real_escape_string($db, $_POST['Boarding']);
$Alight = mysqli_real_escape_string($db, $_POST['Alight']);
$Fare = mysqli_real_escape_string($db, $_POST['Fare']);
$SeatNo = mysqli_real_escape_string($db, $_POST['Seat_No']);

// Insert data into database using prepared statement to prevent SQL injection
$stmt = $db->prepare("INSERT INTO bookings (First_Name, Departure, Alight, Bus_Reg_No, Seat_No, Fare) VALUES (?, ?, ?, ?, ?, ?)");
$stmt->bind_param("ssssss", $Name, $Boarding, $Alight, $RegistrationNo, $SeatNo, $Fare);

if ($stmt->execute()) {
    echo "New record created successfully";
} else {
    echo "Error: " . $stmt->error;
}

$stmt->close();


// Close connection
$db->close();
?>
