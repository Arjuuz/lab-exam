<?php

	$conn=mysqli_connect("localhost","root","","cd");
	if(isset($_REQUEST['btn']))
	{
		$cid=$_REQUEST['cdid'];
		$name=$_REQUEST['name'];
		$lan=$_REQUEST['lang'];
		$hero=$_REQUEST['hero'];
		$heroine=$_REQUEST['heroine'];
		$date=$_REQUEST['date'];
		$insert="insert into video values('$cid','$name','$lan','$hero','$heroine','$date')";
		if(mysqli_query($conn,$insert))
		{
			echo "inserted sucessfully";
		}
		else
		{
			echo "insertion unsucessfull";
		}
	
	}
	$select="select * from video";
	$res=mysqli_query($conn,$select);
	if($res->num_rows>0)
	{
		echo "<table border='1' cellspacing='5' cellpadding='5'";
		echo "<tr>";
		echo "<th>CD ID</th>";
		echo "<th>CD NAME</th>";
		echo "<th>LANGUAGE</th>";
		echo "<th>HERO</th>";
		echo "<th>HEROINE</th>";
		echo "<th>DATE OF RELEASE</th>";
		echo "</tr>";
		while($row=mysqli_fetch_assoc($res))
		{
			echo "<tr>";
			echo "<td>" .$row["cdid"]."</td>";
			echo "<td>" .$row["filmname"]."</td>";
			echo "<td>" .$row["language"]."</td>";
			echo "<td>" .$row["hero"]."</td>";
			echo "<td>" .$row["heroine"]."</td>";
			echo "<td>" .$row["date_of_release"]."</td>";
			echo "</tr>";
			
		}
	}

mysqli_close($conn);	

?>