<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">


    <link rel="stylesheet" href="assets/libs/css/style.css">
    <link rel="stylesheet" href="assets/libs/css/style1.css">
    <!--  <link href="assets/vendor/fonts/circular-std/style.css" rel="stylesheet">
    <script src="https://kit.fontawesome.com/e8989d062c.js" crossorigin="anonymous"></script> -->


    <style>
        * {
            padding: 0;
            margin: 0;
            font-family: sans-serif;
            color: white;
        }

        .background {
            width: 100%;
            height: 100%;
            background-color: #2A3F54;
            /* background-image: url("back.jpg");
             background-image: linear-gradient(rgba(0, 0, 0, 0), rgba(0, 0, 0, 0)), url("back.jpg");*/

            overflow: hidden;


        }

        h2 {
            margin-top: 25%;
            margin-bottom: 2%;
        }




        .form-box {
            width: 60%;
            height: 100%;
            position: fixed;

            left: 40%;
            margin-right: 4%;
            text-align: center;
            background-color: white;
            padding: 5px;
        }

        .form-box1 {
            width: 40%;
            left: 0%;
            z-index: 1;
            position: fixed;
            text-align: center;
            top: 50%;



        }



        .input-field {
            width: 60%;
            padding: 10px 0;
            margin: 5px 7px;
            border-left: 0;
            border-right: 0;
            border-top: 0;
            border-bottom: 1px solid #000000;
            outline: none;
            background: transparent;
            color: black;
            font-size: 18px;
            z-index: 2;

        }

        .submit-btn {
            width: 55%;
            padding: 10px 30px;
            cursor: pointer;
            display: block;
            margin: auto;
            margin-top: 30px;
            background-color: #2A3F54;
            /* background: linear-gradient(to right, #ff105f, #ffad06);*/
            border: 0;
            outline: none;
            border-radius: 30px;
            font-size: 18px;
        }


        .input-field::placeholder,
        .input-field1::placeholder {
            color: rgba(0, 0, 0, 0.6);
            font-size: 14px;
        }

        h1 {

            color: white;

        }
    </style>
    <title>Document</title>
</head>

<body>
    <div class="background">

        <div class="form-box1">
            <h1>Application <br> Login Page</h1>
               <p>Login To Your App From Here To Access.</p> 
        </div>
        <div class="form-box">



            <form action="index.php" method="POST">

                <h2>Login</h2>
                <input type="email" class="input-field" placeholder="Enter Email" name="email" required="" oninvalid="this.setCustomValidity('Please enter a valid Email')" oninput="setCustomValidity('')">
                <input type="password" class="input-field" placeholder="Enter Password" name="pass" required="" oninvalid="this.setCustomValidity('Password is required')" oninput="setCustomValidity('')">

                <button type="submit" class="submit-btn">Login</button>
                <h3 style="font-size: 14px; padding-top:16px;"> Not Registered? <a style="text-decoration:none;padding-left: 7px; color: blue;" href="index.php">Register here</a> </h3>

            </form>


        </div>

    </div>
</body>

</html>