<?php
session_start();

if (!isset($_SESSION['verified']) || $_SESSION['verified'] !== true) {
    header("Location: index.php");

    die();
}

?>





<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Bootstrap CSS -->
    <!-- <link rel="stylesheet" href="assets/vendor/bootstrap/css/bootstrap.min.css">
    <link href="assets/vendor/fonts/circular-std/style.css" rel="stylesheet">

    <link rel="stylesheet" href="assets/libs/css/style1.css">
    <link rel="stylesheet" href="assets/libs/css/style.css"> 
    <link rel="stylesheet" href="assets/vendor/fonts/fontawesome/css/fontawesome-all.css"> -->
    <title>Document</title>
</head>

<body>
    <?php
    include('backconnect.php');
    $si = $_GET['si'];
    $bcno = $_GET['bcn'];
    $query = "SELECT * FROM student_info WHERE studentid='$si' AND bcn='$bcno'";
    $result = mysqli_query($conn, $query);

    while ($row = mysqli_fetch_assoc($result)) {

        $sid = $row['studentid'];

        $gphone = $row['mobile'];

        $sname = $row['sname'];

        $fname = $row['fname'];

        $mname = $row['mname'];

        $bcn = $row['bcn'];

        $dob = $row['dob'];

        $sgender = $row['gender'];


        $sreligion = $row['religion'];

        $roll = $row['roll'];

        $groupid = $row['groupid'];

        $sclass = $row['class'];

        $section = $row['section'];


        $email = $row['email'];


        $pass = $row['passwor'];

        $exam = $row['exam'];

        $session = $row['sesion'];

        $Exam_roll = $row['examroll'];

        $Registration_number = $row['regnum'];

        $GPA = $row['gpa'];

        $grade = $row['grade'];

        $Passing_year = $row['passingyear'];

        $city = $row['city'];

        $district = $row['district'];

        $zip = $row['zip'];

        $thana = $row['thana'];

        $permacity = $row["permacity"];

        $permadistrict = $row["permadistrict"];

        $permazip = $row["permazip"];

        $permathana = $row["permathana"];
    }

    ?>






















    <div class="dashboard-main-wrapper">

        <?php include('topmenu.php'); ?>
        <?php include('left-sidebar.php'); ?>

        <div class="dashboard-wrapper">
            <div class="container-fluid  dashboard-content">


                <div class="row">

                    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                        <div class="card">
                            <h5 style="background-color: #ffffff; color: black;" class="card-header">Student Payment</h5>
                            <div class="card-body">


                                <form class="needs-validation" action="backpayment.php" method="POST" novalidate>
                                    <div class="row">

                                        <div class="col-xl-6 col-lg-6 col-md-12 col-sm-12 col-12 ">
                                            <label for="validationCustom01">Student Id</label>

                                            <input style="pointer-events: none;cursor: default;" type="text" class="form-control" id="validationCustom01" name="sid" value="<?php echo $sid; ?>" required>

                                            <div class="valid-feedback">
                                                Looks good!
                                            </div>
                                        </div>

                                        <div class="col-xl-6 col-lg-6 col-md-12 col-sm-12 col-12 ">
                                            <label for="validationCustom01">Guardian Mobile</label>

                                            <input type="text" class="form-control" id="validationCustom01" name="gphone" value="<?php echo $gphone; ?>" required>

                                            <div class="valid-feedback">
                                                Looks good!
                                            </div>
                                        </div>

                                        <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12 ">
                                            <label for="validationCustom01">Student Name</label>

                                            <input type="text" class="form-control" id="validationCustom01" name="sname" value="<?php echo $sname; ?>" required>

                                            <div class="valid-feedback">
                                                Looks good!
                                            </div>
                                        </div>



                                        <div class="col-xl-6 col-lg-6 col-md-12 col-sm-12 col-12 ">
                                            <label for="validationCustom02">Roll</label>
                                            <input type="number" class="form-control" id="validationCustom02" name="sroll" value="<?php echo $roll; ?>" required>
                                            <div class="valid-feedback">
                                                Looks good!
                                            </div>
                                        </div>




                                        <div class="col-xl-6 col-lg-6 col-md-12 col-sm-12 col-12 ">
                                            <div class="form-group">
                                                <label for="input-select">Class</label>
                                                <?php

                                                $options = array('One', 'Two', 'Three', 'Four', 'Five', 'Six', 'Seven', 'Eight', 'Nine', 'Ten', 'Examinee');

                                                echo "<select class='form-control' id='input-select' name='class' required>";
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

                                        <h5 style="background-color: #ffffff; color: black;" class="card-header col-xl-12
                                         col-lg-12 col-md-12 col-sm-12 col-12">Payment Amount</h5>

                                        <div class="col-xl-6 col-lg-6 col-md-12 col-sm-12 col-12 ">
                                            <label for="validationCustom01">Current</label>

                                            <input type="tel" class="form-control" id="validationCustom01" name="camount" required>

                                            <div class="valid-feedback">
                                                Looks good!
                                            </div>
                                        </div>
                                        <div class="col-xl-6 col-lg-6 col-md-12 col-sm-12 col-12 ">
                                            <label for="validationCustom01">Advance</label>

                                            <input type="tel" class="form-control" id="validationCustom01" name="aamount">

                                            <div class="valid-feedback">
                                                Looks good!
                                            </div>
                                        </div>

                                        <div class="col-xl-6 col-lg-6 col-md-12 col-sm-12 col-12 ">
                                            <label for="validationCustom01">Transaction Id</label>

                                            <input type="tel" class="form-control" id="validationCustom01" name="trn" required>

                                            <div class="valid-feedback">
                                                Looks good!
                                            </div>
                                        </div>


                                        <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12 ">
                                            <button style="margin-top: 25px; float: right;" class="btn btn-primary" type="submit">Payment</button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>

                </div>


            </div>

        </div>
    </div>

    <!-- same as present Address -->







</body>

</html>