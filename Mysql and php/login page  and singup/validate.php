<?php
	$conn=mysqli_connect("localhost","root","","login");
	if(isset($_REQUEST['login']))
	{
		$currentusername=$_REQUEST['uname'];
		$currentpassword=$_REQUEST['password'];
		$select="select * from data where username='$currentusername'";
		$res=mysqli_query($conn,$select);
		if($res->num_rows>0)
		{
			$row=mysqli_fetch_assoc($res);
			$passwordfromdb=$row['password'];
			if ($currentpassword==$passwordfromdb) {

				header("Location:login.php");
				exit();
			} 
			else{
				echo "invalid password";
			}
		}
		else{
				echo "invalid username";
			}
	}

mysqli_close($conn);


?>
