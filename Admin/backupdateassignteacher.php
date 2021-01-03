<?php



    $sid = $_POST['mname'];
    $class = $_POST['class'];
    $section = $_POST['section'];
    $subcode=$_POST['fname'];

    


    include('backconnect.php');

    $sql = "UPDATE books SET teacherid='$sid' WHERE class='$class'AND section='$section'AND subjectcode='$subcode'";

    $result = mysqli_query($conn, $sql);
    // echo $sid;

     include('classteacher.php');

    ?>