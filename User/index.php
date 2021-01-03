<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">


    <!-- <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <link rel="stylesheet" href="assets/vendor/bootstrap/css/bootstrap.min.css"> -->

    <!-- Font Awesome -->
    <link rel="stylesheet" href="car.css">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Lobster&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css">
    <script src="https://kit.fontawesome.com/e8989d062c.js" crossorigin="anonymous"></script>
    <!-- Google Fonts -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap">
    <!-- Bootstrap core CSS -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.0/css/bootstrap.min.css" rel="stylesheet">
    <!-- Material Design Bootstrap -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/mdbootstrap/4.19.1/css/mdb.min.css" rel="stylesheet">

    <script src="jquery-3.3.1.min.js"></script>
    <script>
        var interval;

        function startTicker() {
            $("#news li:first").slideUp(function() {
                $(this).appendTo($("#news")).slideDown();
            })
        }

        function stopTicker() {
            clearInterval(interval);
        }

        $(document).ready(function() {

            interval = setInterval(startTicker, 2000);
            $("#news").hover(function() {
                stopTicker();
            }, function() {
                interval = setInterval(startTicker, 2000);
            });
        });
    </script>



    <style>
        a {
            color: white;
        }

        a:hover {
            color: white;
        }

        body {
            background-color: #f5f5f5;
        }
    </style>

    <link rel="stylesheet" href="style.css">
    <!--   <link href='../Admin/assets/vendor/full-calendar/css/fullcalendar.css' rel='stylesheet' />
    <link href="../Admin/assets/vendor/fonts/circular-std/style.css" rel="stylesheet">
    <script src="../Admin/assets/libs/js/search.js"></script>
    <script src="../Admin/https://kit.fontawesome.com/e8989d062c.js" crossorigin="anonymous"></script>
    <script src="../Admin/loginscript.js"></script> -->
    <title>Document</title>
</head>

