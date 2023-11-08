<?php
	$StudentName = $_POST['StudentName'];
	$FatherName = $_POST['FatherName'];
	$gender = $_POST['gender'];
	$email = $_POST['email'];
	$address = $_POST['address'];
	$Phnumber = $_POST['Phnumber'];

	// Database connection
	$conn = new mysqli('localhost','root','','student');
	if($conn->connect_error){
		echo "$conn->connect_error";
		die("Connection Failed : ". $conn->connect_error);
	} else {
		$stmt = $conn->prepare("insert into profile(StudentName, FatherName, gender, email, address, Phnumber) values(?, ?, ?, ?, ?, ?)");
		$stmt->bind_param("sssssi", $StudentName, $FatherName, $gender, $email, $address, $Phnumber);
		$execval = $stmt->execute();
		echo $execval;
		echo "Registration successfully...";
		$stmt->close();
		$conn->close();
	}
?>