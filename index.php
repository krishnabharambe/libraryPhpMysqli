<?php 

 ?>
 <!DOCTYPE html>
 <html>
 <head>
 	<title>Library | Home</title>
 	<link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
 	<link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
 	<link rel="stylesheet" type="text/css" href="assets/css/index.style.css">

 </head>
 <body>

 	<header>
 		<div class="navbar navbar-default navbar-fixed-top">
		    <div class="container">
		        <div class="navbar-header">
		            <button class="navbar-toggle" type="button" data-toggle="collapse" data-target="#navbar-main">
		                <span class="icon-bar"></span>
		                <span class="icon-bar"></span>
		                <span class="icon-bar"></span>
		            </button>
		            <a class="navbar-brand" href="#">Library</a>
		        </div>
		        <center>
		            <div class="navbar-collapse collapse" id="navbar-main">
		                <ul class="nav navbar-nav">
		                    <li class="active"><a href="#">Home</a>
		                    </li>
		                    <li><a href="pages/about.php">About</a>
		                    </li>
		                </ul>

		                <form method="POST" action="index.inc.php" class="navbar-form navbar-right" role="search">
		                    <div class="form-group">
		                        <input type="text" class="form-control" name="username" placeholder="Username">
		                    </div>
		                    <div class="form-group">
		                        <input type="text" class="form-control" name="password" placeholder="Password">
		                    </div>
		                    <button type="submit" name="btnsignin" class="btn btn-default">Sign In</button>
		                </form>
		            </div>
		        </center>
		    </div>
		</div>
 	</header>

 	<section>
 		<div id="img-lib">
 			<img src="assets/images/library-theme.jpg" class="img-responsive">
 		</div>
 	</section>

 	<footer>
 		<div class="container">
		  <div class="row">
		  <hr>
		    <div class="col-lg-12">
		      <div class="col-md-8">
		        <a href="#">Terms of Service</a> | <a href="#">Privacy</a>    
		      </div>
		      <div class="col-md-4">
		        <p class="muted pull-right">© 2017 Krishna Bharambe. All rights reserved</p>
		      </div>
		    </div>
		  </div>
		</div>
 	</footer>
 
 <script type="text/javascript" href='https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js'></script>
 </body>
 </html>