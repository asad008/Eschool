
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
    $sec = $_GET['sec'];
    $subcode = $_GET['book'];
    $query = "SELECT * FROM books WHERE class='$si' AND section='$sec' AND subjectcode='$subcode'";
    $result = mysqli_query($conn, $query);

    while ($row = mysqli_fetch_assoc($result)) {

        $class = $row['class'];

        $section = $row['section'];

        $tid = $row['teacherid'];
        $book = $row["book"];

        
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
                            <h5 style="background-color: #ffffff; color: black;" class="card-header">Assign Teacher</h5>
                            <div class="card-body">


                                <form class="needs-validation" action="backupdateassignteacher.php" method="POST" novalidate>
                                    <div class="row">

                                        <div class="col-xl-6 col-lg-6 col-md-12 col-sm-12 col-12 ">
                                            <label for="validationCustom01">class</label>

                                            <input style="pointer-events: none;cursor: default;" type="text" class="form-control"
                                             id="validationCustom01" name="class" value="<?php echo $class; ?>" required>

                                            <div class="valid-feedback">
                                                Looks good!
                                            </div>
                                        </div>

                                        <div class="col-xl-6 col-lg-6 col-md-12 col-sm-12 col-12 ">
                                            <label for="validationCustom01">Section</label>

                                            <input type="text" class="form-control" id="validationCustom01" name="section" value="<?php echo $section; ?>" required>

                                            <div class="valid-feedback">
                                                Looks good!
                                            </div>
                                        </div>

                                        <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12 ">
                                            <label for="validationCustom01">Subject</label>

                                            <input type="text" class="form-control" id="validationCustom01" name="sname" value="<?php echo $book; ?>" required>

                                            <div class="valid-feedback">
                                                Looks good!
                                            </div>
                                        </div>

                                        <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12 ">
                                            <label for="validationCustom02">Subject Code</label>
                                            <input type="text" class="form-control" id="validationCustom02" name="fname" value="<?php echo $subcode; ?>" required>
                                            <div class="valid-feedback">
                                                Looks good!
                                            </div>
                                        </div>
                                        <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12 ">
                                            <label for="validationCustom02">Teacher Id</label>
                                            <input type="text" class="form-control" id="validationCustom02" placeholder="" name="mname" value="<?php echo $tid; ?>" required>
                                            <div class="valid-feedback">
                                                Looks good!
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