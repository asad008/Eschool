<?php
session_start();

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
    <title>Form Validation</title>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="assets/vendor/bootstrap/css/bootstrap.min.css">
    <link href="assets/vendor/fonts/circular-std/style.css" rel="stylesheet">

    <link rel="stylesheet" href="assets/libs/css/style1.css">
    <link rel="stylesheet" href="assets/libs/css/style.css">
    <link rel="stylesheet" href="assets/vendor/fonts/fontawesome/css/fontawesome-all.css">
</head>

<body>



    <div class="dashboard-main-wrapper">
        <?php include('topmenu.php'); ?>
        <?php include('left-sidebar.php'); ?>
        <div class="dashboard-wrapper">
            <div class="container-fluid  dashboard-content">


                <div class="row">

                    <div>
                        <div class="card">
                            <h5 style="background-color: #ffffff; color: black;" class="card-header">Student Info</h5>
                            <div class="card-body">


                                <form class="needs-validation" action="backinsert_student.php" method="POST" enctype="multipart/form-data" novalidate>
                                    <div class="row">







                                        <div class="col-xl-8 col-lg-8 col-md-12 col-sm-12 col-12 ">

                                            <label for="validationCustom01">Student Photo</label>
                                            <input type="file" class="form-control" id="prescription" name="prescription" value="Upload Prescription">

                                        </div>

                                       





                                        <div class="col-xl-6 col-lg-6 col-md-12 col-sm-12 col-12 ">
                                            <label for="validationCustom01">Student Id</label>

                                            <input type="text" class="form-control" id="validationCustom01" name="sid" required>

                                            <div class="valid-feedback">
                                                Looks good!
                                            </div>
                                        </div>

                                        <div class="col-xl-6 col-lg-6 col-md-12 col-sm-12 col-12 ">
                                            <label for="validationCustom01">Guardian Mobile</label>

                                            <input type="text" class="form-control" id="validationCustom01" name="gphone" required>

                                            <div class="valid-feedback">
                                                Looks good!
                                            </div>
                                        </div>

                                        <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12 ">
                                            <label for="validationCustom01">Student Name</label>

                                            <input type="text" class="form-control" id="validationCustom01" name="sname" required>

                                            <div class="valid-feedback">
                                                Looks good!
                                            </div>
                                        </div>

                                        <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12 ">
                                            <label for="validationCustom02">Father Name</label>
                                            <input type="text" class="form-control" id="validationCustom02" name="fname" required>
                                            <div class="valid-feedback">
                                                Looks good!
                                            </div>
                                        </div>
                                        <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12 ">
                                            <label for="validationCustom02">Mother Name</label>
                                            <input type="text" class="form-control" id="validationCustom02" name="mname" required>
                                            <div class="valid-feedback">
                                                Looks good!
                                            </div>
                                        </div>

                                        <div class="col-xl-6 col-lg-6 col-md-12 col-sm-12 col-12 ">
                                            <label for="validationCustom01">Birth Certificate Number</label>

                                            <input type="tel" class="form-control" id="validationCustom01" pattern="[0-9]{13,13}" name="sbcn" required>

                                            <div class="valid-feedback">
                                                Looks good!
                                            </div>
                                        </div>

                                        <div class="col-xl-6 col-lg-6 col-md-12 col-sm-12 col-12 ">
                                            <label for="validationCustom01">Birth Date</label>

                                            <input type="date" class="form-control" id="validationCustom01" name="sdob" required>

                                            <div class="valid-feedback">
                                                Looks good!
                                            </div>
                                        </div>


                                        <div class="col-xl-6 col-lg-6 col-md-12 col-sm-12 col-12 ">
                                            <div class="form-group">
                                                <label for="input-select">Gender</label>

                                                <?php
                                                $selected = "Male";
                                                $options = array('Male', 'Female', 'Others');
                                                echo "<select class='form-control' id='input-select' name='sgender' required>";
                                                foreach ($options as $option) {
                                                    if ($selected == $option) {
                                                        echo "<option selected='selected' value='$option'>$option</option>";
                                                    } else {
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
                                                $selected = "Islam";
                                                $options = array('Islam', 'Hindu', 'Buddhism', 'Christianity');

                                                echo "<select class='form-control' id='input-select' name='sreligion'>";
                                                foreach ($options as $option) {
                                                    if ($selected == $option) {
                                                        echo "<option selected='selected' value='$option'>$option</option>";
                                                    } else {
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
                                            <input type="number" class="form-control" id="validationCustom02" name="sroll" required>
                                            <div class="valid-feedback">
                                                Looks good!
                                            </div>
                                        </div>

                                        <div class="col-xl-6 col-lg-6 col-md-12 col-sm-12 col-12 ">
                                            <div class="form-group">
                                                <label for="input-select">Group Id</label>


                                                <?php
                                                $selected = "Common";
                                                $options = array('Common', 'Science', 'Commerce', 'Arts');

                                                echo "<select class='form-control' id='input-select' name='groupid' required>";
                                                foreach ($options as $option) {
                                                    if ($selected == $option) {
                                                        echo "<option selected='selected' value='$option'>$option</option>";
                                                    } else {
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
                                                < <?php
                                                    $selected = "One";
                                                    $options = array('One', 'Two', 'Three', 'Four', 'Five', 'Six', 'Seven', 'Eight', 'Nine', 'Ten', 'Examinee');

                                                    echo "<select class='form-control' id='input-select' name='class' required>";
                                                    foreach ($options as $option) {
                                                        if ($selected == $option) {
                                                            echo "<option selected='selected' value='$option'>$option</option>";
                                                        } else {
                                                            echo "<option value='$option'>$option</option>";
                                                        }
                                                    }
                                                    echo "</select>";
                                                    ?> </div> </div> <div class="col-xl-6 col-lg-6 col-md-12 col-sm-12 col-12 ">
                                                    <label for="validationCustom02">Section</label>
                                                    <input type="text" class="form-control" id="validationCustom02" name="section">
                                                    <div class="valid-feedback">
                                                        Looks good!
                                                    </div>
                                            </div>

                                            <div class="col-xl-6 col-lg-6 col-md-12 col-sm-12 col-12 ">
                                                <label for="validationCustom02">Email</label>
                                                <input type="email" class="form-control" id="validationCustom02" name="email">
                                                <div class="valid-feedback">
                                                    Looks good!
                                                </div>
                                            </div>
                                            <div class="col-xl-6 col-lg-6 col-md-12 col-sm-12 col-12 ">
                                                <label for="validationCustom02">Password</label>
                                                <input type="password" class="form-control" id="validationCustom02" name="pass" required>
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

                                                    $options = array('', 'PSC', 'JSC', 'SSC');

                                                    echo "<select class='form-control' id='input-select' name='exam' >";
                                                    foreach ($options as $option) {
                                                        if ($selected == $option) {
                                                            echo "<option selected='selected' value='$option'>$option</option>";
                                                        } else {
                                                            echo "<option value='$option'>$option</option>";
                                                        }
                                                    }
                                                    echo "</select>";
                                                    ?>
                                                </div>
                                            </div>

                                            <div class="col-xl-6 col-lg-6 col-md-12 col-sm-12 col-12 ">
                                                <label for="validationCustom02">Session</label>
                                                <input type="text" class="form-control" id="validationCustom02" name="session">
                                                <div class="valid-feedback">
                                                    Looks good!
                                                </div>
                                            </div>

                                            <div class="col-xl-6 col-lg-6 col-md-12 col-sm-12 col-12 ">
                                                <label for="validationCustom02">Exam Roll</label>
                                                <input type="number" class="form-control" id="validationCustom02" name="Exam_roll">
                                                <div class="valid-feedback">
                                                    Looks good!
                                                </div>
                                            </div>

                                            <div class="col-xl-6 col-lg-6 col-md-12 col-sm-12 col-12 ">
                                                <label for="validationCustom02">Registration Number</label>
                                                <input type="number" class="form-control" id="validationCustom02" name="Registration_number">
                                                <div class="valid-feedback">
                                                    Looks good!
                                                </div>
                                            </div>

                                            <div class="col-xl-6 col-lg-6 col-md-12 col-sm-12 col-12 ">
                                                <label for="validationCustom02">GPA (point)</label>
                                                <input type="text" class="form-control" id="validationCustom02" name="GPA">
                                                <div class="valid-feedback">
                                                    Looks good!
                                                </div>
                                            </div>

                                            <div class="col-xl-6 col-lg-6 col-md-12 col-sm-12 col-12 ">
                                                <div class="form-group">
                                                    <label for="input-select">Grade</label>


                                                    <?php

                                                    $options = array('', 'A+', 'A', 'A-', 'B+', 'B', 'B-', 'C+', 'C', 'D', 'F');

                                                    echo "<select class='form-control' id='input-select' name='grade' >";
                                                    foreach ($options as $option) {
                                                        if ($selected == $option) {
                                                            echo "<option selected='selected' value='$option'>$option</option>";
                                                        } else {
                                                            echo "<option value='$option'>$option</option>";
                                                        }
                                                    }
                                                    echo "</select>";
                                                    ?>
                                                </div>
                                            </div>

                                            <div class="col-xl-6 col-lg-6 col-md-12 col-sm-12 col-12 ">
                                                <label for="validationCustom02">Passing Year</label>
                                                <input type="text" class="form-control" id="validationCustom02" name="passing_year">
                                                <div class="valid-feedback">
                                                    Looks good!
                                                </div>
                                            </div>


                                            <h5 style="background-color: #ffffff; color: black;" class="card-header col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">Present Address</h5>


                                            <div class="col-xl-6 col-lg-6 col-md-12 col-sm-12 col-12 mb-12">
                                                <label for="validationCustom03">City</label>
                                                <input type="text" class="form-control" id="city" placeholder="City" name="city" required>
                                                <div class="invalid-feedback">
                                                    Please provide a valid city.
                                                </div>
                                            </div>
                                            <div class="col-xl-6 col-lg-6 col-md-12 col-sm-12 col-12 mb-12">
                                                <label for="validationCustom04">District</label>
                                                <input type="text" class="form-control" id="district" placeholder="District" name="district" required>
                                                <div class="invalid-feedback">
                                                    Please provide a valid District.
                                                </div>
                                            </div>
                                            <div class="col-xl-6 col-lg-6 col-md-12 col-sm-12 col-12 mb-12">
                                                <label for="validationCustom05">Zip</label>
                                                <input type="text" class="form-control" id="zip" placeholder="Zip" name="zip" required>
                                                <div class="invalid-feedback">
                                                    Please provide a valid zip.
                                                </div>
                                            </div>

                                            <div class="col-xl-6 col-lg-6 col-md-12 col-sm-12 col-12 mb-12">
                                                <label for="validationCustom05">Thana</label>
                                                <input type="text" class="form-control" id="thana" placeholder="Thana" name="thana" required>
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
                                                <input type="text" class="form-control" id="cityo" placeholder="City" name="city">
                                                <div class="invalid-feedback">
                                                    Please provide a valid city.
                                                </div>
                                            </div>
                                            <div class="col-xl-6 col-lg-6 col-md-12 col-sm-12 col-12 mb-12">
                                                <label for="validationCustom04">District</label>
                                                <input type="text" class="form-control" id="districto" placeholder="District" name="district">
                                                <div class="invalid-feedback">
                                                    Please provide a valid District.
                                                </div>
                                            </div>
                                            <div class="col-xl-6 col-lg-6 col-md-12 col-sm-12 col-12 mb-12">
                                                <label for="validationCustom05">Zip</label>
                                                <input type="text" class="form-control" id="zipo" placeholder="Zip" name="zip">
                                                <div class="invalid-feedback">
                                                    Please provide a valid zip.
                                                </div>
                                            </div>

                                            <div class="col-xl-6 col-lg-6 col-md-12 col-sm-12 col-12 mb-12">
                                                <label for="validationCustom05">Thana</label>
                                                <input type="text" class="form-control" id="thanao" placeholder="Thana" name="thana">
                                                <div class="invalid-feedback">
                                                    Please provide a valid Thana.
                                                </div>
                                            </div>

                                            <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12 ">
                                                <button style="margin-top: 25px; float: right;" class="btn btn-primary" type="submit">Submit form</button>
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
    <!-- Optional JavaScript -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
    <script src="assets/vendor/jquery/jquery-3.3.1.min.js"></script>
    <script src="assets/vendor/bootstrap/js/bootstrap.bundle.js"></script>
    <script src="assets/vendor/slimscroll/jquery.slimscroll.js"></script>
    <script src="assets/vendor/parsley/parsley.js"></script>
    <script src="assets/libs/js/main-js.js"></script>
    <script>
        $('#form').parsley();
    </script>
    <script>
        // Example starter JavaScript for disabling form submissions if there are invalid fields
        (function() {
            'use strict';
            window.addEventListener('load', function() {
                // Fetch all the forms we want to apply custom Bootstrap validation styles to
                var forms = document.getElementsByClassName('needs-validation');
                // Loop over them and prevent submission
                var validation = Array.prototype.filter.call(forms, function(form) {
                    form.addEventListener('submit', function(event) {
                        if (form.checkValidity() === false) {
                            event.preventDefault();
                            event.stopPropagation();
                        }
                        form.classList.add('was-validated');
                    }, false);
                });
            }, false);
        })();
    </script>
</body>

</html>