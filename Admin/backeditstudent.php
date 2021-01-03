
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
                            <h5 style="background-color: #ffffff; color: black;" class="card-header">Student Info</h5>
                            <div class="card-body">


                                <form class="needs-validation" action="backupdatestudent.php" method="POST" novalidate>
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

                                        <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12 ">
                                            <label for="validationCustom02">Father Name</label>
                                            <input type="text" class="form-control" id="validationCustom02" name="fname" value="<?php echo $fname; ?>" required>
                                            <div class="valid-feedback">
                                                Looks good!
                                            </div>
                                        </div>
                                        <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12 ">
                                            <label for="validationCustom02">Mother Name</label>
                                            <input type="text" class="form-control" id="validationCustom02" name="mname" value="<?php echo $mname; ?>" required>
                                            <div class="valid-feedback">
                                                Looks good!
                                            </div>
                                        </div>

                                        <div class="col-xl-6 col-lg-6 col-md-12 col-sm-12 col-12 ">
                                            <label for="validationCustom01">Birth Certificate Number</label>

                                            <input style="pointer-events: none;cursor: default;" type="tel" class="form-control" id="validationCustom01" pattern="[0-9]{13,13}" name="sbcn" value="<?php echo $bcno; ?>" required>

                                            <div class="valid-feedback">
                                                Looks good!
                                            </div>
                                        </div>

                                        <div class="col-xl-6 col-lg-6 col-md-12 col-sm-12 col-12 ">
                                            <label for="validationCustom01">Birth Date</label>

                                            <input type="date" class="form-control" id="validationCustom01" name="sdob" value="<?php echo $dob; ?>" required>

                                            <div class="valid-feedback">
                                                Looks good!
                                            </div>
                                        </div>
                                       
                                        <div class="col-xl-6 col-lg-6 col-md-12 col-sm-12 col-12 ">
                                            <div class="form-group">
                                                <label for="input-select">Gender</label>
                                               

                                                <?php
                                                $options = array('Male', 'Female', 'Others');
                                                echo "<select class='form-control' id='input-select' name='sgender' required>";
                                                foreach($options as $option){
                                                    if($sgender == $option) {
                                                        echo "<option selected='selected' value='$option'>$option</option>";
                                                    }
                                                    else {
                                                        echo "<option value='$option'>$option</option>";
                                                    }
                                                }
                                                echo "</select>";
                                                ?>
                                            </div>
                                        </div>

                                        <div class="col-xl-6 col-lg-6 col-md-12 col-sm-12 col-12 ">
                                            <div class="form-group">
                                                <label for="input-select">Religion</label>
                                                <?php

                                                $options = array('Islam', 'Hindu', 'Buddhism','Christianity');
                                                echo "<select class='form-control' id='input-select' name='sreligion'>";
                                                foreach($options as $option){
                                                    if($sreligion == $option) {
                                                        echo "<option selected='selected' value='$option'>$option</option>";
                                                    }
                                                    else {
                                                        echo "<option value='$option'>$option</option>";
                                                    }
                                                }
                                                echo "</select>";
                                                ?>
                                            </div>
                                        </div>


                                        <h5 style="background-color: #ffffff; color: black;" class="card-header col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">Class
                                            Information</h5>


                                        <div class="col-xl-6 col-lg-6 col-md-12 col-sm-12 col-12 ">
                                            <label for="validationCustom02">Roll</label>
                                            <input type="number" class="form-control" id="validationCustom02" name="sroll"  value="<?php echo $roll; ?>" required>
                                            <div class="valid-feedback">
                                                Looks good!
                                            </div>
                                        </div>

                                        <div class="col-xl-6 col-lg-6 col-md-12 col-sm-12 col-12 ">
                                            <div class="form-group">
                                                <label for="input-select">Group Id</label>
                                                <?php
                                                
                                                $options = array('Common', 'Science', 'Commerce','Arts');
                                               
                                                echo "<select class='form-control' id='input-select' name='groupid' required>";
                                                foreach($options as $option){
                                                    if($groupid == $option) {
                                                        echo "<option selected='selected' value='$option'>$option</option>";
                                                    }
                                                    else {
                                                        echo "<option value='$option'>$option</option>";
                                                    }
                                                }
                                                echo "</select>";
                                                ?>
                                            </div>
                                        </div>



                                        <div class="col-xl-6 col-lg-6 col-md-12 col-sm-12 col-12 ">
                                            <div class="form-group">
                                                <label for="input-select">Class</label>
                                                <?php
                                                
                                                $options = array('One','Two','Three','Four','Five','Six','Seven','Eight','Nine','Ten','Examinee');
                                               
                                                echo "<select class='form-control' id='input-select' name='class' required>";
                                                foreach($options as $option){
                                                    if($sclass == $option) {
                                                        echo "<option selected='selected' value='$option'>$option</option>";
                                                    }
                                                    else {
                                                        echo "<option value='$option'>$option</option>";
                                                    }
                                                }
                                                echo "</select>";
                                                ?>
                                            </div>
                                        </div>

                                        <div class="col-xl-6 col-lg-6 col-md-12 col-sm-12 col-12 ">
                                            <label for="validationCustom02">Section</label>
                                            <input type="text" class="form-control" id="validationCustom02" name="section" value="<?php echo $section; ?>">
                                            <div class="valid-feedback">
                                                Looks good!
                                            </div>
                                        </div>

                                        <div class="col-xl-6 col-lg-6 col-md-12 col-sm-12 col-12 ">
                                            <label for="validationCustom02">Email</label>
                                            <input type="email" class="form-control" id="validationCustom02" name="email" value="<?php echo $email; ?>">
                                            <div class="valid-feedback">
                                                Looks good!
                                            </div>
                                        </div>
                                        <div class="col-xl-6 col-lg-6 col-md-12 col-sm-12 col-12 ">
                                            <label for="validationCustom02">Password</label>
                                            <input type="password" class="form-control" id="validationCustom02" name="pass" value="<?php echo $pass; ?>" required>
                                            <div class="valid-feedback">
                                                Looks good!
                                            </div>
                                        </div>



                                        <h5 style="background-color: #ffffff; color: black;" class="card-header col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">Public
                                            Exam Information</h5>

                                        <div class="col-xl-6 col-lg-6 col-md-12 col-sm-12 col-12 ">
                                            <div class="form-group">
                                                <label for="input-select">Exam Name</label>
                                                <?php
                                                $options = array('', 'PSC', 'JSC','SSC');
                                               
                                                echo "<select class='form-control' id='input-select' name='exam' >";
                                                foreach($options as $option){
                                                    if($exam == $option) {
                                                        echo "<option selected='selected' value='$option'>$option</option>";
                                                    }
                                                    else {
                                                        echo "<option value='$option'>$option</option>";
                                                    }
                                                }
                                                echo "</select>";
                                                ?>
                                            </div>
                                        </div>

                                        <div class="col-xl-6 col-lg-6 col-md-12 col-sm-12 col-12 ">
                                            <label for="validationCustom02">Session</label>
                                            <input type="text" class="form-control" id="validationCustom02" name="session" value="<?php echo $session; ?>">
                                            <div class="valid-feedback">
                                                Looks good!
                                            </div>
                                        </div>

                                        <div class="col-xl-6 col-lg-6 col-md-12 col-sm-12 col-12 ">
                                            <label for="validationCustom02">Exam Roll</label>
                                            <input type="number" class="form-control" id="validationCustom02" name="Exam_roll" value="<?php echo $Exam_roll; ?>">
                                            <div class="valid-feedback">
                                                Looks good!
                                            </div>
                                        </div>

                                        <div class="col-xl-6 col-lg-6 col-md-12 col-sm-12 col-12 ">
                                            <label for="validationCustom02">Registration Number</label>
                                            <input type="number" class="form-control" id="validationCustom02" name="Registration_number" value="<?php echo $Registration_number; ?>">
                                            <div class="valid-feedback">
                                                Looks good!
                                            </div>
                                        </div>

                                        <div class="col-xl-6 col-lg-6 col-md-12 col-sm-12 col-12 ">
                                            <label for="validationCustom02">GPA (point)</label>
                                            <input type="text" class="form-control" id="validationCustom02" name="GPA" value="<?php echo $GPA; ?>">
                                            <div class="valid-feedback">
                                                Looks good!
                                            </div>
                                        </div>

                                        <div class="col-xl-6 col-lg-6 col-md-12 col-sm-12 col-12 ">
                                            <div class="form-group">
                                                <label for="input-select">Grade</label>
                                                <?php
                                                
                                                $options = array('', 'A+', 'A','A-','B+', 'B', 'B-','C+','C', 'D', 'F');
                                               
                                                echo "<select class='form-control' id='input-select' name='grade' >";
                                                foreach($options as $option){
                                                    if($grade == $option) {
                                                        echo "<option selected='selected' value='$option'>$option</option>";
                                                    }
                                                    else {
                                                        echo "<option value='$option'>$option</option>";
                                                    }
                                                }
                                                echo "</select>";
                                                ?>
                                            </div>
                                        </div>

                                        <div class="col-xl-6 col-lg-6 col-md-12 col-sm-12 col-12 ">
                                            <label for="validationCustom02">Passing Year</label>
                                            <input type="text" class="form-control" id="validationCustom02" name="passing_year" value="<?php echo $Passing_year; ?>">
                                            <div class="valid-feedback">
                                                Looks good!
                                            </div>
                                        </div>


                                        <h5 style="background-color: #ffffff; color: black;" class="card-header col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">Present Address</h5>

                                        <div class="col-xl-6 col-lg-6 col-md-12 col-sm-12 col-12 mb-12">
                                            <label for="validationCustom03">City</label>
                                            <input type="text" class="form-control" id="city" placeholder="City" name="city" value="<?php echo $city; ?>" required>
                                            <div class="invalid-feedback">
                                                Please provide a valid city.
                                            </div>
                                        </div>
                                        <div class="col-xl-6 col-lg-6 col-md-12 col-sm-12 col-12 mb-12">
                                            <label for="validationCustom04">District</label>
                                            <input type="text" class="form-control" id="district" placeholder="District" name="district" value="<?php echo $district; ?>" required>
                                            <div class="invalid-feedback">
                                                Please provide a valid District.
                                            </div>
                                        </div>
                                        <div class="col-xl-6 col-lg-6 col-md-12 col-sm-12 col-12 mb-12">
                                            <label for="validationCustom05">Zip</label>
                                            <input type="text" class="form-control" id="zip" placeholder="Zip" name="zip" value="<?php echo $zip; ?>" required>
                                            <div class="invalid-feedback">
                                                Please provide a valid zip.
                                            </div>
                                        </div>

                                        <div class="col-xl-6 col-lg-6 col-md-12 col-sm-12 col-12 mb-12">
                                            <label for="validationCustom05">Thana</label>
                                            <input type="text" class="form-control" id="thana" placeholder="Thana" name="thana" value="<?php echo $thana; ?>" required>
                                            <div class="invalid-feedback">
                                                Please provide a valid Thana.
                                            </div>
                                        </div>

                                        <h5 style="background-color: #ffffff; color: black;" class="card-header col-xl-9 col-lg-9 col-md-12 col-sm-12 col-12">Permanent Address</h5>

                                        <div class="form-group  col-xl-3 col-lg-3 col-md-12 col-sm-12 col-12">
                                            <div class="form-check">
                                                <input style="margin-top: 28px;" class="form-check-input" type="checkbox" onclick="fillAddress()" name="filladdress" id="filladdress">
                                                <label class="form-check-label" for="invalidCheck">
                                                    Same As Present Address
                                                </label>

                                            </div>
                                        </div>

                                        <div class="col-xl-6 col-lg-6 col-md-12 col-sm-12 col-12 mb-12">
                                            <label for="validationCustom03">City</label>
                                            <input type="text" class="form-control" id="cityo" placeholder="City" name="city" value="<?php echo $permacity; ?>">
                                            <div class="invalid-feedback">
                                                Please provide a valid city.
                                            </div>
                                        </div>
                                        <div class="col-xl-6 col-lg-6 col-md-12 col-sm-12 col-12 mb-12">
                                            <label for="validationCustom04">District</label>
                                            <input type="text" class="form-control" id="districto" placeholder="District" name="district" value="<?php echo $permadistrict; ?>">
                                            <div class="invalid-feedback">
                                                Please provide a valid District.
                                            </div>
                                        </div>
                                        <div class="col-xl-6 col-lg-6 col-md-12 col-sm-12 col-12 mb-12">
                                            <label for="validationCustom05">Zip</label>
                                            <input type="text" class="form-control" id="zipo" placeholder="Zip" name="zip" value="<?php echo $permazip; ?>">
                                            <div class="invalid-feedback">
                                                Please provide a valid zip.
                                            </div>
                                        </div>

                                        <div class="col-xl-6 col-lg-6 col-md-12 col-sm-12 col-12 mb-12">
                                            <label for="validationCustom05">Thana</label>
                                            <input type="text" class="form-control" id="thanao" placeholder="Thana" name="thana" value="<?php echo $permathana; ?>">
                                            <div class="invalid-feedback">
                                                Please provide a valid Thana.
                                            </div>
                                        </div>

                                        <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12 ">
                                            <button style="margin-top: 25px; float: right;" class="btn btn-primary" type="submit">Update</button>
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






    <script>
        function fillAddress() {
            if (filladdress.checked == true) {
                var city = document.getElementById("city").value;
                var district = document.getElementById("district").value;
                var thana = document.getElementById("thana").value;
                var zip = document.getElementById("zip").value;


                var copycity = city;
                var copydistrict = district;
                var copythana = thana;
                var copyzip = zip;


                document.getElementById("cityo").value = copycity;
                document.getElementById("districto").value = copydistrict;
                document.getElementById("thanao").value = copythana;
                document.getElementById("zipo").value = copyzip;

            } else if (filladdress.checked == false) {
                document.getElementById("cityo").value = '';
                document.getElementById("districto").value = '';
                document.getElementById("thanao").value = '';
                document.getElementById("zipo").value = '';
            }
        }
    </script>
    <!-- 
   
    <script src="assets/libs/js/main-js.js"></script> 
    <script src="assets/vendor/bootstrap/js/bootstrap.bundle.js"></script>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
    <script src="assets/vendor/jquery/jquery-3.3.1.min.js"></script>
   
    <script src="assets/vendor/slimscroll/jquery.slimscroll.js"></script>
    <script src="assets/vendor/parsley/parsley.js"></script>
     -->
</body>

</html>