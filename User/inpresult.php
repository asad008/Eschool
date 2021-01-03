<?php
session_start();

if (!isset($_SESSION['tverified']) || $_SESSION['tverified'] !== true) {
    header("Location: teacherlogin.php");

    die();
}
?>

<link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.0/css/bootstrap.min.css" rel="stylesheet">
<!-- Material Design Bootstrap -->
<link href="https://cdnjs.cloudflare.com/ajax/libs/mdbootstrap/4.19.1/css/mdb.min.css" rel="stylesheet">
<script src="https://kit.fontawesome.com/e8989d062c.js" crossorigin="anonymous"></script>

<?php
 include("topmenu.php");
 echo "<br><br><br><br><br>";
 include("tablea.php");
 
 



?>