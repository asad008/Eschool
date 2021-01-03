<?php
session_start();

if (!isset($_SESSION['sverified']) || $_SESSION['sverified'] !== true) {
    header("Location: studentlogin.php");

    die();
}
?>


<?php
                include('backconnect.php');
                $adname = "SELECT * FROM student_info WHERE studentid='$_SESSION[user]'AND passwor='$_SESSION[pass]'";
                $resultoo = mysqli_query($conn, $adname);
                $row = mysqli_fetch_assoc($resultoo);
                $usname = $row['sname'];
                $id = $row['studentid'];
                $roll = $row['roll'];
                $group = $row['groupid'];
                $class = $row['class'];
                $Section = $row['section'];
                $mname = $row['mname'];
                $fname = $row['fname'];
                $dob = $row['dob'];
                $gender = $row['gender'];
                $religion = $row['religion'];
                $phone = $row['mobile'];
                $pcity = $row['permacity'];
                $pthana = $row['permathana'];
                $pdistrict = $row['permadistrict'];
                $email = $row['email'];




                ?>







<!-- 
<link rel="stylesheet" href="Admin/assets/libs/css/profile.css"> -->
<link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.0/css/bootstrap.min.css" rel="stylesheet">
<!-- Material Design Bootstrap -->
<link href="https://cdnjs.cloudflare.com/ajax/libs/mdbootstrap/4.19.1/css/mdb.min.css" rel="stylesheet">
<script src="https://kit.fontawesome.com/e8989d062c.js" crossorigin="anonymous"></script>



