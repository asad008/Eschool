<?php
session_start();
date_default_timezone_set('Asia/Dhaka');
if (!isset($_SESSION['verified']) || $_SESSION['verified'] !== true) {
    header("Location: index.php");

    die();
}

?>

<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <link rel="stylesheet" href="assets/vendor/bootstrap/css/bootstrap.min.css">
    <link href="/your-path-to-fontawesome/css/fontawesome.css" rel="stylesheet">
    <link href="/your-path-to-fontawesome/css/brands.css" rel="stylesheet">
    <link href="/your-path-to-fontawesome/css/solid.css" rel="stylesheet">
    <link href="assets/vendor/fonts/circular-std/style.css" rel="stylesheet">
    <link rel="stylesheet" href="assets/libs/css/style.css">
    <link rel="stylesheet" href="assets/vendor/fonts/fontawesome/css/fontawesome-all.css">
    <link rel="stylesheet" href="assets/vendor/charts/chartist-bundle/chartist.css">
    <link rel="stylesheet" href="assets/vendor/charts/morris-bundle/morris.css">
    <link rel="stylesheet" href="assets/vendor/fonts/material-design-iconic-font/css/materialdesignicons.min.css">
    <link rel="stylesheet" href="assets/vendor/charts/c3charts/c3.css">
    <link rel="stylesheet" href="assets/vendor/fonts/flag-icon-css/flag-icon.min.css">



    <title>Student List</title>
</head>

