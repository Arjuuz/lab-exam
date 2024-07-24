<?php

    $conn=mysqli_connect("localhost","root","","login2");
    if(mysqli_connect_errno())
    {
        die("connection sucessfull").mysqli_connect_error();
    }
    if(isset($_REQUEST['btn']))
    {
        $userid1=$_REQUEST['userid'];
        $pass1=$_REQUEST['pass'];
        $select="select visit_count,userid,password from logindata where userid='$userid1'";
        $res=mysqli_query($conn,$select);
        while($row=mysqli_fetch_assoc($res))
        {
            $storeid=$row["userid"];
            $storepass=$row["password"];
            $count=$row["visit_count"];
            if($storeid ==$userid1 && $storepass==$pass1)
            {
                $count++;
                $update="update logindata set visit_count=$count where userid='$storeid'";
                if(mysqli_query($conn,$update))
                {
                    echo "Login sucessfull visit count =" .$count;
                }
                else{
                    echo "Invalid password.";
                }
            }
            else{
                echo "username or password is unsuccessfull";
            }
        }
        
    }
?>