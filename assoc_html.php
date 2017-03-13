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


	function is_eligible($n) {
		if($n >= 22) {
			return 'Eligible';
		} else {
			return 'Not Eligible';
		}
	}

?>


<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<style type="text/css">
	table, th, td, tr {
		border: 1px solid #000;
	}
</style>
<body>
	<table>
		<thead>
			<th>Name</th>
			<th>Age</th>
			<th>Gender</th>
			<th>Status</th>
		</thead>
		<tbody>
			<?php for($i=0; $i<count($students); $i++) { ?>
			<tr>
				<td><?php echo $students[$i]['name']; ?></td>
				<td><?php echo $students[$i]['age']; ?></td>
				<td><?php echo $students[$i]['gender']; ?></td>
				<td><?php echo is_eligible($students[$i]['age']); ?></td>

			</tr>
			<?php } ?>
		</tbody>
	</table>
</body>
</html>