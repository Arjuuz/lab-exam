<?php
    $conn=mysqli_connect("localhost","root","","book100");
    if (mysqli_connect_errno()) {
        die("connection error").mysqli_connect_error();
    }
    if(isset($_REQUEST['btn']))
    {
        $id=$_REQUEST['bookid'];
        $name=$_REQUEST['name'];
        $issuedate=date("Y-m-d");
        $insert="insert into issue (bookid,student_name,issue_date) values ('$id','$name','$issuedate')";
        if (mysqli_query($conn,$insert)) {
            echo "issue date setted sucessfully";
        }
        else{
            echo "error".mysqli_error($conn);
        }
    }
mysqli_close($conn);
?>