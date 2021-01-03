<div class="card">

            <div class="card-header">
                <h4 style="pointer-events: none;cursor: default; text-align: left;" class="btn" notclickable> Add Student </h5>
                    <button style="float: right;" class="btn btn-primary" type="submit"> <a style="color: #ffffff; text-decoration:none;" href="student-info-form.php">Add Student</a> </button>

            </div>
        </div>
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
                            $selected = "Select Group";
                            $options = array('All Groups', 'Common', 'Science', 'Commerce', 'Arts');

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

                        echo "<input type='submit' class='btn'value='   >>   '  name='Submit1' style='font-weight: bold; border:none; background-color:#0069D9;color: white;' >";
                        if (isset($_POST["Submit1"])) {

                            if (isset($_POST["clas"]) && $_POST["clas"] != "All Class") {

                                if (isset($_POST["group"]) && $_POST["group"] != "All Groups") {

                                    if (isset($_GET['search']) && $_GET['search'] != "null") {
                                        $name = mysqli_real_escape_string($conn, htmlspecialchars($_GET['search']));
                                        $sql = "SELECT * FROM student_info WHERE class='$_POST[clas]' AND groupid= '$_POST[group]' AND sname LIKE '%$name%'";
                                    } elseif (isset($_GET['search']) && $_GET['search'] === "null") {
                                        $name = mysqli_real_escape_string($conn, htmlspecialchars($_GET['search']));
                                        $sql = "SELECT * FROM student_info WHERE class='$_POST[clas]' AND groupid= '$_POST[group]'";
                                    } else {
                                        $sql = "SELECT * FROM student_info WHERE class='$_POST[clas]' AND groupid= '$_POST[group]' ";
                                    }
                                } else {
                                    if (isset($_POST["group"]) && $_POST["group"] === "All Groups") {
                                        if (isset($_GET['search']) && $_GET['search'] != "null") {
                                            $name = mysqli_real_escape_string($conn, htmlspecialchars($_GET['search']));
                                            $sql = "SELECT * FROM student_info WHERE class='$_POST[clas]' AND sname LIKE '%$name%'";
                                        } elseif (isset($_GET['search']) && $_GET['search'] === "null") {
                                            $name = mysqli_real_escape_string($conn, htmlspecialchars($_GET['search']));
                                            $sql = "SELECT * FROM student_info WHERE class='$_POST[clas]' ";
                                        } else {
                                            $sql = "SELECT * FROM student_info WHERE class='$_POST[clas]' ";
                                        }
                                    }
                                }
                            } else {
                                if (isset($_POST["clas"]) && $_POST["clas"] === "All Class") {

                                    if (isset($_POST["group"]) && $_POST["group"] === "All Groups") {


                                        if (isset($_GET['search']) && $_GET['search'] != "null") {
                                            $name = mysqli_real_escape_string($conn, htmlspecialchars($_GET['search']));
                                            $sql = "SELECT * FROM student_info WHERE sname LIKE '%$name%'";
                                        } elseif (isset($_GET['search']) && $_GET['search'] === "null") {
                                            $name = mysqli_real_escape_string($conn, htmlspecialchars($_GET['search']));
                                            $sql = "SELECT * FROM student_info";
                                        } else {
                                            $sql = "SELECT * FROM student_info";
                                        }
                                    } else {
                                        if (isset($_POST["group"]) && $_POST["group"] != "All Groups") {

                                            if (isset($_GET['search']) && $_GET['search'] != "null") {
                                                $name = mysqli_real_escape_string($conn, htmlspecialchars($_GET['search']));
                                                $sql = "SELECT * FROM student_info WHERE groupid= '$_POST[group]' AND sname LIKE '%$name%'";
                                            } elseif (isset($_GET['search']) && $_GET['search'] === "null") {
                                                $name = mysqli_real_escape_string($conn, htmlspecialchars($_GET['search']));
                                                $sql = "SELECT * FROM student_info WHERE groupid= '$_POST[group]' ";
                                            } else {
                                                $sql = "SELECT * FROM student_info WHERE  groupid= '$_POST[group]' ";
                                            }
                                        }
                                    }
                                }
                            }
                        } else {

                            if (isset($_GET['search']) && $_GET['search'] != "null") {
                                $name = mysqli_real_escape_string($conn, htmlspecialchars($_GET['search']));
                                $sql = "SELECT * FROM student_info WHERE  sname LIKE '%$name%'";
                            } elseif (isset($_GET['search']) && $_GET['search'] === "null") {
                                $name = mysqli_real_escape_string($conn, htmlspecialchars($_GET['search']));
                                $sql = "SELECT * FROM student_info ";
                            } else {
                                $sql = "SELECT * FROM student_info";
                            }
                        }

                        ?>

                </form>


            </div>



        </div>