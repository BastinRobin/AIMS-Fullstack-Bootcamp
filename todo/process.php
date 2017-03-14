<?php

	define('HOST', 'localhost');
	define('DB', 'Todo');
	define('USER', 'root');
	define('PASSWORD', 'root');

	// First connect to the database
	$mysqli = mysqli_connect(HOST, USER, PASSWORD, DB); 
	
	// Insert operation
	if (isset($_POST['task'])) {
		mysqli_query($mysqli, "INSERT INTO `Tasks` (`id`, `body`, `is_completed`, `is_deleted`, `created_at`) VALUES (NULL, '".$_POST['task']."', '0', '0', CURRENT_TIMESTAMP)");

		header('Location:index.php');
	}


	if (isset($_GET['operation']) && $_GET['operation'] == 'delete') {

		mysqli_query($mysqli, "DELETE FROM `Tasks` WHERE id=".$_GET['id']." LIMIT 1;");

		header('Location:index.php');
		
	}
 
?>