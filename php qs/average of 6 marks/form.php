<!-- Design an HTML page to accept six marks and write PHP code to find the average   -->
<html>
<head>
    
    <title>Marks Form</title>
</head>
<body>
    <h2>Enter Six Marks</h2>
    <form action="average.php" method="post">
        <label for="mark1">Mark 1:</label>
        <input type="number"  name="mark1" required><br><br>

        <label for="mark2">Mark 2:</label>
        <input type="number"  name="mark2" required><br><br>

        <label for="mark3">Mark 3:</label>
        <input type="number"  name="mark3" required><br><br>

        <label for="mark4">Mark 4:</label>
        <input type="number"  name="mark4" required><br><br>

        <label for="mark5">Mark 5:</label>
        <input type="number"  name="mark5" required><br><br>

        <label for="mark6">Mark 6:</label>
        <input type="number"  name="mark6" required><br><br>

        <input type="submit" value="Calculate Average" name="btn">
    </form>
</body>
</html>
