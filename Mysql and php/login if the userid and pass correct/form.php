<!-- Create a table login (userid, password, role, visit_count) and insert five records, role must 
be admin or user and visit_count is zero for all users to start with. Write a PHP code to 
login with valid userid and password and update the visit count field in each visit by one.  -->


<html>
    <head>
        <title>login</title>
    </head>
    <body>
        <form action="count.php" method="post">
            <label for="userid">User id : </label>
            <input type="text" name="userid" placeholder="enetr your userid "><br><br>
            <label for="password">Password : </label>
            <input type="text" name="pass" placeholder="enetr your password "><br><br>
            <input type="submit" name="btn" value="submit">
        </form>
    </body>
</html>