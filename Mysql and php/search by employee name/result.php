<?php
$conn=mysqli_connect("localhost","root","","employee200");
if (mysqli_connect_errno()) {
    die("Connection failed: ").mysqli_connect_error();
}

// Handle form submission
if (isset($_REQUEST['btn'])) {
    $search_name = $_REQUEST['search'];
    $sql = "SELECT * FROM data  WHERE name LIKE '%$search_name%'";
    $res=mysqli_query($conn,$sql);

    if ($res->num_rows > 0) {
        echo "<h2>Search Results</h2>";
        echo "<table border='1'>";
        echo "<tr><th>Employee Number</th><th>Name</th><th>Mobile</th><th>Email</th></tr>";
        
        // Output data of each row
        while ($row = mysqli_fetch_assoc($res)) {
           echo"<tr>";
            echo "<td>" . $row['empno'] . "</td>";
            echo "<td>" . $row['name'] . "</td>";
            echo "<td>" . $row['mobile'] . "</td>";
            echo "<td>" . $row['email'] . "</td>";
            echo "</tr>";
        }
        echo"</table>";
    } else {
        echo "No results found.";
    }
}

mysqli_close($conn);
?>
