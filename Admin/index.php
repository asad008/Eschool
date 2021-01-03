<html lang="en">

<head>
	<!-- prevent user go back -->
	<script lang="javascript" type="text/javascript">
		function backo() {
			window.history.forward();
		}

		setTimeout("backo()", 0);
		window.onunload = function() {
			null
		};
	</script>
	
	<meta charset="UTF-8">
	<title>Login</title>
	<!-- <link href="https://fonts.googleapis.com/css2?family=Source+Sans+Pro:wght@400;900&display=swap" rel="stylesheet"> -->
	<link rel="stylesheet" href="assets/libs/css/style.css">
	<link rel="stylesheet" href="assets/libs/css/style1.css">
	<script src="loginscript.js"></script>
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
</head>

<body>
	<div class="background">

		<div class="form-box1">
			<h1>Application <br> Login Page</h1>
			<p>Login To Your App From Here To Access.</p>
		</div>
		<div class="form-box">



			<form>

				<h2>Login</h2>
				<input type="email" class="input-field" placeholder="Enter Email" name="username" required="" >
				<input type="password" class="input-field" placeholder="Enter Password" name="password" required="">

				<button type="submit" onclick="login()" class="submit-btn">Login</button>
				<h3 style="font-size: 14px; padding-top:16px;"> Not Registered? <a style="text-decoration:none;padding-left: 7px; color: blue;" href="index.php">Register here</a> </h3>

			</form>


		</div>

	</div>


</body>

</html>