<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="../BusRoutes/BusRoutes.css">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bus Routes</title>
</head>
<body>
    <header>
        <h2>Search For a Route</h2>

    </header>
   <section id="Routes">
    
   <?php 
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

// Retrieve and display options from routes table
$sql = "SELECT RouteNo FROM routes";
$result = $db->query($sql);

if ($result->num_rows > 0) {
    echo '<form action="../BusRoutes/form.php" method="POST">';
    echo '<label for="dropdown">Select Your Route Number:</label>';
   
    
    echo '<select name="dropdown" id="Routenumber">';
    while ($row = $result->fetch_assoc()) {
        echo "<option value='" . $row[""] . "'>" . $row["RouteNo"] . "</option>";
    }
    echo '</select>';
    echo '<input type="submit" value="Submit">';
    echo '</form>';
} else {
    echo "<option value=''>No options available</option>";
}



$sql = "SELECT Station_Name FROM stations";
$result = $db->query($sql);

if ($result->num_rows > 0) {
    echo '<form action="../BusRoutes/form.php" method="POST">';
    echo '<label for="dropdown">Boarding Station:</label>';
   
    
    echo '<select name="dropdown" id="Routenumber">';
    while ($row = $result->fetch_assoc()) {
        echo "<option value='" . $row[""] . "'>" . $row["Station_Name"] . "</option>";
    }
    echo '</select>';
    echo '<input type="submit" value="Submit">';
    echo '</form>';
} else {
    echo "<option value=''>No options available</option>";
}
$sql = "SELECT RouteNo FROM routes";
$result = $db->query($sql);



$sql = "SELECT Station_Name FROM stations";
$result = $db->query($sql);

if ($result->num_rows > 0) {
    echo '<form action="../BusRoutes/form.php" method="POST">';
    echo '<label for="dropdown">Alighting Station:</label>';
   
    
    echo '<select name="dropdown" id="Routenumber">';
    while ($row = $result->fetch_assoc()) {
        echo "<option value='" . $row[""] . "'>" . $row["Station_Name"] . "</option>";
    }
    echo '</select>';
    echo '<input type="submit" value="Submit">';
    echo '</form>';
} else {
    echo "<option value=''>No options available</option>";
}
$sql = "SELECT RouteNo FROM routes";
$result = $db->query($sql);












?>


   </section>




            <select name="" id="Routenumbers">
                <option disabled selected>Select a Route</option>        
                <option value="125"> Route 125</option>
                <option value="48">Route 48</option>
                <option value="35">Route 35</option>
                <option value="53">Route 53</option>
            
            
                </select>
             
        </div>      
        <div class="searchbox">
            <div class="row">
                <input type="text" class="input" value="" data-target="resultbox"   id="inputbox" placeholder="Boarding Station" autocomplete="off">
            </div>
            <div class="resultbox" ></div>
        </div>

        <div class="searchbox">
            <div class="row">
                <input type="text" class="input" value=""    id="inputbox" placeholder="Alighting Station" autocomplete="off">
            </div>
            <div class="resultbox" ></div>
        </div>

    </div>

    <section id="Booking">
        <div id="containerdetails">
            <div id="details">
                <form>
                    
                    <label for="">From</label>
                    <input type="text" name="" id="From">
                    <label for="">To</label>
                    <input type="text" name="" id="TO">
                    <button id="seatbook" type="button">Book  A Seat</button>

                </form>
    
     
            </div>
    
        </div>
        <div id="Vehiclecontainer">
            <form action="../BusRoutes/form.php" method="POST">

            <!--<form action="https://api.web3forms.com/submit" method="POST"   id="qr-generation-form">-->
            <input type="hidden" name="access_key" value="1f6ad7fe-a06a-4931-aee5-6178ec2b3b7a">  
            <label for="Name">Name</label>
            <input type="text" name="Name" id="user">        
               <label for="Vehicle_Reg_No" id="reg">Vehicle Reg No</label>
                <input type="text"  name="Vehicle_Reg_No"  id="Vehicle-reg" >
                <label for="Boarding">Boarding</label>
                <input type="text" name="Boarding" id="BusFrom" >
                <label for="Alight">Alight</label>
                <input type="text" name="Alight" id="BusTo">
                <label for="Fare">Fare</label>
                <input type="number" name="Fare" id="fare">
                <label for="Seat_No">Seat No</label>
                <input type="number" name="Seat_No" id="Seatno" required>
                <br>
                <button type="submit" id="webform">Confirm Booking</button><br>

                <button type="button" value="Generate QR Code" id="Generate">Generate QR Code</button>
                
            </form>
            </div>
        </div>
        <div id="qr-code"></div>
    
    

    </section>
    <section id="seatcontainer">
        <div id="seats">
            <button id="eric" class="seatbtn">1</button>
            <button class="seatbtn">2</button>
            <button class="seatbtn">3</button>
            <button class="seatbtn">4</button>
            <button class="seatbtn">5</button>
            <button class="seatbtn">6</button>
            <button class="seatbtn">7</button>
            <button class="seatbtn">8</button>
            <button class="seatbtn">9</button>
            <button class="seatbtn">10</button>
            <button class="seatbtn">11</button>
            <button class="seatbtn">12</button>
            <button class="seatbtn">13</button>
            <button class="seatbtn">14</button>
            <button class="seatbtn">15</button>
            <button class="seatbtn">16</button>
            <button class="seatbtn">17</button>
            <button class="seatbtn">18</button>
            <button class="seatbtn">19</button>
            <button class="seatbtn">20</button>
               
        </div>
       
        <br>
        <p>One seat per person</p>
    
        
    </section>
       
     
      <section id="footer">
        <footer>
            <p>All Rights Reserved</p>
            <p>Public Transport Ticketing System - 2024</p>
        </footer>

      </section>
      
    
    
    

    
    
</body>
<script src="https://cdnjs.cloudflare.com/ajax/libs/qrcodejs/1.0.0/qrcode.min.js"></script>
<script src="BusRoutes.js"></script>
</html>

