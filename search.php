<!DOCTYPE html>
<html>
<head>

	<title>Search Contacts</title>

</head>

<body>

<center>


    <?php

require 'db-connection.php';
	
	if(!@$_POST['Search'])
	{
		echo '<center>

		<form action="search.php" method="POST">
	
			<input type="hidden" name="hidden" value="TRUE" />
	
			<table border="0" style="width: 540px; height: 120px" cellpadding="3" cellspacing="3">
		
				<tr>
					<td><input type="text" placeholder="Search" name="search" style="height: 30px; width: 300px;"/></td>
				</tr>
			
				<tr align="center">
					<td colspan = "2">
						<input type="Submit" value="Search" name="Search" style="height: 30px; width: 130px;"/>
						<input type="Reset" value="Reset" style="height: 30px; width: 130px;"/>
					</td>
				</tr>
		
			</table>
	
		</form>

		</center>';
	}
	else
	{
		if(isset($_POST['hidden']))
		{

			$search = $_POST['search'];
	
			if($search === "") die(header("Location:search.php"));
	
			$search = $_POST['search'];
	
			if(!@mysqli_num_rows($sql = mysqli_query("SELECT * FROM phone WHERE $search = '$search'", $contacts)))
				die("<center><h2>SORRY, Searched Record Not Found !!!</h2><br/><input type='button' onclick=\"window.location.href='search.php'\" value='Try Again'></center>");

			if($search == "name") $search = "Name";
			
			echo '<center><h2 style="color: green;">Search Reseult For \'' . $search . ' : ' . $search . '\'</h2><br/>
<table align="center" cellspacing="5" cellpadding="6" width="90%" border="1" bordercolor="white"/>

	<thead>
	
		<tr><th width="20%">Name</th><th width="15%">Phone</th><th width="25%">email</th></tr>
	
	</thead>
	<tbody bordercolor="red">
	
		<tr>';?>
			<?php

				while($row = mysqli_fetch_array($sql))
				{	
					echo '<td>' . $row["ID"] . '.</td>
					<td>' . $row["Fname"] . ' ' . $row["Lname"] . '</td>
					<td>';?><?php $Phone = explode(',', $row['Phone']); for($i=0;@$Phone[$i];$i++)echo $Phone[$i] . '<br/>';?><?php echo'</td>
					<td>' . $row["email"] . '</td>
					</tr>';?><?php
				}
				
	echo '</tbody>

</table>
</center>';
		}
	}
	
?>

</body>
</html>
