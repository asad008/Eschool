<?php
session_start();

if (!isset($_SESSION['sverified']) || $_SESSION['sverified'] !== true) {
  header("Location: studentlogin.php");

  die();
}
?>


<?php
include('backconnect.php');

$sid = $_SESSION["user"];
$b101=" Doesn't Publish Yet";
$b107=" Doesn't Publish Yet";
$b109=" Doesn't Publish Yet";
$b154=" Doesn't Publish Yet";
$exam= date("M Y");

$query = "SELECT * FROM marks WHERE  marks.studentid='$_SESSION[user]'";
$result = mysqli_query($conn, $query);


while ($row = mysqli_fetch_assoc($result)) {

  $sid = $_SESSION["user"];
  $b101=$row['b101'];
  $b107=$row['b107'];
  $b109=$row['b109'];
  $b154=$row['b154'];
  $exam=$row['exam'];

}


?>


<!doctype html>
<html lang="en">


<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>Result</title>
  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="bootstrap.min.css">
  <link href="assets/vendor/fonts/circular-std/style.css" rel="stylesheet">

  <link rel="stylesheet" href="style1.css">
  <link rel="stylesheet" href="style.css">
  <link rel="stylesheet" href="fontawesome-all.css">

</head>

<body>



  <div class="dashboard-main-wrapper">
    <?php
     include('topmenu.php'); 
    ?>




    <div class="card">
      <h5 style="background-color: #ffffff; color: black;" class="card-header">Result</h5>
      <div class="card-body">
        <form class="needs-validation" action="#" method="POST" novalidate>
          <div class="row">

            <div class="col-xl-6 col-lg-6 col-md-12 col-sm-12 col-12 ">
              <label for="validationCustom01">Student Id</label>

              <input style="pointer-events: none;cursor: default;" style="pointer-events: none;cursor: default;" type="text" class="form-control" id="validationCustom01" name="sid" value="<?php echo $sid; ?>" required>

              <div class="valid-feedback">
                Looks good!
              </div>
            </div>

            
            <div class="col-xl-6 col-lg-6 col-md-12 col-sm-12 col-12">
              <label for="validationCustom02">Exam</label>
              <input style="pointer-events: none;cursor: default;" type="text" class="form-control" id="validationCustom02" name="exam" value="<?php echo $exam; ?>">
              <div class="valid-feedback">
                Looks good!
              </div>
            </div>

            <div class="col-xl-6 col-lg-6 col-md-12 col-sm-12 col-12 ">
              <label for="validationCustom01">101</label>

              <input style="pointer-events: none;cursor: default;" type="tel" class="form-control" id="validationCustom01" name="101" value="<?php echo $b101; ?>">

              <div class="valid-feedback">
                Looks good!
              </div>
            </div>
            <div class="col-xl-6 col-lg-6 col-md-12 col-sm-12 col-12 ">
              <label for="validationCustom01">107</label>

              <input style="pointer-events: none;cursor: default;" type="tel" class="form-control" id="validationCustom01" name="107"  value="<?php echo $b107; ?>">

              <div class="valid-feedback">
                Looks good!
              </div>
            </div>
            <div class="col-xl-6 col-lg-6 col-md-12 col-sm-12 col-12 ">
              <label for="validationCustom01">109</label>

              <input style="pointer-events: none;cursor: default;" type="tel" class="form-control" id="validationCustom01" name="109"  value="<?php echo $b109; ?>">

              <div class="valid-feedback">
                Looks good!
              </div>
            </div>
            <div class="col-xl-6 col-lg-6 col-md-12 col-sm-12 col-12 ">
              <label for="validationCustom01">154</label>

              <input style="pointer-events: none;cursor: default;" type="tel" class="form-control" id="validationCustom01" name="154"  value="<?php echo $b154; ?>">

              <div class="valid-feedback">
                Looks good!
              </div>
            </div>

          </div>
        </form>



      </div>
      <!-- <p class="card-footer" style="color: red;">Read More</p> -->


    </div>
  </div>
  <!-- same as present Address -->




  <!-- Optional JavaScript -->
  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>


</body>

</html>