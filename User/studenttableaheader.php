<!-- <div class="card">

    <div class="card-header">
        <h4 style="pointer-events: none;cursor: default; text-align: left;" class="btn" notclickable> Add Student </h5>
            <button style="float: right;" class="btn btn-primary" type="submit"> <a style="color: #ffffff; text-decoration:none;" href="student-info-form.php">Add Student</a> </button>

    </div>
</div> -->



<?php




include('backconnect.php');
$adname = "SELECT * FROM teacher_info WHERE email='$_SESSION[user]'AND passwor='$_SESSION[pass]'";
$resultoo = mysqli_query($conn, $adname);
$row = mysqli_fetch_assoc($resultoo);
$tid = $row['teacherid'];



// echo $_SESSION['user'] . $_SESSION['pass'] .$tid;








?>
<div class="card">

    <div class="card-header">


        <div class="find" method="post">
            <!-- <div class="form col-6 col-sm-6 col-md-3" style="float: right;">
                        <input class="form-control sear" id="search" name="search" type="text" placeholder="Search" aria-label="Search">
                        <input type="submit" name="submit3" class="btn ser" id="searchbtn" > -->
            <?php


            //  $sql = "SELECT * FROM student_info";
            // if (isset($_GET['search'])) {
            //     $name = mysqli_real_escape_string($conn, htmlspecialchars($_GET['search']));
            //     $sql = "SELECT * FROM student_info WHERE sname ='$name'";
            // }

            ?>



            <form action="" method="GET">
                <div class="form col-6 col-sm-6 col-md-4" style="float: right;">
                    <input type="submit" value="Search" name="btn" class="btn btn-sm btn-primary" style="float: right;">
                    <input type="text" class="form-control sear" placeholder="Search" name="search" required>


                </div>

            </form>





        </div>

        <form method="post">
            <div class="row">

                <div class="col-xl-3 col-lg-3 col-md-12 col-sm-12 col-12 ">

                    <?php
                    $selected = "All Class";
                    $options = array('All Class', 'One', 'Two', 'Three', 'Four', 'Five', 'Six', 'Seven', 'Eight', 'Nine', 'Ten', 'Examinee');

                    echo "<select class='form-control' id='input-select' name='clas' required>";
                    foreach ($options as $option) {
                        if ($selected == $option) {
                            echo "<option selected='selected' value='$option'>$option</option>";
                        } else {
                            echo "<option value='$option'>$option</option>";
                            // $cla= $option;
                            // echo $cla.'Asad iss here';
                        }
                    }
                    echo "</select>";
                    ?>
                </div>

                <div class="col-xl-3 col-lg-3 col-md-12 col-sm-12 col-12 ">
                    <?php
                    $selected = "Select Section";
                    $options = array('All Section', 'A', 'B', 'C', 'D');

                    echo "<select class='form-control' id='input-select' name='group' required>";
                    foreach ($options as $option) {
                        if ($selected == $option) {
                            echo "<option selected='selected' value='$option'>$option</option>";
                        } else {
                            echo "<option value='$option'>$option</option>";
                            $grp = $option;
                        }
                    }
                    echo "</select>";
                    ?>
                </div>

                <?php


                // $cla = $_POST["clas"];

                echo "<input type='submit' class='btn'value='   >>   '  name='Submit1' style='font-weight: bold; border:none; background-color:#0069D9;color: white; margin:2px;padding:10px;' >";
                if (isset($_POST["Submit1"])) {

                    if (isset($_POST["clas"]) && $_POST["clas"] != "All Class") {

                        if (isset($_POST["group"]) && $_POST["group"] != "All Section") {

                            // if (isset($_GET['search']) && $_GET['search'] != "null") {
                               
                                $sql = "SELECT * FROM student_info,books WHERE books.subjectcode=marks.subjectcode AND student_info.class=(books.class) AND books.class='$_POST[clas]' 
                                AND books.section='$_POST[group]' AND student_info.section=(books.section) AND books.teacherid='$tid'";
                            // } elseif (isset($_GET['search']) && $_GET['search'] === "null") {
                            //     $name = mysqli_real_escape_string($conn, htmlspecialchars($_GET['search']));
                            //     $sql = "SELECT * FROM student_info,books  WHERE  student_info.class=(books.class) AND books.class='$_POST[clas]' 
                            //     AND books.section='$_POST[group]' AND student_info.section=(books.section) AND books.teacherid='$tid'";
                            // } else {
                            //     $sql = "SELECT * FROM student_info,books  WHERE student_info.class=(books.class) AND books.class='$_POST[clas]' 
                            //     AND student_info.section=(books.section) AND books.teacherid='$tid'";
                            // }
                        } else if (isset($_POST["group"]) && $_POST["group"] === "All Section") {
                            // if (isset($_GET['search']) && $_GET['search'] != "null") {
                               
                                $sql = "SELECT * FROM student_info,books WHERE student_info.class=(books.class) AND books.class='$_POST[clas]' AND student_info.section=(books.section) 
                                AND books.teacherid='$tid'";
                            // } elseif (isset($_GET['search']) && $_GET['search'] === "null") {
                            //     $name = mysqli_real_escape_string($conn, htmlspecialchars($_GET['search']));
                            //     $sql = "SELECT * FROM student_info,books  WHERE student_info.class=(books.class) AND books.class='$_POST[clas]' 
                            //      AND books.teacherid='$tid'";
                            // } else {
                            //     $sql = "SELECT * FROM student_info,books  WHERE student_info.class=(books.class) AND books.class='$_POST[clas]' 
                            //       AND books.teacherid='$tid'";
                            // }
                        }
                    } else if (isset($_POST["clas"]) && $_POST["clas"] === "All Class") {

                        // if (isset($_POST["group"]) && $_POST["group"] === "All Groups") {


                        //     if (isset($_GET['search']) && $_GET['search'] != "null") {
                        //         $name = mysqli_real_escape_string($conn, htmlspecialchars($_GET['search']));
                        //         $sql = "SELECT * FROM student_info WHERE sname LIKE '%$name%'";
                        //     } elseif (isset($_GET['search']) && $_GET['search'] === "null") {
                        //         $name = mysqli_real_escape_string($conn, htmlspecialchars($_GET['search']));
                        //         $sql = "SELECT * FROM student_info";
                        //     } else {
                        //         $sql = "SELECT * FROM student_info";
                        //     }
                        // } else {
                        //     if (isset($_POST["group"]) && $_POST["group"] != "All Groups") {

                        //         if (isset($_GET['search']) && $_GET['search'] != "null") {
                        //             $name = mysqli_real_escape_string($conn, htmlspecialchars($_GET['search']));
                        //             $sql = "SELECT * FROM student_info WHERE groupid= '$_POST[group]' AND sname LIKE '%$name%'";
                        //         } elseif (isset($_GET['search']) && $_GET['search'] === "null") {
                        //             $name = mysqli_real_escape_string($conn, htmlspecialchars($_GET['search']));
                        //             $sql = "SELECT * FROM student_info WHERE groupid= '$_POST[group]' ";
                        //         } else {
                        //             $sql = "SELECT * FROM student_info WHERE  groupid= '$_POST[group]' ";
                        //         }
                        //     }
                        // }

                        if (isset($_POST["group"]) && $_POST["group"] != "All Section") {

                            // if (isset($_GET['search']) && $_GET['search'] != "null") {
                                $name = mysqli_real_escape_string($conn, htmlspecialchars($_GET['search']));
                                $sql = "SELECT * FROM student_info,books WHERE student_info.class=(books.class) 
                                AND books.section='$_POST[group]' AND student_info.section=(books.section) AND books.teacherid='$tid'";
                            // } elseif (isset($_GET['search']) && $_GET['search'] === "null") {
                            //     $name = mysqli_real_escape_string($conn, htmlspecialchars($_GET['search']));
                            //     $sql = "SELECT * FROM student_info,books  WHERE  student_info.class=(books.class) AND books.class='$_POST[clas]' 
                            //     AND books.section='$_POST[group]' AND student_info.section=(books.section) AND books.teacherid='$tid'";
                            // } else {
                            //     $sql = "SELECT * FROM student_info,books  WHERE student_info.class=(books.class) AND books.class='$_POST[clas]' 
                            //     AND student_info.section=(books.section) AND books.teacherid='$tid'";
                            // }
                        } else if (isset($_POST["group"]) && $_POST["group"] === "All Section") {
                           
                                $sql = "SELECT * FROM student_info,books WHERE student_info.class=(books.class) AND books.class=student_info.class AND books.section=student_info.section
                                 AND books.teacherid='$tid'";
                            //  elseif (empty($_GET['search']) && $_GET['search'] === "") {
                            //     $name = mysqli_real_escape_string($conn, htmlspecialchars($_GET['search']));
                            //     $sql = "SELECT * FROM student_info,books  WHERE  student_info.class=(books.class) AND books.teacherid='$tid'";
                            // } else {
                            //     $sql = "SELECT * FROM student_info,books  WHERE  student_info.class=(books.class) AND books.teacherid='$tid'";
                            // }
                        }
                    }
                } else {


                    if (isset($_GET['search']) && $_GET['search'] != "null") {
                        $name = mysqli_real_escape_string($conn, htmlspecialchars($_GET['search']));


                        $sql = "SELECT * FROM student_info,books  WHERE  sname LIKE '%$name%' AND student_info.class=(books.class) AND student_info.section=(books.section) AND books.teacherid='$tid'";
                    // } elseif (isset($_GET['search']) && $_GET['search'] === "null") {
                    //     $name = mysqli_real_escape_string($conn, htmlspecialchars($_GET['search']));

                    //     $sql = "SELECT * FROM student_info,books  WHERE student_info.class=(books.class) AND books.teacherid='$tid'";
                    // } else {

                    //     $sql = "SELECT * From student_info,books WHERE student_info.class=(books.class) AND books.teacherid='$tid'";
                     }else{

                        $sql = "SELECT * FROM student_info,books WHERE student_info.class=(books.class) AND books.class=student_info.class AND books.section=student_info.section
                        AND books.teacherid='$tid'";
                     }
                }

                ?>

        </form>


    </div>



</div>