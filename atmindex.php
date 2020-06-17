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
$sql = "INSERT INTO atmt (Location,Amount)
VALUES ('Mehdipatnam G.Narayanamma', 10000),('Mehidipatnam Dargah',1000),('Mehdipatnam JMJ ',30000),('Mehdipatnam GNITS',23000),('Tolichowki',56000),('Gacchibowli',7000)";
;

if ($conn->query($sql) == TRUE) {
    echo " successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>