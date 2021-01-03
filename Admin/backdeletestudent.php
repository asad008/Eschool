<?php

include('backconnect.php');


$si = $_GET['si'];
$bcno = $_GET['bcn'];
$query = "DELETE FROM student_info WHERE studentid='$si' AND bcn='$bcno'";
$result = mysqli_query($conn, $query);
if($result)
{
include('students_info.php');

}
?>