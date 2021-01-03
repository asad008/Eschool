<?php



    $sid = $_POST['sid'];

    $gphone = $_POST["gphone"];

    $sname = $_POST["sname"];

    $fname = $_POST["fname"];

    $mname = $_POST["mname"];

    $bcn = $_POST["sbcn"];

    $dob = $_POST["sdob"];

    $sgender = $_POST["sgender"];

    $sreligion = $_POST["sreligion"];

    $roll = $_POST["sroll"];

    $groupid = $_POST["groupid"];

    $class = $_POST["class"];

    $section = $_POST["section"];


    $email = $_POST["email"];


    $pass = $_POST["pass"];

    $exam = $_POST["exam"];

    $session = $_POST["session"];

    $Exam_roll = $_POST["Exam_roll"];

    $Registration_number = $_POST["Registration_number"];

    $GPA = $_POST["GPA"];

    $grade = $_POST["grade"];

    $Passing_year = $_POST["passing_year"];

    $city = $_POST["city"];

    $district = $_POST["district"];

    $zip = $_POST["zip"];

    $thana = $_POST["thana"];

    $permacity = $_POST["city"];

    $permadistrict = $_POST["district"];

    $permazip = $_POST["zip"];

    $permathana = $_POST["thana"];


    include('backconnect.php');

    $sql = "UPDATE student_info SET mobile='$gphone',sname='$sname',fname='$fname',mname='$mname',bcn='$bcn',dob='$dob',gender='$sgender',religion='$sreligion',roll='$roll',groupid='$groupid',class='$class',section='$section',email='$email',passwor='$pass',exam='$exam',sesion='$session',examroll='$Exam_roll',regnum='$Registration_number',gpa='$GPA',grade='$grade',passingyear='$Passing_year',city='$city',district='$district',zip='$zip',thana='$thana',permacity='$permacity',permadistrict='$permadistrict',permathana='$permathana',permazip='$permazip' WHERE studentid='$sid'";

    $result = mysqli_query($conn, $sql);
    // echo $sid;

     include('students_info.php');

    ?>