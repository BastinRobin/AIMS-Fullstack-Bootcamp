<?php
	session_start();

	define('HOST', 'localhost');
	define('DB', 'survey');
	define('USER', 'root');
	define('PASSWORD', 'root');

	// First connect to the database
	$mysqli = mysqli_connect(HOST, USER, PASSWORD, DB); 

	if ($_POST['name'] && $_POST['roll_no']) {

		$results = mysqli_query($mysqli, "INSERT INTO `feedback` (`id`, `name`, `roll_no`, `program`, `program_material`, `knowledge_of_person`, `presentation_delievery`, `relevance_practical`, `contribution_on_your_needs`, `persons_interaction`, `evaluation_of_participants`, `training_arrangement`, `time_management`, `overall_rating`, `comments`, `sentiment`, `confidence`, `is_deleted`, `created_at`) VALUES (NULL, '".$_POST['name']."', '".$_POST['roll_no']."', '".$_POST['program']."', '".$_POST['program_material']."', '".$_POST['knowledge_of_person']."', '".$_POST['presentation_delievery']."', '".$_POST['relevance_practical']."', '".$_POST['contribution_on_your_needs']."', '".$_POST['persons_interaction']."', '".$_POST['evaluation_of_participants']."', '".$_POST['training_arrangement']."', '".$_POST['time_management']."', '".$_POST['overall_rating']."', '".$_POST['comments']."', '".$_POST['sentiment']."', '".$_POST['confidence']."', '0', CURRENT_TIMESTAMP)");

		// $_SESSION['success'] = 'Added your feedback successfully';

		// header('Location:index.php');
		// var_dump($results);

		if($results) {
			echo "true";
		} else {
			echo "false";
		}

	}


?>