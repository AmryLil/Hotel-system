<!DOCTYPE html>
<html>
<head>
	<title>Admin</title>
</head>
<style>
	
     

      <?php 
        include "./style.php"
      ?>
</style>
<body>
    <?php 
        include "./nav_header.php"
      ?>
	<div class="cont">
        <div style="padding: 20px">
          <div class="table-container">
            <table>
              <thead>
                <tr>
                  <th style="width: 200px;">Room Type</th>
                  <th style="width: 150px;">Available Rooms</th>
                  <th>Occupied Rooms</th>
                  <th>Price</th>
                </tr>
              </thead>
              <tbody id="table-body">
                <?php
                $conn = new mysqli("localhost","root","", "iwp");
                if($conn->connect_error)
                {
                  die("Connection failed: ".$conn->connect_error);
                }
                $sql = "SELECT * from rooms_count";
                $result=mysqli_query($conn,$sql); 
                if ($result->num_rows > 0) {
                  while ($row=mysqli_fetch_row($result)) {
                ?>
                        <tr>
                            <td><?php echo $row[0]; ?></td>
                            <td><?php echo $row[1]; ?></td>
                            <td><?php echo $row[2]; ?></td>
                            <td><?php echo $row[3]; ?></td>
                            
                        </tr>
                <?php
                    }
                } else {
                    echo "<tr><td colspan='7'>Tidak ada data guru</td></tr>";
                }
                $conn->close();
                ?>
              </tbody>
            </table>
          </div>
        </div>
  </div>
</body>
</html>