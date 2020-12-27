<?php 
	session_start();
	$con = mysqli_connect('127.0.0.1', 'root','','lesson45');
	$query = "INSERT INTO applications (student_id, univer_id)
		VALUES ('{$_GET["student_id"]}','{$_GET["univer_id"]}')";
	$zapros_vvoda = mysqli_query($con, $query);
	header("location: index.php");
 ?>