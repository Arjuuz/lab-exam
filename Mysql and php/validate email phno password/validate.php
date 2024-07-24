<?php
    if(isset($_REQUEST['btn']))
    {
        $name=$_REQUEST['name'];
        $mob=$_REQUEST['mob'];
        $email=$_REQUEST['email'];
        $password=$_REQUEST['password'];
        $errors=[];
        if(!empty($mob))
        {
    
            if (!preg_match('/^[0-9]{10}$/', $mob)) {
                $errors[] = "Mobile number must be a positive integer with a length of 10.";
            }
        }
        else{
            $errors[]="password should not be empty";
        }
        if(!empty($password))
        {
            if(!preg_match('/[^A-Za-z]/',$password) && !preg_match('/[0-9]/',$password) && !preg_match('/[!@#$%^&*().,;;|+_-]/',$password))
            {
                $errors[]="Password must contain at least one letter, one number, and one special character.";
            }
        }
        else{
            $errors[]="password should not be empty";
        }
        if(!empty($email))
        {
            if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
                $errors[] = "Invalid email format email must contain @ ..";
            }  
        }
        else{
            $errors[]="email should not be empty";
        }
        if(!empty($errors))
        {
            foreach ($errors as $error)
            {
                echo $error;
                echo "<br>";
            }
        }
        else{
            echo "all validations are sucessfull...";
        }
    }

?>