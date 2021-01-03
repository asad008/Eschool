<?php
// session_start();

// if (!isset($_SESSION['verified']) || $_SESSION['verified'] !== true) {
//   header("Location: index.php");

//   die();
// }

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

  $query = "SELECT * FROM teacher_info WHERE teacherid='$si' AND bcn='$bcno'";
  $result = mysqli_query($conn, $query);

  while ($row = mysqli_fetch_assoc($result)) {

    $sid = $row['teacherid'];

    $gphone = $row['mobile'];

    $tname = $row['tname'];

    $fname = $row['fname'];

    $mname = $row['mname'];
    $des = $row['designation'];
    $bcn = $row['bcn'];
    $dept = $row['dept'];
    $dob = $row['dob'];

    $sgender = $row['gender'];

    $jdate = $row['joiningdate'];
    $sreligion = $row['religion'];



    $email = $row['email'];


    $pass = $row['passwor'];



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
      $s = "SELECT * FROM teacher_info WHERE teacherid='$si' AND bcn='$bcno'";
      $res = $conn->query($s);
      $r = $res->fetch_assoc();
      ?>
      <img src="../User/teacherimg/<?php echo $r['img'] ?>" alt="Admin" class="profile-img">
      <!-- <img src="assets/images/asad.jpeg" alt=""  width="150" height="150"> -->

      <div class="content">
        <div class="sub-content">
          <h2><?php echo $tname; ?></h2>
          <span><?php echo $email; ?></span>
          <span class="location"><i class="fa fa-map-marker" aria-hidden="true"></i>Rajshahi, Bangladesh</span>
          <p><?php echo $des; ?> of ESCHOOL</p>
          <h3> Dept. of  <?php echo $dept; ?></h3>
          




        </div>
        <div class="data">
          <div >
          <h3> Teacher Id: <?php echo $sid; ?></h3>
            <h3> Joining Date: <?php echo $jdate; ?></h3>
            <h3> Date of Birth: <?php echo $dob; ?></h3>
          </div>
         
        </div>
        <h3 style="margin-top: 7px; text-align:center;"> <span style="color: red;">Emergency Number:</span> <?php echo $gphone; ?></h3>
        <p style="text-align: center;color: red;">IF FOUND RETURN TO ESCHOOL</p>

      </div>
      <div class="sub-content" style="margin-top: 1px; text-align:center;">Visit Us <a href="http://www.rogerfederer.com/">www.eschool.com</a></div>
    </div>

  </div>
</body>

</html>