<!DOCTYPE html>
<html>
<head>
	<title>Todo</title>
	<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="css/style.css">
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
		      <a class="navbar-brand" href="/">PredictEasy</a>
		    </div>

		    <!-- Collect the nav links, forms, and other content for toggling -->
		   <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
		     
		      <ul class="nav navbar-nav navbar-right">
		        
		        <li><a href="/new">Load</a></li>
		        <li><a href="/show_all">Dataset</a></li>

		       <!--  <li><a href="/prepare">Prepare</a></li>
		        <li><a href="/train">Train</a></li>
		 -->
		        <li class="dropdown">
		          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Account <span class="caret"></span></a>
		          <ul class="dropdown-menu">
		            
		            <li><a href="/logout">Logout</a></li>
		          </ul>
		        </li>
		      </ul>
		    </div><!-- /.navbar-collapse -->
		  </div><!-- /.container-fluid -->
		</nav>
	</div>
	<!-- slider section -->
	<div class="row">

	</div>
	<!-- 4 column section -->
	<div class="row">
		<div class="col-md-3">
			<h3>Buttons</h3>
			<button class="btn btn-primary">Primary</button>
			<button class="btn btn-success">Success</button><button class="btn btn-info">Info</button><button class="btn btn-warning">Warning</button><button class="btn btn-danger">Danger</button>

			<h3>size</h3>
			<button class="btn btn-xs btn-danger">Danger</button>
			<button class="btn btn-sm btn-danger">Danger</button>

			<button class="btn btn-lg btn-danger">Danger</button>



		</div>

		<div class="col-md-3">
			<h3>List</h3>
			<ul>
				<li>One</li>
				<li>Two</li>
				<li>Three</li>
			</ul>

			<ul class="list-items">
				<li class="list-group-item">One</li>
				<li class="list-group-item">Two</li>
				<li class="list-group-item">Three</li>
			</ul>
		</div>

		<div class="col-md-3">
			<h3>Thumnails</h3>
			<img class="img-responsive thumbnail" src="img/officeexperience.jpg"/>
		</div>

		<div class="col-md-3">
			<h3>Alert</h3>
			
			<div class="alert alert-info">
				hi how are you?
			</div>
			<div class="alert alert-success">
				hi how are you?
			</div>
			<div class="alert alert-warning">
				hi how are you?
			</div>
			<div class="alert alert-danger">
				hi how are you?
			</div>
		</div>

	</div>
	<!-- 2 columns section -->
	<div class="row">
		<div class="col-md-6">
			<h3>Panels </h3>
			<div class="panel panel-info">
				<div class="panel-heading">Heading</div>
				<div class="panel-body">
					<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmo tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,</p>
				</div>
			</div>
			<div class="panel panel-success">
				<div class="panel-heading">Heading</div>
				<div class="panel-body">
					<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmo tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,</p>
				</div>
			</div>
			<div class="panel panel-warning">
				<div class="panel-heading">Heading</div>
				<div class="panel-body">
					<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmo tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,</p>
				</div>
			</div>
			<div class="panel panel-danger">
				<div class="panel-heading">Heading</div>
				<div class="panel-body">
					<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmo tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,</p>
				</div>
			</div>
			<div class="panel panel-default">
				<div class="panel-heading">Heading</div>
				<div class="panel-body">
					<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmo tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,</p>
				</div>
			</div>
		</div>

		<div class="col-md-6">
			<h3>Section </h3>
			Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
			tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
			quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
			consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
			cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
			proident, sunt in culpa qui officia deserunt mollit anim id est laborum.

		</div>
	</div>
	<!-- 4 column section -->
	<div class="row">
		<div class="col-md-3">
			<h3>Section 1</h3>
			Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
			tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
			quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
			consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
			cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
			proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
		</div>

		<div class="col-md-3">
			<h3>Section 2</h3>
			Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
			tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
			quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
			consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
			cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
			proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
		</div>

		<div class="col-md-3">
			<h3>Section 3</h3>
		Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
			tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
			quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
			consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
			cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
			proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
		</div>

		<div class="col-md-3">
			<h3>Section 4</h3>
			Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
			tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
			quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
			consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
			cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
			proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
		</div>

	</div>
</div>
</body>
	<script type="text/javascript" src="js/bootstrap.min.js"></script>
</html>