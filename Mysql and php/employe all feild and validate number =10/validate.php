<?php
    if(isset($_REQUEST['btn']))
    {
        $empcode=$_REQUEST['empcode'];
        $name=$_REQUEST['name'];
        $address=$_REQUEST['address'];
        $dob=$_REQUEST['dob'];
        $gender=$_REQUEST['gender'];
        $mob=$_REQUEST['mob'];
        $errors=[];
        if(empty($empcode))
        {
            $errors[]="employee code should not be empty..";
        }
        if(empty($name))
        {
            $errors[]="employee name should not be empty..";
        }
        if(empty($address))
        {
            $errors[]="employee address should not be empty..";
        }
        if(empty($dob))
        {
            $errors[]="employee cdob should not be empty..";
        }
        if(empty($gender))
        {
            $errors[]="employee gender should not be empty..";
        }
        if(!empty($mob))
        {
            if(!preg_match('/^[0-9]{10}$/',$mob))
            {
                $errors[]="mobile number  should  be 10 digits..";
            }
        }
        else{
            $errors[]="mobile number should not be empty..";
        }

       if(!empty($errors))
       {
            foreach($errors as $error)
            {
                echo $error;
                echo "<br>";
            }
       }
       else{
        echo "valodation sucessfull all values are properly given..";
       }

    }
?>