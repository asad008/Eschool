<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
    <meta charset="utf-8">

    <title></title>
</head>

<body>

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

    $permacityo = $_POST["city"];

    $permadistricto = $_POST["district"];

    $permazipo = $_POST["zip"];

    $permathanao = $_POST["thana"];

 $prescription = $_FILES['prescription'];
    $prescription_name = $_FILES['prescription']['name'];
    $prescription_type = $_FILES['prescription']['type'];
    $prescription_size = $_FILES['prescription']['size'];
    $prescription_path = $_FILES['prescription']['tmp_name'];


    include('backconnect.php');

   



    $folder = "../User/studentimg/";
    move_uploaded_file($prescription_path, $folder . $prescription_name);


    $sq = "SELECT * from student_info where studentid='$sid'";

    if ($res = mysqli_query($conn, $sq)) {
        $rowcount = mysqli_num_rows($res);
    }

    if ($rowcount > 0) {
        echo '<script type="text/javascript">';
        echo ' alert("Invalid Student Id")';  //not showing an alert box.
        echo '</script>';
    } else {
        $sql = "INSERT INTO student_info(studentid,mobile,img,sname,fname,mname,bcn,dob,gender,religion,roll,groupid,class,section,email,passwor,exam,sesion,examroll,regnum,gpa,grade,passingyear,city,district,zip,thana,permacity,permadistrict,permathana,permazip) 
    VALUES('$sid','$gphone','$prescription_name','$sname','$fname','$mname','$bcn','$dob','$sgender','$sreligion','$roll','$groupid','$class','$section','$email','$pass','$exam','$session','$Exam_roll','$Registration_number','$GPA','$grade','$Passing_year','$city','$district','$zip','$thana','$permacityo','$permadistricto','$permazipo','$permathanao')";

        $result = mysqli_query($conn, $sql);
    }


    include('student-info-form.php');

    ?>




</body>

</html>