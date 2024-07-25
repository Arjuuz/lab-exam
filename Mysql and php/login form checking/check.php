<?php
 $conn=mysqli_connect("localhost","root","","login2");
 if(mysqli_connect_errno())
 {
    die("connection unsucessfull").mysqli_connect_error();
 }
 if (isset($_REQUEST['btn'])) {
    $user=$_REQUEST['username'];
    $pass=$_REQUEST['pass'];
    $select="select * from data where username='$user'";
    $res=mysqli_query($conn,$select);
    while($row=mysqli_fetch_assoc($res))
    {
        $u1=$row["username"];
        $p1=$row["password"];
        if($u1==$user && $p1==$pass)
        {
            echo "login sucesssfull";
        }
        else{
            echo "login unsuccessfull";
        }
    }
 }
 mysqli_close($conn);

?>