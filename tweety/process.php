<?php
	
	session_start();

	define('HOST', 'localhost');
	define('DB', 'social');
	define('USER', 'root');
	define('PASSWORD', 'root');

	// First connect to the database
	$mysqli = mysqli_connect(HOST, USER, PASSWORD, DB); 

	$tweet = $_POST['tweet'];
	$user = $_POST['user_id'];

	$results = mysqli_query($mysqli, "INSERT INTO `tweets` (`id`, `user_id`, `tweet`, `status`, `img`, `created_at`) VALUES (NULL, '".$user_id."', '".$tweet."', '0', 'filenae.jph', CURRENT_TIMESTAMP);");


	if($results) {

		$_SESSION['success'] = 'Your tweet was successfully posted';\

		header('Location:index.php');
	} else {
		echo "something went wrong";
	}




?>