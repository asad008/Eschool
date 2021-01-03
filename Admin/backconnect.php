<?php

$hostname = 'localhost';
$username = 'root';
$password = '';
$databasename = 'eschool';
$conn = mysqli_connect($hostname, $username, $password, $databasename);
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
  }

  
