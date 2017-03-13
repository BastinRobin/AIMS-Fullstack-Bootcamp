<?php

	

	$students = [

		['name' => 'Rajitha', 'age' => 21, 'gender' => 'female'],
		['name' => 'Prerana', 'age' => 21, 'gender' => 'female'],
		['name' => 'Rakesh', 'age' => 25, 'gender' => 'male'],
		['name' => 'Sam', 'age' => 23, 'gender' => 'male'],
		['name' => 'Mike', 'age' => 30, 'gender' => 'male'],
		['name' => 'Rakesh', 'age' => 25, 'gender' => 'male'],
		['name' => 'Sam', 'age' => 23, 'gender' => 'male'],
		['name' => 'Mike', 'age' => 30, 'gender' => 'male'],
		['name' => 'Rakesh', 'age' => 25, 'gender' => 'male'],
		['name' => 'Sam', 'age' => 23, 'gender' => 'male'],
		['name' => 'Mike', 'age' => 30, 'gender' => 'male']

	];


	for($i = 0; $i < count($students); $i++) {

		echo $students[$i]['name'];
		echo "<br>";
		echo $students[$i]['age'];
		echo "<br>";
		echo $students[$i]['gender'];
		echo "<br>";
		echo "---------------";
		echo "<br>";


	}



?>