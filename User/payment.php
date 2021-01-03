<?php
session_start();

if (!isset($_SESSION['sverified']) || $_SESSION['sverified'] !== true) {
    header("Location: studentlogin.php");

    die();
}
?>

<!DOCTYPE html>
<html>

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <style>
        body {
            font-family: Arial;
        }

        /* Style the tab */
        .tab {
            overflow: hidden;
            border: 1px solid #ccc;
            background-color: #f1f1f1;
        }

        /* Style the buttons inside the tab */
        .tab button {
            background-color: inherit;
            float: right;
            border: none;
            outline: none;
            cursor: pointer;
            padding: 14px 16px;
            transition: 0.3s;
            font-size: 17px;
        }

        /* Change background color of buttons on hover */
        .tab button:hover {
            background-color: #ddd;
        }

        /* Create an active/current tablink class */
        .tab button.active {
            background-color: #ccc;
            border-top: 2px solid blue;
        }

        /* Style the tab content */
        .tabcontent {
            display: none;
            padding: 6px 12px;
            border: 1px solid #ccc;
            border-top: none;
        }

        .collapsible {
            background-color: #777;
            color: white;
            cursor: pointer;
            padding: 18px;
            width: 100%;
            border: none;
            text-align: left;
            outline: none;
            font-size: 15px;
        }

        .active,
        .collapsible:hover {
            background-color: #555;
        }

        .content {
            padding: 0 18px;
            display: none;
            overflow: hidden;
            background-color: #f1f1f1;
        }
    </style>
</head>

