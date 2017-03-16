<?php
	
	session_start();

	define('HOST', 'localhost');
	define('DB', 'survey');
	define('USER', 'root');
	define('PASSWORD', 'root');

	// First connect to the database
	$mysqli = mysqli_connect(HOST, USER, PASSWORD, DB); 

	// Fetch all the rows from the Tasks
	$feedbacks = mysqli_query($mysqli, "SELECT * FROM feedback;");

?>

<?php include 'header.php'; ?>
	<!-- slider section -->
	<div class="row">
		<?php if(isset($_SESSION['success'])) { ?>
		<div class="alert alert-success  alert-dismissable">
			<a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
			<?php echo $_SESSION['success'];  ?>
		</div>
		<?php } ?>

		<?php if(isset($_SESSION['warning'])) { ?>
		<div class="alert alert-warning  alert-dismissable">
			<a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
			<?php echo $_SESSION['warning'];  ?>
		</div>
		<?php } ?>

		<?php if(isset($_SESSION['danger'])) { ?>
		<div class="alert alert-danger  alert-dismissable">
			<a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
			<?php echo $_SESSION['danger'];  ?>
		</div>
		<?php } ?>

		<?php 

			session_unset($_SESSION["success"]); 
			session_unset($_SESSION["warning"]); 
			session_unset($_SESSION["danger"]); 


		?>
		<div class="col-md-6">
			<div class="panel panel-info">
				<div class="panel-heading">Feedback</div>
					<div class="panel-body">
						<form action="process.php" id="app-form" method="POST">
						<div class="form-group">
							<input type="text" name="program" value="Augmentation Program of FullStack Development" class="form-control" readonly>
						</div>

						<div class="form-group">
							<label>Name</label>
							<input type="text" name="name" class="form-control" placeholder="Enter your name" required>
						</div>

						<div class="form-group">
							<label>Roll No:</label>
							<input type="text" name="roll_no" class="form-control" placeholder="Enter your rollnumber" required>
						</div>
						<div class="form-group">
							<label>Program Material</label>
							<input type="range" id="range1" value="1" min="1" max="4" name="program_material" required>
							<label id="txt1" />
						</div>

						<div class="form-group">
							<label>Knowledge of resource persons</label>
							<input type="range" id="range2" value="1" min="1" max="4"  name="knowledge_of_person" required>
							<label id="txt2" />
						</div>

						<div class="form-group">
							<label>Presentation / Delivery</label>
							<input type="range" id="range3" value="1" min="1" max="4"  name="presentation_delievery" required>
							<label id="txt3" />
						</div>

						<div class="form-group">
							<label>Relevance and practical applications</label>
							<input type="range" id="range4" value="1" min="1" max="4"  name="relevance_practical" required>
							<label id="txt4" />
						</div>

						<div class="form-group">
							<label>Contribution of the program towards yours specific needs</label>
							<input type="range" id="range5" value="1" min="1" max="4"  name="contribution_on_your_needs" required>
							<label id="txt5" />
						</div>

						<div class="form-group">
							<label>Resource person's interaction with the participants</label>
							<input type="range" id="range6" value="1" min="1" max="4"  name="persons_interaction" required>
							<label id="txt6" />
						</div>

						<div class="form-group">
							<label>Evaluation of the participants by the resource person</label>
							<input type="range" id="range7" value="1" min="1" max="4"  name="evaluation_of_participants" required>
							<label id="txt7" />
						</div>

						<div class="form-group">
							<label>Training arrangements</label>
							<input type="range" id="range8" value="1" min="1" max="4"  name="training_arrangement" required>
							<label id="txt8" />
						</div>
						<div class="form-group">
							<label>Time management</label>
							<input type="range" id="range9" value="1" min="1" max="4"  name="time_management" required>
							<label id="txt9" />
						</div>
						<div class="form-group">
							<label>Overall rating of the program</label>
							<input type="range" id="range10" value="1" min="1" max="4"  name="overall_rating" required>
							<label id="txt10" />
						</div>

						<div class="form-group">
							<label>Others comments</label>
							<textarea class="form-control comments" name="comments" required></textarea>
						</div>
						<div class="loader"></div>

						<div class="form-group">
							<button class="btn btn-success submit">Submit</button>

						</div>
						</form>
					</div>
				</div>
			</div>

			
		<div class="col-md-5 thumbnail">
			<?php while($feedback = mysqli_fetch_array($feedbacks)) { ?>
			<div class="media" style="border:1px dashed #e8e8e8;">
			  <div class="media-left">
			    <img src="img/img_avatar1.png" class="media-object" style="width:60px">
			  </div>
			  <div class="media-body">
			    <h4 class="media-heading"><?php echo $feedback['roll_no']; ?></h4>
			    <p><?php echo $feedback['comments']; ?></p>
			    <span class="label label-info pull-right"><?php echo $feedback['sentiment']; ?></span>
			    <span class="label label-success pull-right"><?php echo $feedback['confidence']; ?>%</span>
			  </div>
			</div>
			<?php } ?>

		</div>
		</div>
	</div>

</div>
<?php include 'footer.php'; ?>