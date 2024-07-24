<html>
	<head>
		<title>Customer</title>
	</head>
	<body>
		<form action="" method="post">
			Customer id :  <input type="number" name="cid">
			<input type ="submit" name="btn" value="submit">
		</form>

		
		<?php
			$conn=mysqli_connect("localhost","root","","phonedirectory");
			if(isset($_REQUEST['btn']))
			{
				$cid=$_REQUEST['cid'];
				$select="select * from customer where customerid='$cid'";
				$res=mysqli_query($conn,$select);
				if($res->num_rows > 0)
				{
					echo "<table border='1' cellspacing='5' cellpadding='5'>";
					echo "<tr>";
					echo "<th>customerid</th>";
					echo "<th>name</th>";
					echo "<th>address</th>";
					echo "<th>District ID</th>";
					echo "<th>sex</th>";
					echo "<th>number</th>";
					echo "<th>Delete</th>";
					echo "</tr>";

				}
				while($row=mysqli_fetch_assoc($res))
				{
					echo "<tr>";
					echo "<td>" .$row["customerid"]. "</td>";
					echo "<td>" .$row["name"]. "</td>";
					echo "<td>" .$row["address"]. "</td>";
					echo "<td>" .$row["district_ID"]. "</td>";
					echo "<td>" .$row["sex"]. "</td>";
					echo "<td>" .$row["number"]. "</td>";
					echo "<td><a href='delete.php?id=".$row['customerid']."'>Delete</a></td>";
					echo "</tr>";
				}
					echo "</table>";
			}
			mysqli_close($conn);
		?>
	</body>

</html>

