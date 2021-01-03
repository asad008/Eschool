<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
    <meta charset="utf-8">

    <title></title>
</head>

<body>

    <?php

    $sid = $_POST['sid'];
    $sname = $_POST["sname"];

    $roll = $_POST["sroll"];

    $class = $_POST["class"];

    $current = $_POST["camount"];

    $transaction = $_POST["trn"];

    $advance = $_POST["aamount"];
    date_default_timezone_set('Asia/Dhaka');
    $yeare = date("Y");

    include('backconnect.php');
    $query = "SELECT * FROM regfee WHERE class='$class' AND year='$yeare'";
    $resultt = mysqli_query($conn, $query);
    while ($row = mysqli_fetch_assoc($resultt)) {
        $totall = $row["waiver"];
    }

    /*  $query = "SELECT * FROM payments WHERE class='$class' AND year='$yeare'AND id='$sid'";
    $resultt = mysqli_query($conn, $query);
    while ($row = mysqli_fetch_assoc($resultt)) {
        $current=$row["payment"];
    }
*/
    /*
    if ($current > $due) {

        $adv = $current - $totall;
        $current = $totall;
        $due = "0";

        $advance = $adv;
    } else {

        $current += $_POST["camount"];
        $due = $totall - $current;
        
        $advance = "0";
    }


    */
    $sqql = "SELECT * FROM payments Where class='$class' AND year='$yeare' AND id='$sid'  ";
    if ($res = mysqli_query($conn, $sqql)) {
        $rowcount = mysqli_num_rows($res);
    }

    //  cheaking if there is any entry or not


    if ($rowcount > 0) {
        $query = "SELECT * FROM payments WHERE class='$class' AND year='$yeare'AND id='$sid'";
        $resultt = mysqli_query($conn, $query);
        while ($row = mysqli_fetch_assoc($resultt)) {
            $paid = $row["payment"];
            $baki = $row["dues"];
        }
        $current += $paid;
        $due = $totall - $current;
        $advance = 0;
        if ($current > $baki) {
            $advance = $current - $totall;
            $due = 0;
            $current -= $advance;
        }

        $sql = "UPDATE payments SET paymentcode='$transaction',payment='$current',dues='$due',advance='$advance'
         WHERE class='$class' AND year='$yeare' And id='$sid'";
    } elseif($rowcount == 0) {
        $due = $totall - $current;
        if ($current > $totall) {
            $advance = $current - $totall;
            $due = 0;
            $current -= $advance;
        }

        $sql = "INSERT INTO payments(id,name,class,paymentcode,payment,dues,advance,year) 
        VALUES('$sid','$sname','$class','$transaction','$current','$due','$advance','$yeare')";
        // if there is any antry then update else insert
    }

    /* include('backconnect.php');*/



    $result = mysqli_query($conn, $sql);
    echo '<script type="text/javascript">';
    echo ' alert("Payment Done")';  //not showing an alert box.
    echo '</script>';
    // echo $rowcount." ";
    // echo $current." ";
    // echo$due;

    include('students_info.php');

    ?>




</body>

</html>