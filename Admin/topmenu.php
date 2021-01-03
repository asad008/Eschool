<script src="loginscript.js"></script>
<div class="dashboard-header">
    <nav class="navbar navbar-expand-lg bg-white fixed-top">
        <a class="navbar-brand" href="index1.php">ESchool</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse " id="navbarSupportedContent">
            <ul class="navbar-nav mr-auto navbar-left-top">
                <li class="nav-item">
                    <a style="padding-left: 75px; font-size: 18px;  color: black;" href="index1.php" class="nav-link">Home</a>
                </li>
                <li class="nav-item">
                    <a style="padding-left: 25px; font-size: 18px; color: black;" href="index1.php" class="nav-link">Contact</a>
                </li>

            </ul>
            <ul class="navbar-nav ml-auto navbar-right-top">


                <li class="nav-item">
                    <div class="find">
                        <div class="md-form active-pink active-pink-2 mb-3 mt-0">
                            <input class="form-control" type="text" placeholder="Search" aria-label="Search">
                        </div>
                    </div>

                </li>



                <li class="nav-item dropdown nav-user">
                    <a class="nav-link nav-user-img" href="#" id="navbarDropdownMenuLink2" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><img src="assets/images/asad.jpeg" alt="" class="user-avatar-lg rounded-circle"></a>
                    <div class="dropdown-menu dropdown-menu-right nav-user-dropdown" aria-labelledby="navbarDropdownMenuLink2">
                        <div class="nav-user-info">
                            <h3 style="font-weight: bold;" class="mb-0 text-white nav-user-name">

                                <?php
                                include('backconnect.php');
                                $adname = "SELECT username FROM super_admin WHERE email='$_SESSION[user]'AND passwor='$_SESSION[pass]'";
                                $resultoo = mysqli_query($conn, $adname);
                                $row = mysqli_fetch_assoc($resultoo);
                                $usname = $row['username'];
                                echo $usname;
                                ?>

                            </h3>

                        </div>
                        <a class="dropdown-item" href="adminprofile.php"><i class="fas fa-user mr-2"></i>Account</a>
                        <a class="dropdown-item" href="#"><i class="fas fa-cog mr-2"></i>Setting</a>
                        <a class="dropdown-item" onclick="logout()" href="#"><i class="fas fa-power-off mr-2"></i>Logout</a>
                    </div>
                </li>
            </ul>
        </div>
    </nav>
</div>