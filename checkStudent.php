<?php 	
	session_start();
	$con = mysqli_connect('127.0.0.1', 'root','','lesson45');
	$query = mysqli_query($con, "SELECT * FROM students WHERE phone='{$_GET['phone']}' and password='{$_GET['password']}'");
	$stroka = $query->fetch_assoc();
	$num = mysqli_num_rows($query);

	if ($num>0) {
		$_SESSION['id'] = $stroka['id'];
		header('location: accountStudent.php');
	} else {
		header("location: loginStudent.php");
	}
 ?>