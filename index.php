<?php

    ob_start();
    session_start();
    if(isset($_SESSION['userauthid']))
    {
        header("Location: main/");
    }
?>

<!DOCTYPE HTML>
<html>
	<head>
		<title>Sample Website</title>
		<meta name="description" content="A Sample Website" />
		<meta name="author" content="Ramir Manarpaac" />
		<!-- Blueprint CSS Framework -->
		<link rel="stylesheet" type="text/css" href="css/grid.css" />
		<link rel="stylesheet" type="text/css" href="css/liquid.css" />
		<link rel="stylesheet" type="text/css" href="css/main.css" />
		
	</head>
	<body>
		<div id="header">
			<div class="container">
				<img src="img/logo.png" />
				<div class="right">
                                    <form action="lib/login.php" method="POST">
                                        <label class="label">Username</label>
					<input type="text" name="username" />
					<label class="label">Password</label>
					<input type="password" name="password" />
					<input type="submit" class="mybutton" value="Login"/>
                                    </form>
				</div>
			</div>			
		</div>
		
		<!--Content -->
		<div id="content" class="container">
			<div class="column span-12 append-1">
				<h1 class="unit-header">Sharing contents for social individual</h1>
				<hr/>
				<ul class="unit-thumbnail">
					<li class="span-6">
						<img src="img/read.png" />
						<h3>Read</h3>
						<p>
							Read other user's e-book or your own
						</p>
					</li>
					<li class="span-6">
						<img src="img/share.png" />
						<h3>Share</h3>
						<p>
							Share information with other people
						</p>
					</li>
					<li class="span-6">
						<img src="img/upload.png" />
						<h3>Upload</h3>
						<p>
							Upload and discuss it with your friends
						</p>
					</li>
				</ul>
			</div>
			<div class="column span-11 last">
				<div id="registration-form">
                                    <form id="register-form">
					<h3 class="reg-header">Account Sign-up</h3>
					<div class="input-inline">
						<label>Full Name</label>
						<input type="text" name="fullname" />
					</div>
					<div class="input-inline">
						<label>Username</label>
						<input type="text" name="username" />
					</div>
					<div class="input-inline">
						<label>Password</label>
						<input type="password" name="password" />
					</div>
					<div class="input-inline">
						<label>Email</label>
						<input type="text" name="email" />
					</div>
					<div class="input-inline">
						<input type="button" name="register" value="Sign Up" id="register" />
					</div>
                                    </form>
				</div>
			</div>
		</div>
		
		<!--Footer -->
		<div id="footer">
			<span>Bookie - Copyright 2013. All Rights Served. </span>
		</div>
		
                <!-- jQuery -->
                <script type="text/javascript" src="js/jquery-1.10.2.min.js"></script>
                <!--Bookie Script using jQuery-->
                <script type="text/javascript" src="js/script.js"></script>
	</body>
</html>

<?php 
ob_end_flush();
?>