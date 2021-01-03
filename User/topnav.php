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
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css">
    <script src="https://kit.fontawesome.com/e8989d062c.js" crossorigin="anonymous"></script>

<nav class="navbar navbar-expand-lg" style="background-color: #2a3f54; color:white;">

    <!-- Navbar brand -->
    <a class="navbar-brand" style="font-family: 'Lobster', cursive; padding-left:2%; padding-right:2%;" href="index.php"> <span style=" font-size:28px; color: red;">E</span> <span style="color: white; font-size:28px;">school</span> </a>

    <!-- Collapse button -->
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#basicExampleNav" aria-controls="basicExampleNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>

    <!-- Collapsible content -->
    <div class="collapse navbar-collapse" id="basicExampleNav" style="font-weight: bold;">

        <!-- Links -->
        <ul class="navbar-nav mr-auto">
            <li class="nav-item active">
                <a class="nav-link" href="index.php">Home
                    <span class="sr-only">(current)</span>
                </a>
            </li>
            <!-- <li class="nav-item">
            <a class="nav-link" href="#">Features</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="#">Pricing</a>
        </li> -->

            <!-- Dropdown -->
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">About Schhol</a>
                <div class="dropdown-menu dropdown-primary" aria-labelledby="navbarDropdownMenuLink">
                    <a class="dropdown-item" href="atg.php">At a Glance</a>
                    <a class="dropdown-item" href="#">History Of School</a>
                    <a class="dropdown-item" href="#">Mission & Vision</a>
                </div>
            </li>
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">institute Info</a>
                <div class="dropdown-menu dropdown-primary" aria-labelledby="navbarDropdownMenuLink">
                    <a class="dropdown-item" href="#">Administration</a>
                    <a class="dropdown-item" href="#">Tracher List</a>
                </div>
            </li>
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Admission</a>
                <div class="dropdown-menu dropdown-primary" aria-labelledby="navbarDropdownMenuLink">
                    <a class="dropdown-item" href="#">Requirments</a>
                    <a class="dropdown-item" href="#">Tution & Other Fees</a>
                    <a class="dropdown-item" href="#">Online Application</a>
                    <a class="dropdown-item" href="#">Admission Test Result</a>
                </div>
            </li>

            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Downloads</a>
                <div class="dropdown-menu dropdown-primary" aria-labelledby="navbarDropdownMenuLink">
                    <a class="dropdown-item" href="#">Class Routine</a>
                    <a class="dropdown-item" href="#">Exam Routine</a>
                    <a class="dropdown-item" href="#">Syllabus</a>
                    <a class="dropdown-item" href="#">Exam Result</a>
                </div>
            </li>

        </ul>
        <!-- Links -->

        <!-- <form class="form-inline">
        <div class="md-form my-0">
            <input class="form-control mr-sm-2" type="text" placeholder="Search" aria-label="Search">
        </div>
    </form> -->
        <ul class="navbar-nav ml-auto nav-flex-icons">
            <li class="nav-item">
                <a class="nav-link waves-effect waves-light">

                    <i class="fas fa-box-tissue" title="Complaint Box"></i>
                </a>
            </li>
            <li class="nav-item">
                <a href="teacherlogin.php" class="nav-link waves-effect waves-light">
                    <i class="fas fa-user-graduate" title="Teacher Login"></i>
                </a>
            </li>
            <li class="nav-item dropdown">
                <a class="nav-link waves-effect waves-light" href="studentlogin.php">
                    <i class="fas fa-user-friends" title="Student Login"></i>
                </a>



            </li>
        </ul>
    </div>
    <!-- Collapsible content -->

</nav>