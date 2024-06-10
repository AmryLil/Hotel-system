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
			<table class="basic_box">
				<tr>
					<td colspan="6"><p style="font-size: 28px; text-align: center; text-decoration: underline;"><b>Booking History</b></p>
				</td>
				<tr>
					<th>Booking ID</th>
					<th>Name</th>
					<th>Room Type</th>
					<th>Check-in Date</th>
					<th>Check-out Date</th>
					<th>Price</th>
				</tr>
				<tr>
				<?php
					$phone = $row[0];
					$id = $row[4];
					$sql1 = "SELECT * from booked_hist";
					if ($result=mysqli_query($conn,$sql1))
				  	{
				  		while ($row=mysqli_fetch_row($result))
				    	{
				    		if($row[0]==$phone && $row[2]==$id)
				    		{
				    		?>
				    		<td><?php echo $row[14]; ?></td>
				   			<td><?php echo $row[1]; ?></td>
				   			<td><?php echo $row[3]; ?></td>
				   			<td><?php echo $row[4]; ?></td>
				    		<td><?php echo $row[5]; ?></td>
				    		<td><?php echo $row[13]; } ?></td>
				</tr><?php
				    	}
				    	mysqli_free_result($result); 
				    }?>
			</table>
			<form action="user_cancel_room.php" method="post" style="margin-top: 20px;">
						<label colspan="1">Enter Booking ID:</label>
						<input type="number" name="book_id" placeholder="Enter your Booking ID">
						<button type="submit" style="width: 280px;">View Details</button>
					</form>	
	</div>
</body>
</html>