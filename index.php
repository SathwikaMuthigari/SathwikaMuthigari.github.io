<?php
  if(!isset($_COOKIE["admin"]))
	  header("Location:index.html")
?>
<?php
/**
* Simple PHP CRUD Script
* Developed by TutorialsClass.com
* URL:  http://tutorialsclass.com/code/php-simple-crud-application
**/

// Create database connection using config file
include_once("config.php");

// Fetch all users data from database
$result = mysqli_query($mysqli, "SELECT * FROM atmt ORDER BY ID DESC");
?>

<html>
<head>    
    <title>ATMs</title>
    <meta name="viewport" content="width=device-width initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
</head>
<body>
<a href="logout.php">Logout</a>
    <?php include_once("header.html"); ?>
<a href="add.php" class="add">+</a>

    <table>

    <tr>
        <th>Location</th><th>Amount</th> <th>Update</th>
    </tr>
    <?php  
    if($result->num_rows > 0) {
        while($user_data = mysqli_fetch_array($result)) {         
            echo "<tr>";
            echo "<td>".$user_data['Location']."</td>";
            echo "<td>".$user_data['Amount']."</td>";
            echo "<td><a href='edit.php?id=$user_data[ID]'>Edit</a> | <a href='delete.php?id=$user_data[ID]'>Delete</a></td></tr>";        
        }
    }
    else {
        echo "<tr><td>No records found!</td></tr>";
    }
    ?>
    </table>
</body>
</html>
