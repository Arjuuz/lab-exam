<?php
if (isset($_REQUEST['btn'])) {
    $mark1 = $_REQUEST['mark1'];
    $mark2 = $_REQUEST['mark2'];
    $mark3 = $_REQUEST['mark3'];
    $mark4 = $_REQUEST['mark4'];
    $mark5 = $_REQUEST['mark5'];
    $mark6 = $_REQUEST['mark6'];
    $marks = array($mark1,$mark2,$mark3,$mark4,$mark5,$mark6);
    $nomarks=count($marks);
    $totalMarks = $mark1 + $mark2 + $mark3 + $mark4 + $mark5 + $mark6;
    $average=($totalMarks/$nomarks);

    echo "Marks: " . ($mark1) . ", " . ($mark2) . ", " . ($mark3) . ", " . ($mark4) . ", " . ($mark5) . ", " . ($mark6) . "<br>";
    echo "Total marks =$totalMarks <br> ";
    echo "Average: " . htmlspecialchars($average);
}
?>
