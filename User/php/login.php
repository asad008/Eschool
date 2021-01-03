<?php
	session_start();

	//connect to database
	$C = mysqli_connect("localhost", "root", "", "eschool");

	//search database
	$stmt = $C->prepare("SELECT * FROM student_info WHERE studentid=? AND passwor=? LIMIT 1");
	$stmt->bind_param("ss", $_POST['susername'], $_POST['spassword']);
	$stmt->execute();
	$stmt->store_result();

	if($stmt->num_rows === 1) {
		
		$_SESSION['user']= $_POST['susername'];
		$_SESSION['pass']= $_POST['spassword'];
		$_SESSION['sverified'] = true;
		
        
		echo "true";
	}
	else {
		echo "false";
	}

	$stmt->close();
	$C->close();
?>
