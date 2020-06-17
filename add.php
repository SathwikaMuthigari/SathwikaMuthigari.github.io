<?php
  if(!isset($_COOKIE["admin"]))
	  header("Location:index.html")
	  ?>




<html>
<head>
	<title>Add ATMs</title>
	<meta name="viewport" content="width=device-width initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
</head>
<body> 
	<a href="logout.php">Logout</a>
   <?php include_once("header.html"); ?>
	<a href="index.php" class="add">Go to Home</a>
	<br/><br/>

	 <form action="add.php" method="post" name="form1">
		<table>
			<tr> 
				<td>Location</td>
				<td><input type="text" name="Location"></td>
			</tr>
			<tr> 
				<td>Amount</td>
				<td><input type="text" name="Amount"></td>
			</tr>
			
			<tr> 
				<td></td>
				<td><input type="submit" name="Submit" value="Add"></td>
			</tr>
		</table>
	  </form>
	<?php

	if(isset($_POST['Submit'])) {
		$name = $_POST['Location'];
		$email = $_POST['Amount'];
		
		
		// include database connection file
		include_once("config.php");
				
		// Insert user data into table
		$result = mysqli_query($mysqli, "INSERT INTO atmt(Location,Amount) VALUES('$name','$email')");
		
		// Show message when user added
        echo "User added successfully. <a href='index.php'>View Users</a>";
       }
    ?>
</body>
</html>