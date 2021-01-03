

<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
    <meta charset="utf-8">

    <title></title>
</head>

<body>

    <?php

    $tid = $_POST['tid'];

    $cphone = $_POST["cphone"];

    $tname = $_POST["tname"];

    $fname = $_POST["fname"];

    $mname = $_POST["mname"];

    $tbcn = $_POST["tbcn"];

    $tdob = $_POST["tdob"];

    $tgender = $_POST["tgender"];

    $treligion = $_POST["treligion"];



    $email = $_POST["email"];


    $pass = $_POST["pass"];

    $designation = $_POST["designation"];

    $dept = $_POST["dept"];

    $faculty = $_POST["faculty"];



    $city = $_POST["city"];

    $district = $_POST["district"];

    $zip = $_POST["zip"];

    $thana = $_POST["thana"];

    $permacity = $_POST["city"];

    $permadistrict = $_POST["district"];

    $permazip = $_POST["zip"];

    $permathana = $_POST["thana"];

    $prescription = $_FILES['prescription'];
    $prescription_name = $_FILES['prescription']['name'];
    $prescription_type = $_FILES['prescription']['type'];
    $prescription_size = $_FILES['prescription']['size'];
    $prescription_path = $_FILES['prescription']['tmp_name'];




    include('backconnect.php');

    $folder = "../User/teacherimg/";
    move_uploaded_file($prescription_path, $folder . $prescription_name);






    $sq = "SELECT * from teacher_info where teacherid='$tid'";

    if ($res = mysqli_query($conn, $sq)) {
        $rowcount = mysqli_num_rows($res);
    }

    if ($rowcount > 0) {
        echo '<script type="text/javascript">';
        echo ' alert("Invalid Teacher Id")';  //not showing an alert box.
        echo '</script>';
    } else {

        $sql = "INSERT INTO teacher_info(teacherid, designation, mobile, tname,img, fname, mname, bcn, dob, gender, religion, dept, faculty, email, passwor, city, district, zip, thana, permacity, permadistrict, permathana, permazip) 
    VALUES('$tid','$designation','$cphone','$tname','$prescription_name','$fname','$mname','$tbcn','$tdob','$tgender','$treligion','$dept','$faculty','$email','$pass','$city','$district','$zip','$thana','$permacity','$permadistrict','$permazip','$permathana')";

        $result = mysqli_query($conn, $sql);
    }
    include('teacher-info-form.php');

    ?>




</body>

</html>