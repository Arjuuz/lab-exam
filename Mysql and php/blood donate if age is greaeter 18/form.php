

<!-- Create an application form using html which contains Name, Address, Dob, Gender, 
Mobile No, Blood Group. Write a PHP code to save the data only if the applicant is greater 
than eighteen years old. -->
<html>
<head>
    
    <title>Application Form</title>
</head>
<body>
    <h2>Application Form</h2>
    <form action="insert.php" method="post">
        <label for="name">Name:</label>
        <input type="text" name="name" required><br><br>

        <label for="address">Address:</label>
        <input type="text"  name="address" required><br><br>

        <label for="dob">Date of Birth:</label>
        <input type="date"  name="dob" required><br><br>

        <label for="gender">Gender:</label>
        <select  name="gender" required>
            <option value="Male">Male</option>
            <option value="Female">Female</option>
            <option value="Other">Other</option>
        </select><br><br>

        <label for="mobile">Mobile No:</label>
        <input type="text" name="mobile"><br><br>

        <label for="blood_group">Blood Group:</label>
        <select  name="blood_group" required>
            <option value="A+">A+</option>
            <option value="A-">A-</option>
            <option value="B+">B+</option>
            <option value="B-">B-</option>
            <option value="AB+">AB+</option>
            <option value="AB-">AB-</option>
            <option value="O+">O+</option>
            <option value="O-">O-</option>
        </select><br><br>

        <input type="submit" value="Submit" name="btn">
    </form>
</body>
</html>
