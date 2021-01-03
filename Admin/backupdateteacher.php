<?php



$tid = $_POST['teacherid'];

$gphone = $_POST['mobile'];

$tname = $_POST['tname'];

$fname = $_POST['fname'];

$mname = $_POST['mname'];

$bcn = $_POST['bcn'];

$dob = $_POST['dob'];

$sgender = $_POST['gender'];


$sreligion = $_POST['religion'];

$designation = $_POST['designation'];

$dept = $_POST['dept'];

$faculty = $_POST['faculty'];

$email = $_POST['email'];

$pass = $_POST['pass'];

$city = $_POST['city'];

$district = $_POST['district'];

$zip = $_POST['zip'];

$thana = $_POST['thana'];

$permacity = $_POST["permacity"];

$permadistrict = $_POST["permadistrict"];

$permazip = $_POST["permazip"];

$permathana = $_POST["permathana"];


    include('backconnect.php');

    $sql = "UPDATE teacher_info SET mobile='$gphone',designation='$designation',tname='$tname',fname='$fname',mname='$mname',bcn='$bcn',dob='$dob',gender='$sgender',religion='$sreligion',dept='$dept',faculty='$faculty',email='$email',passwor='$pass',city='$city',district='$district',zip='$zip',thana='$thana',permacity='$permacity',permadistrict='$permadistrict',permathana='$permathana',permazip='$permazip' WHERE teacherid='$tid'";

    $result = mysqli_query($conn, $sql);
    // echo $sid;

     include('teachers_info.php');
?>