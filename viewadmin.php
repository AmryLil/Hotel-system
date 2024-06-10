<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Document</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <style>
      body {
      font-family: Tahoma;
      margin: 0;
      padding: 0;
    }
      .table-container {
        max-height: 370px; /* Ubah nilai tinggi sesuai kebutuhan */
        overflow-y: auto;
        overflow-x: hidden;
        border: 1px solid #ccc;
      }

      table {
        width: 100%;
        border-collapse: collapse;
      }

      table th,
      table td {
        padding: 10px;
        text-align: left;
        border-bottom: 1px solid #ddd;
      }

      thead {
        color: white;
        background-color: #2c4c9c;
        font-weight: bold;
        position: sticky;
        top: 0;
      }

      tbody tr:nth-child(even) {
        background-color: #f9f9f9;
      }

      tbody tr:hover {
        background-color: #f1f1f1;
      }
      span{
        font-family: Tahoma;
        margin-left: 20px;
        font-size: 15px;
      }
      button{
        padding: 4px;
        border-radius: 5px;
        background-color: rgb(87, 87, 245);
        color: white;
        font-weight: bold;
        font-size: small;
        cursor: pointer;
        
      }
      table button{
        background-color: red;

      }
      a{
        text-decoration: none;
        color: black;

      }
      i{
        padding: 10px 20px;
      }
      i:hover{
        background-color: white;
        cursor: pointer;
      }
    </style>
  </head>
  <body style="padding: 14px">

      <div style="width: 100%; padding: 30px">
        <div style="padding: 20px">
          <div class="table-container">
            <table>
              <thead>
                <tr>
                  <th>Booking ID</th>
                  <th>Name</th>
                  <th>Room Type</th>
                  <th>Check-in Date</th>
                  <th>Check-out Date</th>
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
                if ($result=mysqli_query($conn,$sql1))
				  	{
				  		while ($row=mysqli_fetch_row($result))
				    	{
				    		if($row[13]=='Waiting'){
				    		?>
				    		<td><?php echo $row[15]; ?></td>
				   			<td><?php echo $row[1]; ?></td>
				   			<td><?php echo $row[3]; ?></td>
				   			<td><?php echo $row[4]; ?></td>
				    		<td><?php echo $row[5]; ?></td>
				    		<td><?php echo $row[14]; }?></td>
				    </tr><?php
				    	}
				    	mysqli_free_result($result); 
				    }?>
              </tbody>
            </table>
          </div>
        </div>
      </div>
  </body>
</html>
