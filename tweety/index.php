<?php
	
	session_start();

	define('HOST', 'localhost');
	define('DB', 'social');
	define('USER', 'root');
	define('PASSWORD', 'root');

	// First connect to the database
	$mysqli = mysqli_connect(HOST, USER, PASSWORD, DB); 

	$tweets = mysqli_query($mysqli, "SELECT * FROM `tweets` ORDER BY `tweets`.`id` DESC");
?>

<!DOCTYPE html>
<html>
<head>
	<title>Tweety | simple micro tweets</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="css/sweetalert.css">
</head>
<body>
<div class="container">
	<!-- navbar section -->
	<div class="row">
		  <nav class="navbar navbar-default">
		  <div class="container-fluid">
		    <!-- Brand and toggle get grouped for better mobile display -->
		    <div class="navbar-header">
		      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
		        <span class="sr-only">Toggle navigation</span>
		        <span class="icon-bar"></span>
		        <span class="icon-bar"></span>
		        <span class="icon-bar"></span>
		      </button>
		      <a class="navbar-brand" href="index.php">Tweety</a>
		    </div>

		    <!-- Collect the nav links, forms, and other content for toggling -->
		   <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
		     
		      <ul class="nav navbar-nav navbar-right">
		        
		        <li><a href="index.php">Home</a></li>
		        <li><a href="about.php">About</a></li>
		      </ul>
		    </div><!-- /.navbar-collapse -->
		  </div><!-- /.container-fluid -->
		</nav>
	</div> <!-- end of nav bar -->
	<div class="row">
		<div class="col-md-6 col-md-offset-3">
			<form action="process.php" method="POST">
				<div class="form-group">
					<textarea class="form-control" name="tweet" rows="3" required></textarea>
					<input type="hidden" name="user_id" value="2">
				</div>
				<div class="form-group">
					<button type="submit" class="btn btn-info pull-right">Tweet</button>
				</div>
			</form>
			<?php if(isset($_SESSION['success'])) { ?>
			<div class="alert alert-info">
				<?php echo $_SESSION['success']; ?>
			</div>
			<?php } ?>
			<?php while($tweet = mysqli_fetch_array($tweets)) { ?>
			<div class="media">
			  <div class="media-left">
			    <img src="img/img_avatar1.png" class="media-object" style="width:60px">
			  </div>
			  <div class="media-body">
			    <h4 class="media-heading"><?php echo $tweet['tweet']; ?></h4>
			    <p><span class="label label-info"><?php echo $tweet['created_at'] ?></span> </p>
			  </div>
			</div>
			<?php } ?>
			
		</div>
	</div> <!-- row end -->
</div><!-- container end -->

<?php  session_unset($_SESSION["success"]);  ?>

<footer class="footer">
      <div class="container">
        <p class="text-muted">HashResearch Labs</p>
      </div>
    </footer>
</body>
	<script src="https://code.jquery.com/jquery-3.1.1.min.js"></script>
	<script type="text/javascript" src="../js/bootstrap.min.js"></script>
	<script type="text/javascript" src="../js/sweetalert-dev.js"></script>
</html>
