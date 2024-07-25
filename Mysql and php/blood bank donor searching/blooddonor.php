<?php
    $conn=mysqli_connect("localhost","root","","bloodbank11");
    if(mysqli_connect_errno())
    {
        die("connection unsuccessfull").mysqli_connect_error();
    }
    if(isset($_REQUEST['btn']))
    {
        $blood=strtoupper($_REQUEST['search']);
        $select="select * from data where bloodgroup ='$blood'";
        $res=mysqli_query($conn,$select);
        if($res->num_rows > 0)
        {
            echo "<table border=1>";
            echo "<tr>";
            echo "<td>Name</td>";
            echo "<td>Blood group</td>";
            echo "<td>Phone number</td>";
            echo "</tr>";
            while($row=mysqli_fetch_assoc($res))
            {
                echo "<tr>";
                echo "<td>".$row["name"]."</td>";
                echo "<td>".$row["bloodgroup"]."</td>";
                echo "<td>".$row["mob"]."</td>";
                echo "</tr>";

            }
            echo "</table>";
        }
        else{
            echo "no record found";
        }

    }

    mysqli_close($conn);
?>