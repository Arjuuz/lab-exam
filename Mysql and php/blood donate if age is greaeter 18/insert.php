<?php
if(isset($_REQUEST['btn'])) {
    $name = $_REQUEST['name'];
    $address = $_REQUEST['address'];
    $dob = $_REQUEST['dob'];
    $gender = $_REQUEST['gender'];
    $mobile = $_REQUEST['mobile'];
    $blood_group = $_REQUEST['blood_group'];

    
    $dobDate = new DateTime($dob);
    $currentDate = new DateTime();
    $age = $currentDate->diff($dobDate)->y;

    if ($age >= 18) {
        echo "Name: " .($name) . "<br>";
        echo "Address: " .($address) . "<br>";
        echo "Date of Birth: " .($dob) . " (Age: " . $age . ")<br>";
        echo "Gender: " .($gender) . "<br>";
        echo "Mobile No: " .($mobile) . "<br>";
        echo "Blood Group: " .($blood_group) . "<br>";
        echo "Application saved successfully.";
    } else {
        echo "Applicant must be at least 18 years old.";
    }
}
?>
