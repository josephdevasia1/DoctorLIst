<?php
// Assuming you have established a database connection
$servername = "localhost";
$username = "root";
$dbname = "doclist";

// Create connection
$conn = new mysqli($servername, $username, "", $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Define arrays to store variables for each category
$medicine = array();
$surgery = array();
$orthopedics = array();
$omfs = array();
$ent = array();
$redzone = array();
$oph = array();


// Retrieve data for Medicine category
$sql = "SELECT * FROM medicine_doctors"; 
$result = $conn->query($sql);
if ($result->num_rows > 0) {
    $medicine = $result->fetch_assoc();
}

// Retrieve data for Surgery category
$sql = "SELECT * FROM surgery_doctors"; 
$result = $conn->query($sql);
if ($result->num_rows > 0) {
    $surgery = $result->fetch_assoc();
}

// Retrieve data for Orthopedics category
$sql = "SELECT * FROM orthopedics_doctors";
$result = $conn->query($sql);
if ($result->num_rows > 0) {
    $orthopedics = $result->fetch_assoc();
}

// Retrieve data for OMFS category
$sql = "SELECT * FROM omfs_doctors";
$result = $conn->query($sql);
if ($result->num_rows > 0) {
    $omfs = $result->fetch_assoc();
}

// Retrieve data for ENT category
$sql = "SELECT * FROM ent_doctors";
$result = $conn->query($sql);
if ($result->num_rows > 0) {
    $ent = $result->fetch_assoc();
}

// Retrieve data for Red Zone category
$sql = "SELECT * FROM redzone_doctors";
$result = $conn->query($sql);
if ($result->num_rows > 0) {
    $redzone = $result->fetch_assoc();
}

// Retrieve data for OPH category
$sql = "SELECT * FROM oph_doctors";
$result = $conn->query($sql);
if ($result->num_rows > 0) {
    $oph = $result->fetch_assoc();
}


// Close the database connection
$conn->close();
?>


<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Doctors on duty</title>
    <link rel="stylesheet" type="text/css" href="style/style.css">
</head>
<body>

    <div class="navbar">
        <h1>WELCOME TO KOTTAYAM MEDICAL COLLEGE</h1>
    </div>

    <div class="main">
        <h1>Doctors on Duty</h1>
    </div>
<marquee direction="up" vspace="-10px" scrollamount="15">
  <div class="scroll">
    <div class="column">
        <ul class="category-list">
            <li class="category">
                <h1>Medicine</h1>
                <ul class="doctor-list">
                    <li>MO : <?php echo $medicine['MO']; ?></li>
                    <li>JR3 : <?php echo $medicine['JR3']; ?></li>
                    <li>JR2 : <?php echo $medicine['JR2']; ?></li>
                    <li>JR1 : <?php echo $medicine['JR1']; ?></li>
                    <li>HS : <?php echo $medicine['HS']; ?></li>
                </ul>
            </li>
            <li class="category">
                <h1>Surgery</h1>
                <ul class="doctor-list">
                    <li>MO : <?php echo $surgery['MO']; ?></li>
                    <li>JR3 : <?php echo $surgery['JR3']; ?></li>
                    <li>JR2 : <?php echo $surgery['JR2']; ?></li>
                    <li>JR1 : <?php echo $surgery['JR1']; ?></li>
                    <li>HS : <?php echo $surgery['HS']; ?></li>
                </ul>
            </li>
        </ul>
    </div>

    <div class="column">
        <ul class="category-list">
            <li class="category">
                <h1>Orthopedics</h1>
                <ul class="doctor-list">
                    <li>MO : <?php echo $orthopedics['MO']; ?></li>
                    <li>JR3 : <?php echo $orthopedics['JR3']; ?></li>
                    <li>JR2 : <?php echo $orthopedics['JR2']; ?></li>
                    <li>JR1 : <?php echo $orthopedics['JR1']; ?> </li>
                    <li>NAJR : <?php echo $orthopedics['NAJR']; ?></li>
                    <li>HS : <?php echo $orthopedics['HS']; ?></li>
                </ul>
            </li>
            <li class="category">
                <h1>OMFS</h1>
                <ul class="doctor-list">
                    <li>MO : <?php echo $omfs['MO']; ?> </li>
                    <li>PG : <?php echo $omfs['PG']; ?></li>
                    <li>HS : <?php echo $omfs['HS']; ?></li>
                </ul>
            </li>
            <!-- Add more categories as needed -->
        </ul>
    </div>
    <div class="column">
        <ul class="category-list">
            <li class="category">
                <h1>ENT</h1>
                <ul class="doctor-list">
                    <li>MO : <?php echo $ent['MO']; ?></li>
                    <li>PG : <?php echo $ent['PG']; ?></li>
                    <li>HS : <?php echo $ent['HS']; ?></li>
                </ul>
            </li>
            <li class="category">
                <h1>Red Zone</h1>
                <ul class="doctor-list">
                    <li>Emergency Physician : <?php echo $redzone['emergency_physician']; ?></li>
                    <li>PG : <?php echo $redzone['PG']; ?></li>
                    <li>HS : <?php echo $redzone['HS']; ?></li>
                    
                </ul>
            </li>
        </ul>
    </div>
    <div class="column">
        <ul class="category-list">
            <li class="category">
                <h1>OPH</h1>
                <ul class="doctor-list">
                    <li>MO : <?php echo $oph['MO']; ?></li>
                    <li>PG : <?php echo $oph['PG']; ?></li>
                    <li>HS : <?php echo $oph['HS']; ?></li>
                </ul>
            </li>
            <!-- Add more categories as needed -->
        </ul>
    </div>
</div>
</marquee>
<div class="navbar-bottom">
    <marquee>
    <h1>Public Relation Officer at your service : +91 7825212233</h1>
</marquee>
</div>

</body>
</html>
