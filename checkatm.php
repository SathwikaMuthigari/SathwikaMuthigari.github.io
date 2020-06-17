<?php
   $place=$_POST["Location"];
   $amount=$_POST["Amount"];

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
echo "Connected successfully <br>";
$sql = "SELECT Location,Amount FROM atmt";
$result = $conn->query($sql);
$c=0;
if ($result->num_rows > 0) {
    while($row = $result->fetch_assoc()) {
         $msg=$row["Location"];
         $tokens=explode(" ",$msg);
         foreach($tokens as $token)
         { 
             if($token==$place)
               {
               if($row["Amount"]>=$amount)
                 {   
                   echo  "Location: ".$row["Location"]."</br>";
                   $c++;
                 }
              }
        }
    }
    if($c==0)
       echo "NO nearby Atm has ".$amount." Money  </br>";
} else {
    echo "0 results";
}
?>