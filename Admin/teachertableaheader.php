<div class="card">

    <div class="card-header">
        <h4 style="pointer-events: none;cursor: default; text-align: left;" class="btn" notclickable> Add Teacher </h5>
            <button style="float: right;" class="btn btn-primary" type="submit"> <a style="color: #ffffff; text-decoration:none;" href="teacher-info-form.php">Add Teacher</a> </button>

    </div>
</div>
<div class="card">

    <div class="card-header">


        <div class="find" method="post">
           
            <?php


            $sql = "SELECT * FROM teacher_info";
            if (isset($_GET['search'])) {
                $name = mysqli_real_escape_string($conn, htmlspecialchars($_GET['search']));
                $sql = "SELECT * FROM teacher_info WHERE sname ='$name'";
            }

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





                <?php


                    if (isset($_GET['search']) && $_GET['search'] != "null") {
                        $name = mysqli_real_escape_string($conn, htmlspecialchars($_GET['search']));
                        $sql = "SELECT * FROM teacher_info WHERE  tname LIKE '%$name%'";
                    } elseif (isset($_GET['search']) ) {
                        $name = mysqli_real_escape_string($conn, htmlspecialchars($_GET['search']));
                        $sql = "SELECT * FROM teacher_info ";
                    } else {
                        $sql = "SELECT * FROM teacher_info";
                    }
                

                ?>

        </form>


    </div>



</div>