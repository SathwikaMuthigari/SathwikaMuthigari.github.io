

<?php
// include database connection file
include_once("config.php");

// Check if form is submitted for user update, then redirect to homepage after update
if(isset($_POST['update']))
{	
	$id = $_POST['id'];
	
	$name=$_POST['Location'];
	$email=$_POST['Amount'];
		
	// update user data
	$result = mysqli_query($mysqli, "UPDATE atmt SET Amount='$email' WHERE ID=$id");
	
	// Redirect to homepage to display updated user in list
	header("Location: index.php");
}
?>
<?php
// Display selected user data based on id
// Getting id from url
$id = $_GET['id'];

// Fetech user data based on id
$result = mysqli_query($mysqli, "SELECT * FROM atmt WHERE ID=$id");

while($user_data = mysqli_fetch_array($result))
{
	$name = $user_data['Location'];
	$email = $user_data['Amount'];
}
?>
<html>
<head>
	<title>Edit Amount</title>
	<meta name="viewport" content="width=device-width initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
</head>

<body>
	<?php include_once("header.html"); ?>
	<a href="index.php" class="add">Go to Home</a>	<br/><br/>
	
	<form name="update_user" method="post" action="edit.php">
		<table border="0">
			<tr> 
				<td>Location</td>
				<td><input type="text" name="Location" value=<?php echo $name;?>></td>
			</tr>
			<tr> 
				<td>Amount</td>
				<td><input type="text" name="Amount" value=<?php echo $email;?>></td>
			</tr>
			
			<tr>
				<td><input type="hidden" name="ID" value=<?php echo $_GET['id'];?>></td>
				<td><input type="submit" name="update" value="Update"></td>
			</tr>
		</table>
	</form>
</body>
</html>

