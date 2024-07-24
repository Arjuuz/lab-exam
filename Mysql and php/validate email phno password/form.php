<!-- Design a webpage for getting Name, Mobile Number, Email and Password of a person. 
Write a PHP program to validate the following 
a. Mobile Number must be a positive integer and its length is 10 
b. Email validation  
c. Password contains special characters and numbers -->


<html>
    <head>
        <title>
            form
        </title>
    </head>
    <body>
        <form action="validate.php" method="post">
            <label for="name">Name: </label>
            <input type="text" name="name" placeholder="enter your name"><br><br>
            <label for="number">Number: </label>
            <input type="text" name="mob" placeholder="enter your mobile number" max="10"><br><br>
            <label for="email">Email: </label>
            <input type="text" name="email" placeholder="enter your emaik"><br><br>
            <label for="password">Password: </label>
            <input type="password" name="password" placeholder="enter your name"  required><br><br>
            <input type="submit" value="submit" name="btn">
        </form>
    </body>
</html>