<?php

$sid = $_POST['sid'];



$class = $_POST["class"];

$section = $_POST["section"];

$exam = $_POST["exam"];

$b101 = $_POST["101"];
$b107 = $_POST["107"];
$b109 = $_POST["109"];
$b154 = $_POST["154"];



include('backconnect.php');




$query = "SELECT * FROM marks WHERE  marks.studentid='$sid' AND exam='$exam'";
$result = mysqli_query($conn, $query);

if (mysqli_fetch_assoc($result) <= 0) {
    $sql = "INSERT INTO marks(studentid,class,section,exam,b101,b107,b109,b154) 
    VALUES('$sid','$class','$section','$exam','$b101','$b107','$b109','$b154')";

    $resul = mysqli_query($conn, $sql);
} else {

    $sql = "UPDATE marks SET b101='$b101',b107='$b107',b109='$b109',b154='$b154' WHERE studentid='$sid' AND exam='$exam'";

    $resul = mysqli_query($conn, $sql);
    
}
?>