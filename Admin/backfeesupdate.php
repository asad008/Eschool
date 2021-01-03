<?php

$reg = $_POST['regfee'];
$dev = $_POST['devfee'];
$lab = $_POST['labfee'];
$lib = $_POST['libfee'];
$exm = $_POST['examfee'];
$xtra = $_POST['extrafee'];
$other = $_POST['otherfee'];
$rate = $_POST['rate'];
$total = $_POST['waiver'];
$clau = $_POST['clas'];
$yer = $_POST['yar'];





// $total = $reg + $dev + $lab + $lib + $exm + $xtra + $other;
include('backconnect.php');
if (isset($_POST["update"])) {
    include('backconnect.php');

    $sql = "UPDATE regfee SET regfee='$reg',devfee='$dev',
    labfee='$lab',libraryfee='$lib',examfee='$exm',extrafee='$xtra',otherfee='$other',feerate='$rate'
    ,waiver='$total'WHERE class='$clau' AND year='$yer'";

    $result = mysqli_query($conn, $sql);

    echo '<script type="text/javascript">';

    echo ' alert("Update Successfull".$lab)';  //not showing an alert box.
    echo '</script>';

    include('fees.php');
}else{
    echo "Fucck oFF";
}
?>