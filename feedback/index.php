<?php
	
	session_start();

?>

<?php include 'header.php'; ?>
	<!-- slider section -->
	<div class="row">
		<?php if(isset($_SESSION['success'])) { ?>
		<div class="alert alert-success">
			<?php echo $_SESSION['success'];  ?>
		</div>
		<?php } ?>

		<?php if(isset($_SESSION['warning'])) { ?>
		<div class="alert alert-warning">
			<?php echo $_SESSION['warning'];  ?>
		</div>
		<?php } ?>

		<?php if(isset($_SESSION['danger'])) { ?>
		<div class="alert alert-danger">
			<?php echo $_SESSION['danger'];  ?>
		</div>
		<?php } ?>
		<div class="col-md-6">
			

			<form action="process.php" method="POST">
				<div class="form-group">
					<input type="text" name="program" value="Augmentation Program of FullStack Development" class="form-control" required>
				</div>

				<div class="form-group">
					<label>Name</label>
					<input type="text" name="name" class="form-control" required>
				</div>

				<div class="form-group">
					<label>Roll No:</label>
					<input type="text" name="roll_no" class="form-control" required>
				</div>
				<div class="form-group">
					<label>Program Material</label>
					<input type="range" min="1" max="5" name="program_material" required>
				</div>

				<div class="form-group">
					<label>Knowledge of resource person / S</label>
					<input type="range" min="1" max="5"  name="knowledge_of_person" required>
				</div>

				<div class="form-group">
					<label>Presentation / Delivery</label>
					<input type="range" min="1" max="5"  name="presentation_delievery" required>
				</div>

				<div class="form-group">
					<label>Relevance and practical applications</label>
					<input type="range" min="1" max="5"  name="relevance_practical" required>
				</div>

				<div class="form-group">
					<label>Contribution of the program towards yours specific needs</label>
					<input type="range" min="1" max="5"  name="contribution_on_your_needs" required>
				</div>

				<div class="form-group">
					<label>Resource person's interaction with the participants</label>
					<input type="range" min="1" max="5"  name="persons_interaction" required>
				</div>

				<div class="form-group">
					<label>Evaluation of the participants by the resource person</label>
					<input type="range" min="1" max="5"  name="evaluation_of_participants" required>
				</div>

				<div class="form-group">
					<label>Training arrangements</label>
					<input type="range" min="1" max="5"  name="training_arrangement" required>
				</div>
				<div class="form-group">
					<label>Time management</label>
					<input type="range" min="1" max="5"  name="time_management" required>
				</div>
				<div class="form-group">
					<label>Overall rating of the program</label>
					<input type="range" min="1" max="5"  name="overall_rating" required>
				</div>

				<div class="form-group">
					<label>Others comments</label>
					<textarea class="form-control" name="comments" required></textarea>
				</div>

				<div class="form-group">
					<button class="btn btn-success">Submit</button>
				</div>
			</form>
			
		</div>
	</div>

</div>
<?php include 'footer.php'; ?>