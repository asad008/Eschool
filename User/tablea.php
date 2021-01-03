<?php include('backconnect.php'); ?>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <style>
        table {
            border-collapse: collapse;
            width: 100%;


        }

        th {

            color: #000000;
            border: 1px solid #f5f5f5;
            text-align: center;
        }

        td {
            font-size: 16px;
            border: 1px solid #f5f5f5;
            width: auto;
            text-align: center;
        }

        .fa-sync-alt,
        .fa-check-circle {
            border-radius: 5px;
            padding: 5px;
            background-color: #3074AE;
            color: white;


        }

        .fa-trash-alt {

            border-radius: 5px;
            border: 1px solid red;
            padding: 5px;
            background-color: red;
            color: white;
        }

        .icon-input-btn {
            display: inline-block;
            position: relative;
        }

        .icon-input-btn input[type="submit"] {
            padding-left: 2em;
        }

        .icon-input-btn .fa {
            display: inline-block;
            position: absolute;
            left: 0.65em;
            top: 30%;
        }

        .ser {
            /* visibility: hidden; */
            float: right;
        }

        .sear {
            width: 50%;
            float: right;
            transition: width 1s;
        }

        .sear:focus {
            width: 70%;
        }
    </style>
    <title>Document</title>
</head>

<body>
    <div class="col-md-12 col-sm-12 col-12">



        <?php include('studenttableaheader.php'); ?>
        <?php




        include('backconnect.php');
        $adname = "SELECT * FROM teacher_info WHERE email='$_SESSION[user]'AND passwor='$_SESSION[pass]'";
        $resultoo = mysqli_query($conn, $adname);
        $row = mysqli_fetch_assoc($resultoo);
        $tid = $row['teacherid'];



        // echo $_SESSION['user'] . $_SESSION['pass'] . $tid;








        ?>
        <div class="card-body">


            <table id="dtBasicExample" class="sortable" class="table table-striped table-bordered table-sm" cellspacing="0" width="100%">
                <thead>
                    <tr>
                        <th class="th-sm">Class
                        </th>
                        <th class="th-sm">Course Code
                        </th>
                        <th class="th-sm">Student Id
                        </th>
                        <th class="th-sm">Name
                        </th>
                        <th class="th-sm">Section
                        </th>


                        <th class="th-sm">Contact
                        </th>
                        <th class="th-sm">Action
                        </th>
                    </tr>
                </thead>
                <tbody>
























                    <?php







                    $result = mysqli_query($conn, $sql);
                    if ($result) {

                        while ($row = mysqli_fetch_assoc($result)) {

                            echo "<tr><td>" . $row['class'] .  "</td><td>" . $row['subjectcode'] ."</td><td>" . $row['studentid'] . "</td><td>" . $row['sname'] . "</td><td>" . $row['section'] .
                                "</td><td>" . $row['mobile'] . "</td><td>" . " 
                                
                                <a href='result.php?si=$row[studentid] && bcn=$row[bcn]'><i class='far fa-check-circle' title='Save'></i></a>
                                <a href='#'><i class='fas fa-sync-alt' title='Update'></i></a>
                                <a href='backdeletestudent.php?si=$row[studentid] && bcn=$row[bcn]'><i class='fas fa-trash-alt' title='Delete' alt='Id Card'></i></a>" .
                                "</td></tr>";
                        }
                    } else {
                        echo "Student is not in your supervission";
                    }




                    ?>




















                    <!-- 



                        <tr>
                            <td>1</td>
                            <td>Tiger Nixon</td>
                            <td>System Architect</td>
                            <td>Edinburgh</td>
                            <td>61</td>
                            <td>2011/04/25</td>
                            <td>
                                <a href="#"><i class="fas fa-address-card" title="Id Card" alt="Id Card"></i></a>
                                <a href="#"><i class="fas fa-pencil-alt" title="Edit" alt="Id Card"></i></a>
                                <a href="#"><i class="fas fa-eye" title="View" alt="Id Card"></i></a>
                                <a href="#"><i class="fas fa-graduation-cap" alt="Id Card"></i></a>
                                <a href="#"><i class="fas fa-trash-alt" title="Delete" alt="Id Card"></i></a>

                            </td>
                        </tr>
                        <tr>
                            <td>2</td>
                            <td>Garrett Winters</td>
                            <td>Accountant</td>
                            <td>Tokyo</td>
                            <td>63</td>
                            <td>2011/07/25</td>
                            <td>
                                <i class="fas fa-address-card"></i>

                                <a href="student-info-form.php"><i class="fas fa-pencil-alt"></i></a>
                                <i class="fas fa-eye"></i>
                                <i class="fas fa-graduation-cap"></i>
                                <i class="fas fa-trash-alt"></i>
                            </td>
                        </tr> -->

                </tbody>

            </table>
        </div>
    </div>
    </div>
    <script>
        $("#search").keypress(function(event) {
            if (event.keyCode === 13) {
                $("#searchbtn").click();
            }
        });
    </script>
</body>

</html>