<!DOCTYPE html>
<html>
<head>
	<title>Admin Confirm Booking</title>
</head>
<style>
	<?php 
		include "style.php"
	?>
</style>
<?php 
		include "nav_header.php"
	?>
	<div class="cont">
			<table class="basic_box">
				<tr>
					<td colspan="6"><p style="font-size: 28px; text-align: center; text-decoration: underline;"><b>Confirmed Bookings</b></p>
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
					$conn = new mysqli("localhost","root","", "iwp");
					if($conn->connect_error)
					{
						die("Connection failed: ".$conn->connect_error);
					}
					$sql1 = "SELECT * from confirmed_booking";
					if ($result=mysqli_query($conn,$sql1))
				  	{
				  		while ($row=mysqli_fetch_row($result))
				    	{
				    		?>
				    		<td><?php echo $row[14]; ?></td>
				   			<td><?php echo $row[1]; ?></td>
				   			<td><?php echo $row[3]; ?></td>
				   			<td><?php echo $row[4]; ?></td>
				    		<td><?php echo $row[5]; ?></td>
				    		<td><?php echo $row[13]; ?></td>
				</tr><?php
				    	}
				    	mysqli_free_result($result); 
				    }?>
			</table><br><br>
			<table class="basic_box">
				<tr >
					<th colspan="2" style="font-size: 20px;font-weight: bold;">Modify Stay</th>
				</tr>
				<tr>
					<td colspan="1">Enter Booking ID:</td>
					<td colspan="2">
						<form action="admin_modify_room.php" method="post">
							<input type="number" name="book_id">
					</td>
				</tr>
				<tr>
					<td colspan="1">Enter new CheckOut date:</td>
					<td colspan="2">
						<input type="date" name="checkout">
					</td>
				</tr>
				<tr>
					<td></td>
					<td style="text-align: center;"><button type="submit">Change</button>
				</tr>
			</table>
		</div>
	</body>
</html>