<body>
    <!-- ============================================================== -->
    <!-- main wrapper -->
    <!-- ============================================================== -->
    <div class="dashboard-main-wrapper">
        <?php
        include('topmenu.php');
        include('left-sidebar.php'); ?>
        <!-- main container -->
        <div class="dashboard-wrapper">


            <div class="container-fluid  dashboard-content">

                <div class="row">

                    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                        <div class="card">
                            <h5 style="background-color: #ffffff; color: black;" class="card-header">Fees Info</h5>
                            <div class="card-body">


                                <form class="needs-validation" action="#" method="POST" novalidate>
                                    <div class="row">


                                        <div class="col-xl-3 col-lg-3 col-md-12 col-sm-12 col-12 ">
                                            <div class="form-group">
                                                <label for="input-select">Class</label>
                                                <?php

                                                $options = array('One', 'Two', 'Three', 'Four', 'Five', 'Six', 'Seven', 'Eight', 'Nine', 'Ten', 'Examinee');

                                                echo "<select class='form-control' id='input-select' name='clas' required>";
                                                foreach ($options as $option) {
                                                    if ($sclass == $option) {
                                                        echo "<option selected='selected' value='$option'>$option</option>";
                                                    } else {
                                                        echo "<option value='$option'>$option</option>";
                                                    }
                                                }
                                                echo "</select>";

                                                ?>
                                            </div>
                                        </div>


                                        <div class="col-xl-3 col-lg-3 col-md-12 col-sm-12 col-12 ">
                                            <label for="validationCustom01">Year</label>

                                            <input type="text" class="form-control" id="validationCustom01" name="yar" value="<?php echo date("Y"); ?>" required>

                                            <div class="valid-feedback">
                                                Looks good!
                                            </div>
                                        </div>



                                        <?php



                                        echo "<div class='col-xl-4 col-lg-4 col-md-12 col-sm-12 col-12 '>";
                                        echo "<input type='submit' name='feesub' value='  >>  ' style='margin-top: 25px; float: left;' class='btn btn-primary' type='submit'>";
                                        echo " </div> ";



                                        include('backconnect.php');
                                        if (isset($_POST["feesub"])) {
                                            $clau = $_POST["clas"];
                                            $yer = $_POST["yar"];
                                            $query = "SELECT * FROM regfee WHERE class='$_POST[clas]' AND year='$_POST[yar]'";

                                            if ($result = mysqli_query($conn, $query)) {
                                                $rowcount = mysqli_num_rows($result);
                                            }
                                            if ($rowcount > 0) {

                                                while ($row = mysqli_fetch_assoc($result)) {

                                                    $regifee = $row["regfee"];
                                                    $devefee = $row["devfee"];
                                                    $labofee = $row["labfee"];
                                                    $librfee = $row["labfee"];
                                                    $exmfee = $row["examfee"];
                                                    $extrfee = $row["extrafee"];
                                                    $othefee = $row["otherfee"];
                                                    $fee = $row["feerate"];
                                                    $waiver = $row["waiver"];
                                                    $_SESSION["cal"] = $row["class"];
                                                    $_SESSION["yeer"]  = $row["year"];
                                                }
                                            } else {
                                                $regifee = 0;
                                                $devefee = 0;
                                                $labofee = 0;
                                                $librfee = 0;
                                                $exmfee = 0;
                                                $extrfee = 0;
                                                $othefee = 0;
                                                $fee = 0;
                                                $waiver = 0;
                                            }
                                        } else {
                                            $clau = "One";
                                            $yer = date('Y');
                                            $query = "SELECT * FROM regfee WHERE class='One' AND year='2020'";
                                            $result = mysqli_query($conn, $query);
                                            while ($row = mysqli_fetch_assoc($result)) {

                                                $regifee = $row["regfee"];
                                                $devefee = $row["devfee"];
                                                $labofee = $row["labfee"];
                                                $librfee = $row["labfee"];
                                                $exmfee = $row["examfee"];
                                                $extrfee = $row["extrafee"];
                                                $othefee = $row["otherfee"];
                                                $fee = $row["feerate"];
                                                $waiver = $row["waiver"];
                                            }
                                        }




                                        ?>



                                        <h5 style="background-color: #f5f5f5; color: black;" class="card-header col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                                            Class : <?php echo $clau . " &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp Year : " . $yer; ?> </h5>



                                        <div class="col-xl-6 col-lg-6 col-md-12 col-sm-12 col-12 ">
                                            <label for="validationCustom01">Registration Fee</label>

                                            <input type="text" class="form-control" id="validationCustom01" name="regfee" value="<?php echo $regifee; ?>" required>

                                            <div class="valid-feedback">
                                                Looks good!
                                            </div>
                                        </div>

                                        <div class="col-xl-6 col-lg-6 col-md-12 col-sm-12 col-12 ">
                                            <label for="validationCustom01">Development Fee</label>

                                            <input type="text" class="form-control" id="validationCustom01" name="devfee" value="<?php echo $devefee; ?>" required>

                                            <div class="valid-feedback">
                                                Looks good!
                                            </div>
                                        </div>

                                        <div class="col-xl-6 col-lg-6 col-md-12 col-sm-12 col-12 ">
                                            <label for="validationCustom01">Lab Fee</label>

                                            <input type="text" class="form-control" id="validationCustom01" name="labfee" value="<?php echo $labofee; ?>" required>

                                            <div class="valid-feedback">
                                                Looks good!
                                            </div>
                                        </div>

                                        <div class="col-xl-6 col-lg-6 col-md-12 col-sm-12 col-12 ">
                                            <label for="validationCustom01">Library Free</label>

                                            <input type="text" class="form-control" id="validationCustom01" name="libfee" value="<?php echo $librfee; ?>" required>

                                            <div class="valid-feedback">
                                                Looks good!
                                            </div>
                                        </div>

                                        <div class="col-xl-6 col-lg-6 col-md-12 col-sm-12 col-12 ">
                                            <label for="validationCustom01">Exam Fee</label>

                                            <input type="text" class="form-control" id="validationCustom01" name="examfee" value="<?php echo $exmfee; ?>" required>

                                            <div class="valid-feedback">
                                                Looks good!
                                            </div>
                                        </div>
                                        <div class="col-xl-6 col-lg-6 col-md-12 col-sm-12 col-12 ">
                                            <label for="validationCustom01">Extra Fee</label>

                                            <input type="text" class="form-control" id="validationCustom01" name="extrafee" value="<?php echo $extrfee; ?>" required>

                                            <div class="valid-feedback">
                                                Looks good!
                                            </div>
                                        </div>

                                        <div class="col-xl-6 col-lg-6 col-md-12 col-sm-12 col-12 ">
                                            <label for="validationCustom01">Others</label>

                                            <input type="text" class="form-control" id="validationCustom01" name="otherfee" value="<?php echo $othefee; ?>" required>

                                            <div class="valid-feedback">
                                                Looks good!
                                            </div>
                                        </div>

                                        <div class="col-xl-6 col-lg-6 col-md-12 col-sm-12 col-12 ">
                                            <label for="validationCustom01">Tution Fees Rate</label>

                                            <input type="text" class="form-control" id="validationCustom01" name="rate" value="<?php echo $fee; ?>" required>

                                            <div class="valid-feedback">
                                                Looks good!
                                            </div>
                                        </div>
                                        <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12 ">
                                            <label for="validationCustom01">Total</label>

                                            <input type="text" class="form-control" id="validationCustom01" name="waiver" value="<?php echo $waiver; ?>">

                                            <div class="valid-feedback">
                                                Looks good!
                                            </div>
                                        </div>





                                        <!-- <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12 ">
                                            <button name="update" style="margin-top: 25px; float: right;" class="btn btn-primary" type="submit">Update</button>
                                        </div> -->


                                        <?php

                                        echo "<div class='col-xl-4 col-lg-4 col-md-12 col-sm-12 col-12 '>";
                                        echo "<input type='submit' name='updat' value=' Update  ' style='margin-top: 25px; float: left;' class='btn btn-primary' type='submit'>";
                                        echo " </div> ";








                                        include('backconnect.php');
                                        if (isset($_POST["updat"])) {
                                            $reg = $_POST['regfee'];
                                            $dev = $_POST['devfee'];
                                            $lab = $_POST['labfee'];
                                            $lib = $_POST['libfee'];
                                            $exm = $_POST['examfee'];
                                            $xtra = $_POST['extrafee'];
                                            $other = $_POST['otherfee'];
                                            $rate = $_POST['rate'];
                                            // $total = $_POST['waiver'];
                                            $total = $reg + $dev + $lab + $lib + $exm + $xtra + $other;
                                            $cas = $_SESSION["cal"];
                                            $yeear = $_SESSION["yeer"];
                                            include('backconnect.php');


                                            $query = "SELECT * FROM regfee WHERE class='$_POST[clas]' AND year='$yer'";
                                            if ($result = mysqli_query($conn, $query)) {
                                                $rowcount = mysqli_num_rows($result);
                                            }
                                            if ($rowcount > 0) {
 $sql = "UPDATE regfee SET regfee='$reg',devfee='$dev',labfee='$lab',libraryfee='$lib',examfee='$exm',extrafee='$xtra',otherfee='$other',feerate='$rate',waiver='$total'WHERE class='$cas' AND year='$yeear'";

                                               
                                            } else {
 $sql = "INSERT into regfee(class,regfee,devfee,labfee,libraryfee,examfee,extrafee,otherfee,feerate,waiver,year)
  VALUE('$clau','$reg','$dev','$lab','$lib','$exm','$xtra','$other','$rate','$total','$yer')";
      
                                               
                                            }




                                           
                                            $result = mysqli_query($conn, $sql);

                                            echo '<script type="text/javascript">';

                                            echo ' alert("Update Successfull")';  //not showing an alert box.
                                            echo '</script>';
                                        }
                                        ?>

                                    </div>
                                </form>
                            </div>


                        </div>
                    </div>

                </div>
            </div>










            <!-- ============================================================== -->
            <!-- footer -->
            <!-- ============================================================== -->
            <?php include 'footer.php'; ?>
            <!-- ============================================================== -->
            <!-- end footer -->
            <!-- ============================================================== -->
        </div>
        <!-- ============================================================== -->
        <!-- end wrapper  -->
        <!-- ============================================================== -->
    </div>
    <!-- ============================================================== -->
    <!-- end main wrapper  -->
    <!-- ============================================================== -->
    <!-- Optional JavaScript -->
    <!-- jquery 3.3.1 -->
    <script src="assets/vendor/jquery/jquery-3.3.1.min.js"></script>
    <!-- bootstap bundle js -->
    <script src="assets/vendor/bootstrap/js/bootstrap.bundle.js"></script>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
    <!-- slimscroll js -->
    <script src="assets/vendor/slimscroll/jquery.slimscroll.js"></script>
    <!-- main js -->
    <script src="assets/libs/js/main-js.js"></script>

    <!-- data table -->
    <script src="https://www.kryogenix.org/code/browser/sorttable/sorttable.js"></script>


</body>

</html>