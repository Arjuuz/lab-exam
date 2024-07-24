<!-- 22.Create a login page verify the username and password provide provision to
create new user in the login page. If log is successful redirect to new page.
otherwise show the error message
[Hint: create a table which contain username and password ] -->
<html>
	<body>
		<form action="validate.php" method="post">
		username : <input type="text" name="uname"><br><br>
		password: <input type="text" name="password"><br><br>
		<input type="submit" name="login" value="login">   
		<a href="singup.php">Singup</a>
	</body>
	

</html>
