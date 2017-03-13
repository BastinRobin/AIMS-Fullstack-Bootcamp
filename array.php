<?php

	// First way
	$students = array("Prerana", "Rajitha", "Teja", "Likitha", "Modi", 1, 0.1, 'A');


	// Second way
	$students = ["Prerana", "Rajitha", "Teja", "Likitha", "Modi", 1, 0.1, 'A'];


	// Assigning the value to the existing array
	$students[0] = ["Prerana", "Rajitha"];

	// print entire array
	print_r($students);

	echo "<br>";
	// print a single element in array with index value
	echo $students[0][1];



?>