<div class="container">

    <div class="main-body">

        <div class="row gutters-sm">
            <?php include('topmenu.php'); ?>
        </div>

        <div class="row gutters-sm">
            <div class="col-md-4 mb-3">
                <div class="card" style="margin-top: 25%;">
                    <div class="card-body">
                        <div class="d-flex flex-column align-items-center text-center">
                        <?php
                        include('backconnect.php');
                            $s="SELECT * FROM student_info WHERE studentid='$_SESSION[user]'AND passwor='$_SESSION[pass]'";
                            $res=$conn->query($s);
                            $r=$res->fetch_assoc();
                        ?>
                            <img src="studentimg/<?php echo $r['img'] ?>" alt="Admin" class="rounded-circle" width="150" height="150">
                            <div class="mt-3">
                                <h4> <?php
                                        include('backconnect.php');
                                        $adname = "SELECT sname FROM student_info WHERE studentid='$_SESSION[user]'AND passwor='$_SESSION[pass]'";
                                        $resultoo = mysqli_query($conn, $adname);
                                        $row = mysqli_fetch_assoc($resultoo);
                                        $usname = $row['sname'];
                                        echo $usname;
                                        ?></h4>
                                <p class="text-secondary mb-1">
                                    <?php

                                    echo $_SESSION['user'];
                                    ?>
                                </p>
                                <p class="text-muted font-size-sm">
                                    <i class="fas fa-map-marker-alt"></i>
                                    <?php
                                    include('backconnect.php');
                                    $adname = "SELECT * FROM student_info WHERE studentid='$_SESSION[user]'AND passwor='$_SESSION[pass]'";
                                    $resultoo = mysqli_query($conn, $adname);
                                    $row = mysqli_fetch_assoc($resultoo);
                                    $city = $row['city'];
                                    $thana = $row['thana'];
                                    $district = $row['district'];
                                    echo " " . $city . "," . $thana . "," . $district;
                                    ?></p>
                                <!-- <button class="btn btn-primary">Follow</button>
                                <button class="btn btn-outline-primary">Message</button> -->
                            </div>
                        </div>
                    </div>
                </div>













                <div class="card mt-3">

                    <ul class="list-group list-group-flush">
                        <li class="list-group-item d-flex justify-content-between align-items-left ">
                            <i class="fas fa-money-bill"></i>
                            <a href="payment.php">
                                <h6>Payment History</h6>
                            </a>
                        </li>
                        <li class="list-group-item d-flex justify-content-between align-items-left ">
                            <i class="fas fa-pencil-alt"></i>
                            <a href="payment.php">
                                <h6>Registration Details</h6>
                            </a>

                        </li>
                        <li class="list-group-item d-flex justify-content-between align-items-left ">
                            <i class="fas fa-folder-open"></i>
                            <a href="studentmarks.php">
                                <h6>Result</h6>
                            </a>

                        </li>
                        <li class="list-group-item d-flex justify-content-between align-items-left ">
                            <i class="far fa-newspaper"></i>
                            <a href="#">
                                <h6>Query/Application</h6>
                            </a>

                        </li>
                        <li class="list-group-item d-flex justify-content-between align-items-left ">
                            <i class="fas fa-chart-bar"></i>
                            <a href="#">
                                <h6>Weaver</h6>
                            </a>

                        </li>
                    </ul>
                </div>







            </div>








            <div class="col-md-8">

                <div style="margin-top: 12%;">

                </div>

                <?php
                include('backconnect.php');
                $adname = "SELECT * FROM student_info WHERE studentid='$_SESSION[user]'AND passwor='$_SESSION[pass]'";
                $resultoo = mysqli_query($conn, $adname);
                $row = mysqli_fetch_assoc($resultoo);
                $usname = $row['sname'];
                $id = $row['studentid'];
                $roll = $row['roll'];
                $group = $row['groupid'];
                $class = $row['class'];
                $Section = $row['section'];
                $mname = $row['mname'];
                $fname = $row['fname'];
                $dob = $row['dob'];
                $gender = $row['gender'];
                $religion = $row['religion'];
                $phone = $row['mobile'];
                $pcity = $row['permacity'];
                $pthana = $row['permathana'];
                $pdistrict = $row['permadistrict'];
                $email = $row['email'];




                ?>

                <h4 style="font-weight: bold;color:#B0B0B0;"><?php echo $usname; ?></h4>
                <h6 style="font-weight: bold;color:#B0B0B0;"> Stdent Id: <?php echo $id; ?> </h6>

                <div class="card mb-3">
                    <h5 class="card-header">Academic Info</h5>
                    <div class="card-body">
                        <div class="row">
                            <div class="col-sm-3">
                                <h6 class="mb-0">Group</h6>
                            </div>
                            <div class="col-sm-9 text-secondary">
                                <?php
                                echo $group;
                                ?>
                            </div>
                        </div>
                        <hr>
                        <div class="row">
                            <div class="col-sm-3">
                                <h6 class="mb-0">Class</h6>
                            </div>
                            <div class="col-sm-9 text-secondary">
                                <?php

                                echo $class;
                                ?>
                            </div>
                        </div>
                        <hr>
                        <div class="row">
                            <div class="col-sm-3">
                                <h6 class="mb-0">Roll</h6>
                            </div>
                            <div class="col-sm-9 text-secondary">
                                <?php

                                echo $roll;
                                ?>
                            </div>
                        </div>
                        <hr>

                        <div class="row">
                            <div class="col-sm-3">
                                <h6 class="mb-0">Section</h6>
                            </div>
                            <div class="col-sm-9 text-secondary">
                                <?php echo $Section; ?>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="card mb-3">
                    <h5 class="card-header">Personal Info</h5>
                    <div class="card-body">
                        <div class="row">
                            <div class="col-sm-3">
                                <h6 class="mb-0">Mother Name</h6>
                            </div>
                            <div class="col-sm-9 text-secondary">
                                <?php
                                echo $mname;
                                ?>
                            </div>
                        </div>
                        <hr>
                        <div class="row">
                            <div class="col-sm-3">
                                <h6 class="mb-0">Father Name</h6>
                            </div>
                            <div class="col-sm-9 text-secondary">
                                <?php

                                echo $fname;
                                ?>
                            </div>
                        </div>
                        <hr>
                        <div class="row">
                            <div class="col-sm-3">
                                <h6 class="mb-0">Date of Birth</h6>
                            </div>
                            <div class="col-sm-9 text-secondary">
                                <?php

                                echo $dob;
                                ?>
                            </div>
                        </div>
                        <hr>

                        <div class="row">
                            <div class="col-sm-3">
                                <h6 class="mb-0">Gender</h6>
                            </div>
                            <div class="col-sm-9 text-secondary">
                                <?php echo $gender; ?>
                            </div>
                        </div>
                        <hr>
                        <div class="row">
                            <div class="col-sm-3">
                                <h6 class="mb-0">Religion</h6>
                            </div>
                            <div class="col-sm-9 text-secondary">
                                <?php echo $religion; ?>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="card mb-3">
                    <h5 class="card-header">Contact Info</h5>
                    <div class="card-body">
                        <div class="row">
                            <div class="col-sm-3">
                                <h6 class="mb-0">Phone</h6>
                            </div>
                            <div class="col-sm-9 text-secondary">
                                <?php
                                echo $phone;
                                ?>
                            </div>
                        </div>
                        <hr>
                        <div class="row">
                            <div class="col-sm-3">
                                <h6 class="mb-0">Email</h6>
                            </div>
                            <div class="col-sm-9 text-secondary">
                                <?php

                                echo $email;
                                ?>
                            </div>
                        </div>
                        <hr>
                        <div class="row">
                            <div class="col-sm-3">
                                <h6 class="mb-0">Date of Birth</h6>
                            </div>
                            <div class="col-sm-9 text-secondary">
                                <?php

                                echo $dob;
                                ?>
                            </div>
                        </div>
                        <hr>

                        <div class="row">
                            <div class="col-sm-3">
                                <h6 class="mb-0">Present Address</h6>
                            </div>
                            <div class="col-sm-9 text-secondary">
                                <?php echo $city . "," . $thana . "," . $district; ?>
                            </div>
                        </div>
                        <hr>
                        <div class="row">
                            <div class="col-sm-3">
                                <h6 class="mb-0">Permanent Address</h6>
                            </div>
                            <div class="col-sm-9 text-secondary">
                                <?php echo $pcity . "," . $pthana . "," . $pdistrict; ?>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
</div>

<?php include("footer.php"); ?>