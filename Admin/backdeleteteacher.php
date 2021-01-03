<?php

include('backconnect.php');


$si = $_GET['si'];
$bcno = $_GET['bcn'];
$query = "DELETE FROM teacher_info WHERE teacherid='$si' AND bcn='$bcno'";
$result = mysqli_query($conn, $query);
if($result)
{
include('teachers_info.php');
}

?>