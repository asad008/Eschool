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
    <!-- Bootstrap CSS -->

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
    <script src="loginscript.js"></script>
    <title>Dashboard</title>
</head>

<body>
    <!-- ============================================================== -->
    <!-- main wrapper -->
    <!-- ============================================================== -->
    <div class="dashboard-main-wrapper">

        <?php include('topmenu.php'); ?>

        <?php include('left-sidebar.php'); ?>



        <div class="dashboard-wrapper">
            <div class="container-fluid  dashboard-content">

                <div class="row">
                    <div class="col-3 col-sm-6 col-md-3 top-box">

                        <div class="info-box">
                            <span class="info-box-icon bg-info"><i class="fa fa-graduation-cap"></i></span>

                            <div class="info-box-content">
                                <span class="info-box-text">Total Students</span>
                                <span class="info-box-number">

                                    <!-- count number of students -->
                                    <?php
                                    include('backconnect.php');
                                    $student_num = "SELECT student_sl FROM student_info";
                                    $result = mysqli_query($conn, $student_num);
                                    $rowcount = mysqli_num_rows($result);
                                    echo $rowcount;
                                    ?>
                                </span>
                            </div>
                            <!-- /.info-box-content -->
                        </div>
                    </div>
                    <div class="col-3 col-sm-6 col-md-3">

                        <div class="info-box">
                            <span class="info-box-icon bg-danger elevation-1"><i class="fa fa-user-times"></i></span>

                            <div class="info-box-content">
                                <span class="info-box-text">Total candidate</span>
                                <span class="info-box-number">
                                    <?php

                                    $student_num = "SELECT student_sl FROM student_info WHERE class='Examinee'";
                                    $result = mysqli_query($conn, $student_num);
                                    $rowcount = mysqli_num_rows($result);
                                    echo $rowcount;
                                    ?>
                                </span>
                            </div>
                            <!-- /.info-box-content -->
                        </div>
                    </div>
                    <div class="col-3 col-sm-6 col-md-3">

                        <div class="info-box">
                            <span class="info-box-icon bg-success elevation-1"><i class="fas fa-user-graduate"></i></span>

                            <div class="info-box-content">
                                <span class="info-box-text">Total Teachers</span>
                                <span class="info-box-number">
                                    <?php

                                    $student_num = "SELECT * FROM teacher_info";
                                    $result = mysqli_query($conn, $student_num);
                                    $rowcount = mysqli_num_rows($result);
                                    echo $rowcount;
                                    ?>
                                </span>
                            </div>
                            <!-- /.info-box-content -->
                        </div>
                    </div>
                    <div class="col-3 col-sm-6 col-md-3">

                        <div class="info-box mb-3">
                            <span class="info-box-icon bg-warning elevation-1"><i class="fa fa-users"></i></span>

                            <div class="info-box-content">
                                <span class="info-box-text">Total Staffs</span>
                                <span class="info-box-number">
                                    12
                                </span>
                            </div>
                            <!-- /.info-box-content -->
                        </div>
                    </div>
                </div>
                <!-- line chart -->
                <div class="row">
                    <div class="col-md-8 col-sm-12 col-12">
                        <div class="card">
                            <h5 style="text-align: center;" class="card-header">Calender</h5>
                            <div class="card-body">
                                <div id='wrap'>
                                    <div id='calendar'></div>
                                    <div style='clear:both'></div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 col-sm-12 col-12">
                        <div class="card">
                            <h5 style="text-align: center;" class="card-header">Notice</h5>
                            <div class="card-body">
                                <div class="form notice">
                                    <form action="" method="POST">
                                        <!-- <input id="inputEmail2" name="email" type="email" required data-parsley-type="email" placeholder="Email" class="form-control"  value="<?php echo $_SESSION['user'] ; ?>" > -->
                                     <input id="inputPassword2" name="sub" type="text" required placeholder="Subject" class="form-control">
                                        <div style="margin-top: 15px;">
                                            <div class="form-group">
                                                
                                              

                                                <?php
                                                $selected = "Side Notice";
                                                $options = array('Side Notice', 'Top Notice');
                                               
                                                echo "<select class='form-control' id='input-select' name='pos'>";
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

                                        <textarea name="note" required class="form-control" placeholder="Enter Notice.."></textarea>
                                        <button type="submit" name="publish" class="btn btn-space btn-primary">Publish</button>
                                        <button class="btn btn-space btn-secondary">Cancel</button>
                                    </form>
                                    <?php





                                    if (isset($_POST['publish'])) {
                                        if (isset($_POST['note']) &&  $_POST["note"] != "null") {

                                            $user = $_SESSION['user'];
                                            $pos = $_POST["pos"];
                                            $sub=$_POST['sub'];
                                            
                                            $notice = $_POST["note"];

                                            include('backconnect.php');
                                            $sql = "INSERT INTO notice (username,stat,notice,headings) VALUES ('$user', '$pos', '$notice','$sub')";
                                            $result = mysqli_query($conn, $sql);
                                            echo '<script>alert("Successfull")</script>'; 
                                        }
                                    }

                                    ?>





                                </div>

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
    <!-- calender -->
    <script src='assets/vendor/full-calendar/js/moment.min.js'></script>
    <script src='assets/vendor/full-calendar/js/fullcalendar.js'></script>
    <script src='assets/vendor/full-calendar/js/jquery-ui.min.js'></script>
    <script src='assets/vendor/full-calendar/js/calendar.js'></script>

</body>

</html>