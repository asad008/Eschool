<?php
	session_start();

	//connect to database
	$C = mysqli_connect("localhost", "root", "", "eschool");

	//search database
	$stmt = $C->prepare("SELECT * FROM teacher_info WHERE email=? AND passwor=? LIMIT 1");
	$stmt->bind_param("ss", $_POST['tusername'], $_POST['tpassword']);
	$stmt->execute();
	$stmt->store_result();

	if($stmt->num_rows === 1) {
		
		$_SESSION['user']= $_POST['tusername'];
		$_SESSION['pass']= $_POST['tpassword'];
		
		$_SESSION['tverified'] = true;
		
        
		echo "true";
	}
	else {
		echo "false";
	}

	$stmt->close();
	$C->close();
?>
