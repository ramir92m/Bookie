<?php 
ob_start();
session_start();

//url redirection if user is not log-in
if(!isset($_SESSION['userauth']))
{
    header("Location: ../");
}

?>

<!DOCTYPE HTML/>
<html>
	<head>
		<title>Bookie - Main</title>
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<link rel='stylesheet' type='text/css' href="../css/bootstrap.css"/>
		<link rel='stylesheet' type='text/css' href="../css/extension.css"/>
		<link rel="stylesheet"  type="text/css" href="../css/bootstrap-glyphicons.css"/>
		<link />
		<!--IE Support for html5 -->
		<script type="text/javascript" src="../js/html5shiv.js"></script>
		<script type="text/javascript" src="../js/respond.js"></script>
	</head>
	<body>
		
		<!--navigation bar-->
		<div class="navbar navbar-static-top">
			<div class="container">
				<img src="../img/logo.png" class="navbar-brand" />
				<ul class="nav navbar-nav">
				  <li><a href="#">Home</a></li>
				  <li>
				  	<form class="navbar-form ">
						<input type="text" class="custom-textbox"  />
					</form>	
				  </li>
				</ul>
				 <p class="navbar-text pull-right"><a href='../lib/logout.php' class="navbar-link">Logout</a></p>
			</div>
		</div>
		
		<div id="wrapper">
			<div class="container">
				<div class="col-lg-3">
					<div id="user-panel">
							<img src="../img/default-photo.jpg" />
							<ul class="nav nav nav-pills nav-stacked">
								<li class="active"><a href="#">Activities</a></li>
								<li><a href="#">Upload</a></li>
								<li><a href="#">View Books</a></li>
								<li><a href="#">Profile</a></li>
							</ul>
						</div>
				</div>
				<div class="col-lg-9">
					<ul class="breadcrumb">
					  <li class="active">Home</li>
					</ul>

					<h3>Activity</h3>
					<div id="main-content">
						<div class="media">
						  <a class="pull-left" href="#">
						    <img class="media-object" src="http://placehold.it/50x50" />
						  </a>
						  <div class="media-body">
						    <h4 class="media-heading">Bookie</h4>
						    <p>
						    	Hello world
						    </p>
						    <ul>
						    	<li><a href="#">Comments</a></li>
						    	<li><a href="#">Remove Post</a></li>
						    </ul>
						  </div>
						</div>
						
					</div>


				</div>
			</div>
			<div class="clearfix"></div>
		</div>	
			<div id="footer">
				<span>Bookie - Copyright 2013. All Rights Served. </span>
			</div>
			
		
		
			
		
		

		<script type="text/javascript" src="../js/bootstrap.js"></script>
	</body>
</html>
<?php ob_flush(); ?>