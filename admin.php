<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "Atm";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
echo "Connected successfully";
$sql = "INSERT INTO admin (AdminID,EmailID,Password)
VALUES (1,'amirishettypravanya@gmail.com','1a'),(2,'meghanareddy.meda@gmail.com','2m'),(3,'pswetha265@gmail.com','3p'),(4,'sathwika.muthigari@gmail.com','4s')";

if ($conn->query($sql) == TRUE) {
    echo " successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}


$conn->close();
?>