<body>
    <!-- <div class="col-md-4 col-sm-12 col-12">
        <div class="card">
            <h5 style="text-align: center;" class="card-header">Notice</h5>
            <div class="card-body">
                <div class="form notice">

                </div>

            </div>
        </div>
    </div> -->


    <?php include("topnav.php"); ?>
    <!--Navbar-->

    <!--/.Navbar-->



    <!--  -->









    <!-- <div class="notice-wrapper" style="background-color: red;">
        <div class="container-fluid">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="d-flex">
                            <div class="notice-title">Latest News</div>
                            <div class="notice"><i class="far fa-square"></i>
                                <p class=""><i class=""><a href="/institute/all_notice" class="typewrite" data-period="2000" data-type=""><span class="wrap"></span></a></i></p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div> -->






































    <div>
        <div class="row">

            <div style="background-color:#FF0000; color:white; width:12%; text-align:center; padding:10px;">
                <!-- <div style="background-color: red; text-align:center; color:white;font-weight:bold; margin-left:5%;"> -->
                Latest News
                <i class="far fa-square"></i>
                <!-- </div> -->
            </div>
            <div style="background-color:#0069d9; color:white; height:45px; width:88%; float:left; line-height:45px; padding-right:10px;">
                <marquee direction="left" onMouseOver="this.stop()" onMouseOut="this.start()">
                    <?php

                    include("backconnect.php");
                    $sql = "SELECT * FROM notice Where stat='Top Notice' ORDER BY timeinp";
                    $result = mysqli_query($conn, $sql);

                    if (mysqli_num_rows($result) > 0) {
                        while ($row = mysqli_fetch_array($result)) {
                            // echo '<label><a href="' . $row['video_link'] . '" target="_blank">' . $row['video_title'] . '</a></label>';
                            echo  $row['headings'] . "<i style='padding-left:10px;padding-right:10px;' class='far fa-square'></i>";
                        }
                    }


                    ?>
                </marquee>
            </div>

        </div>





    </div>


    <!--Carousel Wrapper-->
    <div id="carousel-example-2" class="carousel slide carousel-fade" data-ride="carousel" data-interval="2000">
        <!--Indicators-->
        <ol class="carousel-indicators">
            <li data-target="#carousel-example-2" data-slide-to="0" class="active"></li>
            <li data-target="#carousel-example-2" data-slide-to="1"></li>
            <li data-target="#carousel-example-2" data-slide-to="2"></li>
        </ol>
        <!--/.Indicators-->
        <!--Slides-->
        <div class="carousel-inner" role="listbox">


            <div class="carousel-item active">
                <div class="view">
                    <img style="height: 60%;" class="d-block w-100" src="assets/a8.jpg" alt="First slide">
                     <div class="mask rgba-black-strong"></div>
                </div>
                <div class="carousel-caption">
                    <!-- <h3 class="h3-responsive">Light mask</h3> -->
                    <h3>Educating the Leaders of Tomorrow</h3>
                </div>
            </div>
            <div class="carousel-item">
                <!--Mask color-->
                <div class="view">
                    <img style="height: 60%;" class="d-block w-100" src="assets/a12.jpg" alt="Second slide">
                     <div class="mask rgba-black-strong"></div>
                </div>
                <div class="carousel-caption">
                    <h3 class="h3-responsive">Looking to the Future with Hope</h3>
                    
                </div>
            </div>
            <div class="carousel-item">
                <!--Mask color-->
                <div class="view">
                    <img style="height: 60%;" class="d-block w-100" src="assets/a3.jpg" alt="Third slide">
                    <div class="mask rgba-black-strong"></div>
                </div>
                <div class="carousel-caption">
                    <h3 class="h3-responsive">Learn well today, live well tomorrow!</h3>
                    
                </div>
            </div>
        </div>
        <!--/.Slides-->
        <!--Controls-->
        <a class="carousel-control-prev" href="#carousel-example-2" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#carousel-example-2" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
        </a>
        <!--/.Controls-->
    </div>
    <!--/.Carousel Wrapper-->



    <br>





    <div class="row" style="margin-left: 0.5%;">
        <div class="col-md-8">

            <!-- slider card for teachers quotes -->

            <div class="card">
                <h5 style="text-align: center;" class="card-header">Head Master</h5>
                <div class="card-body">

                    <div class="media"><img class="rounded-circle img-thumbnail" src="assets/head.jpg" alt="" width="75">
                        <div class="media-body ml-3">
                            <blockquote class="blockquote border-0 p-0">
                                <p class="font-italic lead"> <i class="fa fa-quote-left mr-3 text-success"></i>Education is not Preparation of life, rather it is living.</p>
                                <footer class="blockquote-footer">Headmaster

                                </footer>
                            </blockquote>
                        </div>
                    </div>


                </div>
            </div>


            <div class="card" style="margin-top: 4%;">
                <h5 style="text-align: center;" class="card-header">Teachers</h5>
                <div class="card-body">



                    <div id="carouselExampleSlidesOnly" class="carousel slide" data-ride="carousel">
                        <div class="carousel-inner px-5 pb-4">
                            <!-- Carousel slide-->
                            <div class="carousel-item active">
                                <div class="media"><img class="rounded-circle img-thumbnail" src="assets/t1.jpg" alt="" width="75">
                                    <div class="media-body ml-3">
                                        <blockquote class="blockquote border-0 p-0">
                                            <p class="font-italic lead"> <i class="fa fa-quote-left mr-3 text-success"></i>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                                            <footer class="blockquote-footer">Someone famous in
                                                <cite title="Source Title">Source Title</cite>
                                            </footer>
                                        </blockquote>
                                    </div>
                                </div>
                            </div>

                            <!-- Carousel slide-->
                            <div class="carousel-item">
                                <div class="media"><img class="rounded-circle img-thumbnail" src="assets/t2.jpg" alt="" width="75">
                                    <div class="media-body ml-3">
                                        <blockquote class="blockquote border-0 p-0">
                                            <p class="font-italic lead"> <i class="fa fa-quote-left mr-3 text-success"></i>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                                            <footer class="blockquote-footer">Someone famous in
                                                <cite title="Source Title">Source Title</cite>
                                            </footer>
                                        </blockquote>
                                    </div>
                                </div>
                            </div>

                            <!-- Carousel slide-->
                            <div class="carousel-item">
                                <div class="media"><img class="rounded-circle img-thumbnail" src="assets/t4.jpg" alt="" width="75">
                                    <div class="media-body ml-3">
                                        <blockquote class="blockquote border-0 p-0">
                                            <p class="font-italic lead"> <i class="fa fa-quote-left mr-3 text-success"></i>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                                            <footer class="blockquote-footer">Someone famous in
                                                <cite title="Source Title">Source Title</cite>
                                            </footer>
                                        </blockquote>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
        <!-- <div class="col-md-4">
        


            <div class="card" style="margin-right: 2.5%;">
                <h5 style="text-align: center;" class="card-header"> Notice </h5>
                <div class="card-body" style="max-height: 445px; overflow:hidden;">

                    site problems (€30-250 EUR)
                    <hr>
                    identify and fix CLS issues (in Google Search Console) ($50-500 USD)
                    <hr>
                    Website redesign - https://www.danchanmagic.com/virtualmagicshows.html ($500 USD)
                    <hr>
                    Prestashop Modules ($10-30 USD)
                    <hr>
                    website help ($30-250 USD)
                    <hr>
                    Build a website -- 2 (€1500-3000 EUR)
                    <hr>

                </div>
            </div>


        </div> -->

        <?php

        include("backconnect.php");
        $sql = "SELECT * FROM notice Where stat='Side Notice' ORDER BY timeinp";
        $result = mysqli_query($conn, $sql);


        ?>




        <div class="col-md-4">
            <!-- useful link card -->


            <div class="card" style="margin-right: 2.5%; margin-bottom:2%; position:absolute;">
                <h5 style="text-align: center;" class="card-header"> Notice </h5>
                <div class="card-body" style="height: 445px;">

                    <ul id="news">


                        <?php
                        if (mysqli_num_rows($result) > 0) {
                            while ($row = mysqli_fetch_array($result)) {
                                // echo '<label><a href="' . $row['video_link'] .max-height: 20px; '" target="_blank">' . $row['video_title'] . '</a></label>';
                                // echo "<i class='fas fa-file-pdf'></i>";
                                echo "<li  style='overflow:hidden; color: #2979FF'>"."<i style='color:red;' class='fas fa-file-pdf'></i>  " . $row['headings'] ."<hr>". "</li>";
                                
                            }
                        }
                        ?>
                    </ul>


                </div>
                <!-- <p class="card-footer" style="color: red;">Read More</p> -->
            </div>











        </div>








    </div>















    <div class="col-md-12 col-sm-12 col-12">


        <!-- Card -->
        <div class="card promoting-card" style="margin-top: 2%; margin-bottom:2%;">

            <!-- Card content -->
            <div class="card-body d-flex flex-row">


                <!-- Content -->
                <div>

                    <!-- Title -->
                    <h4 style="text-align: center ;" class="card-title">Welcom To Eschool</h4>


                </div>

            </div>



            <!-- Card content -->
            <div class="card-body">
                <p>নওগাঁ কে.ডি. সরকারি উচ্চ বিদ্যালয় একটি ঐতিহ্যবাহী সরাকারি বিদ্যালয় যা নওগাঁ জেলাই অবস্থিত। ১৮৮৪ সালের ফ্রেব্রুয়ারি মাসে এটি স্থাপিত হয়। এটি বাংলাদেশে স্থাপিত অন্যতম পুরনো বিদ্যালয়। বিগত কয়েক বছরের পাবলিক পরীক্ষাগুলোর ফলাফল অনুসারে এটি নওগাঁ জেলার শ্রেষ্ঠ এবং রাজশাহী বিভাগের অন্যতম শ্রেষ্ঠ বিদ্যালয়।</p>

                <div class="collapse-content">

                    <!-- Text -->
                    <p class="collapse" id="collapseContent" style="text-align: justify;">এই বিদ্যালয়ে তৃতীয় শ্রেণী থেকে দশম শ্রেণী পর্যন্ত দুই শিফটে শিক্ষাদান করা হয়। নওগাঁ জেলায় একটি উচ্চ বিদ্যালয় প্রতিষ্ঠা করার উদ্যোগ সর্বপ্রথম গ্রহণ করেন বাবু কৃষ্ণধন বাগচী, যিনি নওগাঁর তত্‍কালীন ডেপুটি কমিশনার এবং গাঁজা সমবায় সমিতির সুপারভাইজার ছিলেন। তার প্রচেষ্টায় কিছু জমিদার, কৃষক এবং বিত্তশালী ব্যক্তিবর্গ অর্থ সহায়তা প্রদান করেন। এটি ছিল নওগাঁ জেলায় প্রতিষ্ঠিত প্রথম উচ্চ বিদ্যালয়।﻿উত্তরবঙ্গের অন্যতম শ্রেষ্ঠ মহকুমা শহর নওগাঁ। কৃষি সম্পদে সমৃদ্ধ ছিল বলেই বোধ হয় এই শহর জমিদার প্রধান স্থান হিসেবে খ্যাতি অর্জন করে। এ মহকুমার লোকদের মোটা ভাত কাপড়ের বিশেষ অভাব ছিলনা বলেই তারা লেখাপড়া শেখার তেমন তাগিদ অনুভব করেনি। স্থানীয় জমিদাররা তাঁদের সন্তানদের দেশে বিদেশে বড় বড় শহরে রেখে উচ্চ শিক্ষা লাভের ব্যবস্থা করেছিলেন। ফলে তাঁরাও জনসাধারনের মধ্যে শিক্ষা বিস্তারে উদাসীন ছিলেন। এমনই এক পরিস্থিতির মধ্যে নওগাঁ মহকুমা শহরে ১৮৮৪ খ্রীস্টাব্দে একটি উচ্চ বিদ্যালয় স্থাপিত হয়। এটিই পরবর্তীকালে কে. ডি. উচ্চ বিদ্যালয় নামে পরিচিতি পায়। এটিই ছিল নওগাঁ মহকুমার প্রথম উচ্চ বিদ্যালয়।যদিও দুবলহাটিতে অবস্থিত রাজা হরনাথ রায় উচচ বিদ্যালয়টি ছিল নওগাঁয় প্রতিষ্ঠিত প্রথম বিদ্যালয়।</p>
                    <!-- Button -->

                </div>
                <a style="float: right;" class="btn btn-flat red-text collapsed" id="hide" data-toggle="collapse" href="#collapseContent" aria-expanded="false" aria-controls="collapseContent">Read More</a>

            </div>

        </div>


    </div>


    <hr>

    <div class="col-md-12 col-sm-12 col-12">
        <div class="row">
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3145.349171982395!2d88.94174251452259!3d24.813183953262772!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x39fc6353bd20842d%3A0x3f08138b4c6fdf70!2z4Kao4KaT4KaX4Ka-4KaBIOCmleCnhywg4Kah4Ka_LCDgprjgprDgppXgpr7gprDgp4Ag4KaJ4Kaa4KeN4KaaIOCmrOCmv-CmpuCnjeCmr-CmvuCmsuCnnywg4Kao4KaT4KaX4Ka-4KaB!5e1!3m2!1sen!2sbd!4v1606266595762!5m2!1sen!2sbd" width="1366" height="450" frameborder="0" style="border:0;" allowfullscreen="true" aria-hidden="false" tabindex="0"></iframe>
        </div>

    </div>








    <!-- Footer -->
    <?php include("footer.php"); ?>
































    <!-- JQuery -->
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <!-- Bootstrap tooltips -->
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.4/umd/popper.min.js"></script>
    <!-- Bootstrap core JavaScript -->
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.0/js/bootstrap.min.js"></script>
    <!-- MDB core JavaScript -->
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/mdbootstrap/4.19.1/js/mdb.min.js"></script>
</body>

</html>