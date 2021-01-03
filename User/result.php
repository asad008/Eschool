<?php
session_start();

if (!isset($_SESSION['tverified']) || $_SESSION['tverified'] !== true) {
  header("Location: teacherlogin.php");

  die();
}
?>

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


<!doctype html>
<html lang="en">


<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>Form Validation</title>
  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="bootstrap.min.css">
  <link href="assets/vendor/fonts/circular-std/style.css" rel="stylesheet">

  <link rel="stylesheet" href="style1.css">
  <link rel="stylesheet" href="style.css">
  <link rel="stylesheet" href="fontawesome-all.css">

</head>

<body>



  <div class="dashboard-main-wrapper">
    <?php include('topmenu.php'); ?>




    <div class="card">
      <h5 style="background-color: #ffffff; color: black;" class="card-header">Result</h5>
      <div class="card-body">
        <form class="needs-validation" action="backinsertmark.php" method="POST" novalidate>
          <div class="row">

            <div class="col-xl-6 col-lg-6 col-md-12 col-sm-12 col-12 ">
              <label for="validationCustom01">Student Id</label>

              <input style="pointer-events: none;cursor: default;" type="text" class="form-control" id="validationCustom01" name="sid" value="<?php echo $sid; ?>" required>

              <div class="valid-feedback">
                Looks good!
              </div>
            </div>

            <div class="col-xl-6 col-lg-6 col-md-12 col-sm-12 col-12 ">
              <label for="validationCustom01">Student Name</label>

              <input type="text" class="form-control" id="validationCustom01" name="sname" value="<?php echo $sname; ?>" required>

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

            <div class="col-xl-6 col-lg-6 col-md-12 col-sm-12 col-12 ">
              <label for="validationCustom02">Section</label>
              <input type="text" class="form-control" id="validationCustom02" name="section" value="<?php echo $section; ?>">
              <div class="valid-feedback">
                Looks good!
              </div>
            </div>
            <div class="col-xl-6 col-lg-6 col-md-12 col-sm-12 col-12">
              <label for="validationCustom02">Exam</label>
              <input type="text" class="form-control" id="validationCustom02" name="exam" required>
              <div class="valid-feedback">
                Looks good!
              </div>
            </div>

            <div class="col-xl-6 col-lg-6 col-md-12 col-sm-12 col-12 ">
              <label for="validationCustom01">101</label>

              <input type="tel" class="form-control" id="validationCustom01" name="101" required>

              <div class="valid-feedback">
                Looks good!
              </div>
            </div>
            <div class="col-xl-6 col-lg-6 col-md-12 col-sm-12 col-12 ">
              <label for="validationCustom01">107</label>

              <input type="tel" class="form-control" id="validationCustom01" name="107" required>

              <div class="valid-feedback">
                Looks good!
              </div>
            </div>
            <div class="col-xl-6 col-lg-6 col-md-12 col-sm-12 col-12 ">
              <label for="validationCustom01">109</label>

              <input type="tel" class="form-control" id="validationCustom01" name="109" required>

              <div class="valid-feedback">
                Looks good!
              </div>
            </div>
            <div class="col-xl-6 col-lg-6 col-md-12 col-sm-12 col-12 ">
              <label for="validationCustom01">154</label>

              <input type="tel" class="form-control" id="validationCustom01" name="154" required>

              <div class="valid-feedback">
                Looks good!
              </div>
            </div>


            <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12 ">
              <button style="margin-top: 25px; float: right;" class="btn btn-primary" type="submit">Submit form</button>
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