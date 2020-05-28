<?php

session_start();

?>

<!DOCTYPE html>
<html>
<head>

	<title> Phone book </title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
	<link rel="stylesheet" href="styles.css">

</head>
<body>

	<div class="header">

  		<h1>My Phone Book</h1>
  		<p>Application Developed By Aniket Rai</p>

	</div>

	<div class="content">

			<form method="post" action="searchs.php">
			<center><label><input name="search" type="search" autofocus><input value="Search" type="submit" name=""></label><center>
			
			</form>

	<div class="content">

			
			</form>


<?php

require 'db-connection.php';

$sql = "SELECT * FROM contacts";
$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) > 0) {
	
	echo "<table id='allcontacts'><tr><th>Name</th><th>Phone</th><th>E-mail</th><th>Action</th></tr>";
    
    // output data of each row
    while($row = mysqli_fetch_array($result)) {
    	
    	$id = $row['id'];
    	$name = $row['name'];
    	$phone = $row['phone'];
    	$email = $row['email'];

    	$_SESSION["id"] = $id;


    	echo "<tr>";
    	echo "<td>$name</td><td>$phone</td><td>$email</td>";
    	echo "<td>";
    	echo "<form method='post' action='change-contact.php?id=$_SESSION[id]'>";
    	echo "<input class='button3' type='submit' name='change' value='Click to edit & delete contact'>";
    	echo "</form></td>";
    	echo "</tr>";
    }

    echo "</table>";

} else {

    echo "<h5>No results. Please insert contact!<h5>";
}

mysqli_close($conn);

?>

	</div> 
	<form method="post" action="add-contact.php">
				<button class="button1" type="submit"> <img src="plus.png"> </button>

</body>
</html>