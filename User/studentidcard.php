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
  <meta name="viewport" content="width=., initial-scale=1.0">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
  <link rel="stylesheet" href="id.css">
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


  <div class="wrapper">
    <div class="container">

      <?php
      include('backconnect.php');
      $s = "SELECT * FROM student_info  WHERE studentid='$si' AND bcn='$bcno'";
      $res = $conn->query($s);
      $r = $res->fetch_assoc();
      ?>
      <img src="../User/studentimg/<?php echo $r['img'] ?>" alt="Admin" class="profile-img">
      <!-- <img src="assets/images/asad.jpeg" alt="" > -->

      <div class="content">
        <div class="sub-content">
          <h2><?php echo $sname; ?></h2>
          <span><?php echo $email; ?></span>
          <p>Student of ESCHOOL</p>
          <span class="location"><i class="fa fa-map-marker" aria-hidden="true"></i>Rajshahi, Bangladesh</span>




        </div>
        <div class="data">
          <div class="inner-data">
            <h3> Class: <?php echo $sclass; ?></h3>
            <h3> Roll: <?php echo $roll; ?></h3>
          </div>
          <div class="inner-data">
            <h3> Group: <?php echo $groupid; ?></h3>
            <h3> Section: <?php echo $section; ?></h3>
          </div>
          <h3 style="margin-top: 7px; text-align:center;"> Session: <?php echo $session; ?></h3>
          <h3 style="margin-top: 7px; text-align:center;"> <span style="color: red;">Emergency Number:</span> <?php echo $gphone; ?></h3>
        </div>
        <p style="text-align: center;color: red;">IF FOUND RETURN TO ESCHOOL</p>

      </div>
      <div class="sub-content" style="margin-top: 3px; text-align:center;">Visit Us <a href="http://www.rogerfederer.com/">www.eschool.com</a></div>
    </div>

  </div>
</body>

</html>