<body>



    <div class="tab">

        <button class="tablinks" onclick="openCity(event, 'Advances')">Advances</button>
        <button class="tablinks" onclick="openCity(event, 'Dues')">Dues</button>
        <button class="tablinks" onclick="openCity(event, 'Payments')" id="defaultOpen">Payments</button>


    </div>

    <div id="Payments" class="tabcontent">






        <?php
        include('backconnect.php');


        $adname = "SELECT * FROM student_info WHERE studentid='$_SESSION[user]'AND passwor='$_SESSION[pass]'";
        $resultoo = mysqli_query($conn, $adname);
        $row = mysqli_fetch_assoc($resultoo);
        $usname = $row['sname'];
        $id = $row['studentid'];
        $roll = $row['roll'];
        $group = $row['groupid'];
        $class = $row['class'];
        $Section = $row['section'];
        $mname = $row['mname'];
        $fname = $row['fname'];
        $dob = $row['dob'];
        $gender = $row['gender'];
        $religion = $row['religion'];
        $phone = $row['mobile'];
        $pcity = $row['permacity'];
        $pthana = $row['permathana'];
        $pdistrict = $row['permadistrict'];
        $email = $row['email'];

        $yeare = date("y");

















        $query = "SELECT * FROM regfee WHERE class='$class' AND year='$yeare'";
        $resultt = mysqli_query($conn, $query);
        while ($row = mysqli_fetch_assoc($resultt)) {
            $reg = $row["regfee"];
            $dev = $row["devfee"];

            $lab = $row["labfee"];
            $lib = $row["libraryfee"];

            $exm = $row["examfee"];
            $extra = $row["extrafee"];

            $other = $row["otherfee"];
            $rate = $row["feerate"];

            $fee = $row["waiver"];
        }
        $paid = 0;
        $due = $fee;
        $pt = "Not Paid";
        $t = " ";
        $advance = 0;

        $query = "SELECT * FROM payments WHERE class='$class' AND year='$yeare'  AND id='$id'";
        $resultt = mysqli_query($conn, $query);
        while ($row = mysqli_fetch_assoc($resultt)) {
            $paid = $row["payment"];
            $due = $row["dues"];
            $advance = $row["advance"];
            $t = $row["time"];
            $pt = "Paid On ";
        }

        ?>













        <table class="table table-stripted table-hover" align="center" style="width:100% !important;overflow-x:scroll !important;">
            <thead>
                <tr class="" style="background-color: blue; color:white;">
                    <th width="50%">Components</th>
                    <th style="text-align:center;">Amount</th>
                    <!-- <th>Total Amount (Tk.)</th> -->
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td style="background: #fff !important;">
                        Registration Fee<br>
                        <hr> Development Fee<br>
                        <hr> Computer Lab Fee<br>
                        <hr> Library Fee<br>
                        <hr> Exam Fee<br>
                        <hr> Extra-curricular Fee<br>
                        <hr> Others<br>
                        <hr>
                    </td>
                    <td style="text-align:left;background: #fff !important;">
                        <?php echo $reg; ?> <br>
                        <hr> <?php echo $dev; ?><br>
                        <hr> <?php echo $lab; ?><br>
                        <hr> <?php echo $lib; ?><br>
                        <hr> <?php echo $exm; ?><br>
                        <hr> <?php echo $extra; ?><br>
                        <hr> <?php echo $other; ?><br>
                        <hr>
                    </td>
                    <!-- <td></td> -->
                </tr>
                <tr>
                    <!-- <td></td> -->
                    <td style="text-align:right;background: #FAFAFA !important;" colspan="2">Total : <?php echo $fee; ?></td>
                    <!-- <td></td> -->
                </tr>
                <tr>
                    <td style="background: #fff !important;">
                        Tution Fees Rate<br>


                    </td>
                    <td style="text-align:left;background: #fff !important;">
                        <?php echo $rate; ?> </td>
                    <!-- <td></td> -->
                </tr>


                <tr>
                    <!-- <td style="text-align:left;"></td> -->
                    <!-- <td style="background: #fafafa !important;"></td> -->
                    <td style="text-align:right;background: #66BB6A !important;" colspan="2">Paid : <?php echo $paid; ?></td>
                </tr>
                <tr>
                    <!-- <td></td> -->
                    <td style="text-align:right;background:#E040FB !important;" colspan="2">Dues : <?php echo $due; ?></td>
                    <!-- <td style="background: #fafafa !important;"></td> -->
                </tr>

                <tr>
                    <td colspan="2" style="text-align:right;background: #FAFAFA !important; color:red;">
                        <b>
                            Payment Status:
                            <?php echo $pt; ?> <?php echo $t; ?></b>
                    </td>
                </tr>
            </tbody>
        </table>































    </div>

    <div id="Dues" class="tabcontent">


        <table class="table table-stripted table-hover" align="center" style="width:100% !important;overflow-x:scroll !important;">
            <thead>
                <tr class="" style="background-color: blue; color:white;">
                    <th width="35%" style="text-align:center;">Class</th>
                    <th width="35%" style="text-align:center;">Due Amount</th>
                    <th width="30%" style="text-align:center;">Status</th>

                    <!-- <th>Total Amount (Tk.)</th> -->
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td style="text-align:center;background: #fff !important;">
                        <?php echo $class; ?>
                    </td>
                    <td style="text-align:center;background: #fff !important;">
                        <?php echo $due; ?>
                    </td>
                    <td style="text-align:center;background: #fff !important;">
                        <?php echo $pt; ?> <?php echo $t; ?>
                    </td>
                    <!-- <td></td> -->
                </tr>


            </tbody>
        </table>


    </div>

    <div id="Advances" class="tabcontent">
        You have Paid <?php echo $advance; ?> in advance.
    </div>

    <script>
        function openCity(evt, cityName) {
            var i, tabcontent, tablinks;
            tabcontent = document.getElementsByClassName("tabcontent");
            for (i = 0; i < tabcontent.length; i++) {
                tabcontent[i].style.display = "none";
            }
            tablinks = document.getElementsByClassName("tablinks");
            for (i = 0; i < tablinks.length; i++) {
                tablinks[i].className = tablinks[i].className.replace(" active", "");
            }
            document.getElementById(cityName).style.display = "block";
            evt.currentTarget.className += " active";
        }

        // Get the element with id="defaultOpen" and click on it
        document.getElementById("defaultOpen").click();
    </script>
    <script>
        var coll = document.getElementsByClassName("collapsible");
        var i;

        for (i = 0; i < coll.length; i++) {
            coll[i].addEventListener("click", function() {
                this.classList.toggle("active");
                var content = this.nextElementSibling;
                if (content.style.display === "block") {
                    content.style.display = "none";
                } else {
                    content.style.display = "block";
                }
            });
        }
    </script>

</body>

</html>