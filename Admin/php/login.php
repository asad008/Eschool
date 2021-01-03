<?php
	session_start();

	//connect to database
	$C = mysqli_connect("localhost", "root", "", "eschool");

	//search database
	$stmt = $C->prepare("SELECT * FROM super_admin WHERE email=? AND passwor=? LIMIT 1");
	$stmt->bind_param("ss", $_POST['username'], $_POST['password']);
	$stmt->execute();
	$stmt->store_result();

	if($stmt->num_rows === 1) {
		
		$_SESSION['user']= $_POST['username'];
		$_SESSION['pass']= $_POST['password'];
		$_SESSION['verified'] = true;
		
        
		echo "true";
	}
	else {
		echo "false";
	}

	$stmt->close();
	$C->close();
?>
