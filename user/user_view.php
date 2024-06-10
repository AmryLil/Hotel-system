<!DOCTYPE html>
<html>
<head>
	<title>User Signed In</title>
</head>
<style>
	<?php 
		include "style.php"
	?>
</style>
<body>
	<?php
		$conn = new mysqli("localhost","root","", "iwp");
		if($conn->connect_error)
		{
			die("Connection failed: ".$conn->connect_error);
		}
		$sql = "SELECT * from temp_session";
		$result=mysqli_query($conn, $sql);
		$row=mysqli_fetch_row($result); ?>
	<?php 
		include "nav_header.php"
	?>
	<div class="cont">
			<table  class="basic_box decor">
				<tr>
					<td colspan="2"><p style="font-size: 38px; text-align: center;"><b>Welcome!</b></p>
				</td>
				<tr>
					<td><b>Name: </b></td>
					<td><?php echo $row[2] ?><br></td>
				</tr>
				<tr>
					<td><b>Phone number: </b></td>
					<td><?php echo $row[0] ?><br></td>
				</tr>
				<tr>
					<td><b>Email address: </b></td>
					<td><?php echo $row[3] ?><br></td>
				</tr>
				<tr>
					<td><b>Date of birth: </b></td>
					<td><?php echo $row[5] ?><br></td>
				</tr>
				<tr>
					<td><b>ID Proof: </b></td>
					<td><?php echo $row[4] ?><br></td>
				</tr>
				<tr><td></td></tr><tr><td></td></tr>
			</table>
	</div>
</body>
</html>