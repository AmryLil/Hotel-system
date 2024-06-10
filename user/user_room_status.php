<!DOCTYPE html>
<html>
<head>
	<title>User Room Status</title>
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
					<td colspan="7"><p style="font-size: 28px; text-align: center; text-decoration: underline;"><b>Room Booking Status</b></p>
				</td>
				<tr>
					<th>Booking ID</th>
					<th>Name</th>
					<th>Room Type</th>
					<th>Check-in Date</th>
					<th>Check-out Date</th>
					<th>Room Status</th>
					<th>Price</th>
				</tr>
				<tr>
				<?php
					$conn = new mysqli("localhost","root","", "iwp");
					if($conn->connect_error)
					{
						die("Connection failed: ".$conn->connect_error);
					}
					$sql1 = "SELECT * from user_room_book";
					$sql = "SELECT * from temp_session";
					$result=mysqli_query($conn,$sql);
					$row=mysqli_fetch_row($result);
					$phone = $row[0];
					$idproof = $row[4];
					if ($result=mysqli_query($conn,$sql1))
				  	{
				  		while ($row=mysqli_fetch_row($result))
				    	{
				    		if($phone==$row[0] && $idproof==$row[2])
				    		{
				    			?>
				    			<td><?php echo $row[15]; ?></td>
				    			<td><?php echo $row[1]; ?></td>
				    			<td><?php echo $row[3]; ?></td>
				    			<td><?php echo $row[4]; ?></td>
				    			<td><?php echo $row[5]; ?></td>
				    			<td><?php echo $row[13]; ?></td>
				    			<td><?php echo $row[14]; ?></td>
				    		</tr><?php
				    		}
				    	}
				  		mysqli_free_result($result);
					}
				?>
			</table>
			<form action="user_cancel_room.php" method="post" style="margin-top: 20px;">
						<label colspan="1">Enter Booking ID:</label>
						<input type="number" name="book_id" placeholder="Enter your Booking ID">
						<button type="submit" style="width: 280px;">Cancel Booking</button>
					</form>	
	</div>
</body>
</html>