<?php

	$conn=mysqli_connect("localhost","root","","phonedirectory");
	if(isset($_REQUEST['id']))
	{
		$id=$_REQUEST['id'];
		$delete="delete from customer where customerid='$id'";
		if(mysqli_query($conn,$delete))
		{
			echo "deleted sucessfully...";
			header("location:phn.php");
			exit();
		}
		else
		{
			die("delection unsucessfull..").mysqli_error($conn);
		}
	}
	else
	{
		echo "no records found";
	}
mysqli_close($conn);
?>