<?php
$uid=$_POST['AdminID'];
$uemail=$_POST['emailID'];
$upass=$_POST['password'];

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


$sql = "SELECT * FROM admin where EmailID ='$uemail' AND Password = '$upass'";
$result = $conn->query($sql);
$f=0;
if ($result->num_rows > 0) {
    header("Location:index.php");
    setcookie("admin",$uemail,time()+86400);
        
} else {
    echo "You are not registered as an admin";
}




?>