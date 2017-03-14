<?php
	
	define('HOST', 'localhost');
	define('DB', 'Todo');
	define('USER', 'root');
	define('PASSWORD', 'root');

	// First connect to the database
	$mysqli = mysqli_connect(HOST, USER, PASSWORD, DB); 

	// Fetch all the rows from the Tasks
	$todos = mysqli_query($mysqli, "SELECT * FROM Tasks;");

?>

<?php include 'header.php'; ?>
	<!-- slider section -->
	<div class="row">
		<div class="col-md-6 col-md-offset-3">
			<!-- <div class="alert alert-success">
				Successfully added new task;
			</div>
			<div class="alert alert-warning">
				Updated the task;
			</div>
			<div class="alert alert-danger">
				Deleted the task;
			</div> -->
			<ul class="list-items">
				<?php while($todo = mysqli_fetch_array($todos)) { ?>

					<li class="list-group-item <?php echo $todo['is_deleted'] == 0 ? '' : 'grey'; ?>">
						<?php echo $todo['body'];  ?>

						<?php if($todo['is_deleted'] != 1) { ?> 
						<div class="pull-right">
							<a class="btn btn-xs btn-success" href="process.php?id=<?php echo $todo['id'];  ?>&is_completed=1">Done</a> | 
							<a class="btn btn-xs btn-warning" href="">Edit</a> |  
							<a class="btn btn-xs btn-danger" href="process.php?operation=delete&id=<?php echo $todo['id'];  ?>">Delete</a>
						</div>
						<?php } ?>
					</li>
				<?php } ?>
				<li class="list-group-item">
				<form action="process.php" method="POST">	
				<input type="text" name="task" class="form-control" placeholder="Enter your task">
				<button type="submit" class="btn btn-primary">+ Add</button>
				</form>
				</li>

			</ul>


			
		</div>
	</div>

</div>
<?php include 'footer.php'; ?>