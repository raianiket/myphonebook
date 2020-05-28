<!DOCTYPE html>
<html>
<head>

	<title> Change contact </title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
	<link rel="stylesheet" href="styles.css">

</head>
<body>

	<div class="header">

  		<h1>Phone Book</h1>
  		<p>Application Developed By Aniket Rai</p>

	</div>


	<div class="content">

		<h4>Edit contact</h4>


<?php

require 'db-connection.php';

$id = $_GET['id'];

$sql = "SELECT * FROM contacts WHERE id = $id";
$result = mysqli_query($conn, $sql);

if ($row = mysqli_fetch_array($result)) {
    	$id = $row['id'];
    	$name = $row['name'];
    	$phone = $row['phone'];
    	$email = $row['email'];
}

?>

	
		<div class="input">

			<form method="post" action="" enctype="multipart/form-data">
				
				<div class="sigle-input">
					<label class="form-label">Name: *</label>
					<input type="text" name="name" value="<?php echo $name ?>">
				</div>

				<div class="single-input">
					<label class="form-label">Phone: *</label>
					<input type="text" name="phone" value="<?php echo $phone ?>">
				</div>

				<div class="single-input">
					<label class="form-label">E-mail:</label>
					<input type="email" name="email" value="<?php echo $email ?>">
				</div>

				<input class="button2" type="submit" name="update" value="Update contact">
				<input class="button2" type="reset" value="Reset">
				<input class="button2" type="submit" name="delete" value="Delete contact">

			</form>
		</div>
	

<?php

if (isset($_POST['delete'])) {
	    
	    
	    $delete_query = "DELETE FROM contacts WHERE id = $id";
	    
		if (mysqli_query($conn, $delete_query)) {

			header('Location: index.php');
		} else {

			echo "<p>Error</p>";
		}
	    
}

if (isset($_POST['update'])) {

		$name  = $_POST['name'];
		$phone  = $_POST['phone'];
		$email  = $_POST['email'];
		
		$update_query = "UPDATE contacts SET name = '$name', phone = '$phone', email = '$email' 
		WHERE id=$id";

		if(!empty($name)) {

			if(!empty($phone)) {

				if (mysqli_query($conn, $update_query)) {

					header('Location: index.php');
				} else {

					echo "<p>Error</p>";
				}
			}

		} 
}

mysqli_close($conn);

?>

	</div>
</body>
</html>