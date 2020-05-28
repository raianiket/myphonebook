<!DOCTYPE html>
<html>
<head>

	<title> Add contact </title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
	<link rel="stylesheet" href="styles.css">

</head>
<body>

	<div class="header">
  		<h1>Phone Book</h1>
  		<p>Application Developed By Ivana Kovacevic</p>
	</div>


	<div class="content">

		<h4>ADD NEW CONTACT</h4>

		<div class="input">

			<form method="post" action="" enctype="multipart/form-data">
				
				<div class="sigle-input">
					<label class="form-label">Name: *</label>
					<input type="text" name="name" placeholder="First name and last name">
				</div>

				<div class="single-input">
					<label class="form-label">Phone: *</label>
					<input type="text" name="phone" placeholder="+38763123456">
				</div>

				<div class="single-input">
					<label class="form-label">E-mail:</label>
					<input type="email" name="email" placeholder="example@mail.com">
				</div>

				<input class="button2" type="submit" name="submit" value="Save contact">
				<input class="button2" type="reset" value="Reset">

			</form>
		</div>

<?php

require 'db-connection.php';


if (isset($_POST['submit'])) {
	
	$name = $_POST['name'];
	$phone = $_POST['phone'];
	$email = $_POST['email']; 

	if(!empty($name)) {

		if(!empty($phone)) {

			$add_query = "INSERT INTO contacts (name, phone, email) VALUES (?, ?, ?)";

			$stmt = mysqli_prepare($conn, $add_query);

			mysqli_stmt_bind_param ($stmt, 'sss', $name, $phone, $email);

			mysqli_stmt_execute($stmt);
			
			/*printf("%d Row inserted.\n", mysqli_stmt_affected_rows($stmt));*/

			mysqli_stmt_close($stmt);

			header('Location: index.php');
		}

	} 

}

mysqli_close($conn);

?>

	</div>

</body>
</html>
