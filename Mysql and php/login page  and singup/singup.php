<html>
	<body>
		<form action="" method="post">
		username : <input type="text" name="usname"><br><br>
		password: <input type="text" name="pass"><br><br>
		<input type="submit" name="singup" value="singup">
		
		
		
	</body>

</html>
<?php
	$conn=mysqli_connect("localhost","root","","login");
	if(isset($_REQUEST['singup']))
	{
		$uname=$_REQUEST['usname'];
		$pass=$_REQUEST['pass'];
		$insert="insert into data (username,password) values ('$uname','$pass')";
		if(mysqli_query($conn,$insert))
		{
			echo "inserted sucessfully..";
			header("location:frontpage.php");
			exit();
		}
		else
		{
			die("insertion unsucessfull");
		}
	}
mysqli_close($conn);


?>