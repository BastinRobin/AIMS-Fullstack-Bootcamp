<?php
	

	define('HOST', 'localhost');
	define('DB', 'survey');
	define('USER', 'root');
	define('PASSWORD', 'root');

	// First connect to the database
	$mysqli = mysqli_connect(HOST, USER, PASSWORD, DB); 

	// Fetch all the rows from the Tasks
	$feedbacks = mysqli_query($mysqli, "SELECT * FROM feedback;");

?>
<!DOCTYPE html>
<html>
<head>
	<title>SurveyApp</title>
	<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" type="text/css" href="../css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="../css/sweetalert.css">

	<style type="text/css">
		.Poor { color: red; }
		.Average { color: #ff9800; }
		.Good { color: #2196f3; }
		.Excellent { color: #4caf50; }
		.Positive { background: #8BC34A; color:#fff; }
		.Neutral { background: #b1dafb; color:#fff;}
		.Negative { background: red;color:#fff; }

	</style>
</head>

<body>
<div class="container">
	<!-- navbar section -->
	<div class="row">
		  <nav class="navbar navbar-inverse">
		  <div class="container-fluid">
		    <!-- Brand and toggle get grouped for better mobile display -->
		    <div class="navbar-header">
		      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
		        <span class="sr-only">Toggle navigation</span>
		        <span class="icon-bar"></span>
		        <span class="icon-bar"></span>
		        <span class="icon-bar"></span>
		      </button>
		      <a class="navbar-brand" href="index.php">SurveyApp</a>
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
	</div>

	<div class="col-md-12">
	<table class="table table-condensed">
	    <thead>
	      <tr>
	        <!-- <th>Name</th> -->
	        <th>Roll</th>
	        <th>Sentiment</th>
	        <th>Confidence</th>
	      </tr>
	    </thead>
	    <tbody>
	      <?php while($feedback = mysqli_fetch_array($feedbacks)) { ?>
		      <tr>
		        <td><?php echo $feedback['roll_no']; ?></td>
		        <td class="<?php echo $feedback['sentiment']; ?>"><?php echo $feedback['sentiment']; ?></td>
		        <td><?php echo round($feedback['confidence'], 1); ?>% 
		        <?php if($feedback['confidence'] > 50) { ?>
		        	<img src="../img/green.png" width="20px" />
		        <?php } else { ?>
		        	<img src="../img/red.png" width="20px">	
		        <?php } ?>
		        </td>
		      </tr>
	      <?php } ?>
	    </tbody>
	  </table>
	</div>

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