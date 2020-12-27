<?php 
	$img_dir = 'img/';
	$img_name = $img_dir . basename($_FILES['file']['name']); //путь где хранится картинки
	$upload = move_uploaded_file($_FILES['file']['tmp_name'], $img_name);

	$connect = mysqli_connect('127.0.0.1', 'root', '', 'lesson45');

	if ($upload==true) {
		$query = mysqli_query($connect, "INSERT INTO works (filename, dscr) VALUES ('{$_POST["file"]}','{$_POST["dscr"]}')");
	};
 ?>