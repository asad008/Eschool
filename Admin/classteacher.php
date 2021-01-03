<?php
session_start();

if (!isset($_SESSION['verified']) || $_SESSION['verified'] !== true) {
    header("Location: index.php");

    die();
}

?>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
<link rel="stylesheet" href="assets/vendor/bootstrap/css/bootstrap.min.css">

<link href="/your-path-to-fontawesome/css/fontawesome.css" rel="stylesheet">
<link href="/your-path-to-fontawesome/css/brands.css" rel="stylesheet">
<link href="/your-path-to-fontawesome/css/solid.css" rel="stylesheet">

<link rel="stylesheet" href="assets/libs/css/style.css">
<link href='assets/vendor/full-calendar/css/fullcalendar.css' rel='stylesheet' />
<link href="assets/vendor/fonts/circular-std/style.css" rel="stylesheet">
<script src="assets/libs/js/search.js"></script>
<script src="https://kit.fontawesome.com/e8989d062c.js" crossorigin="anonymous"></script>
<?php  include("topmenu.php"); ?>
<br><br><br><br>
<?php include("classassigntable.php"); ?>