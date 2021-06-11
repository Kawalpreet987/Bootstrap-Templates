<!DOCTYPE html>
<html lang="en">
	<head>
	  <title>Bootstrap Example</title>
	  <meta charset="utf-8">
	  <meta name="viewport" content="width=device-width, initial-scale=1">
	  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
	  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
	  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
	  <style>
		footer
		{
			background:#f2f2f2;
			padding:25px;
		}
	  </style>
	<body>
		<nav class="navbar navbar-inverse">
			<div class="container-fluid">
				<div class="navbar-header">
					<button type="button" data-toggle="collapse" class="navbar-toggle" data-target="#myname">
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
					</button>
					<a href="#" class="navbar-brand">Portfolio</a>
				</div>
				<div class="collapse navbar-collapse " id="myname">
					<ul class="nav navbar-nav">
						<li><a href="#" class="active">Home</a></li>
						<li><a href="#">Gallery</a></li>
						<li><a href="#">About</a></li>
						<li><a href="#">Contacts</a></li>
					</ul>
					<ul class="nav navbar-nav navbar-right">
						<li><a href="#"><span class="glyphicon glyphicon-log-in">Login</span></a></li>
					</ul>
				</div>
			</div>
		</nav>
		<div class="jumbotron text-center">
			<h1>My Portfolio</h1>
			<p>Some Text Here........</p>
		</div>
		<div class="container-fluid text-center ">
			<h3>Some Of My Work</h3>
		</div>
		<div class="container-fluid">
			<div class="row">
				<div class="col-sm-3">
					<p>Some Text Here....</p>
					<img src="images/portfolio.jpg" class="img-responsive" style="width:100%">
				</div>
				<div class="col-sm-3">
					<p>Some Text Here....</p>
					<img src="images/portfolio.jpg" class="img-responsive" style="width:100%">
				</div>
				<div class="col-sm-3">
					<p>Some Text Here....</p>
					<img src="images/portfolio.jpg" class="img-responsive" style="width:100%">
				</div>
				<div class="col-sm-3">
					<p>Some Text Here....</p>
					<img src="images/portfolio.jpg" class="img-responsive" style="width:100%">
				</div>
			</div>
			<div class="row">
				<div class="col-sm-3">
					<p>Some Text Here....</p>
					<img src="images/portfolio.jpg" class="img-responsive" style="width:100%">
				</div>
				<div class="col-sm-3">
					<p>Some Text Here....</p>
					<img src="images/portfolio.jpg" class="img-responsive" style="width:100%">
				</div>
				<div class="col-sm-3">
					<p>Some Text Here....</p>
					<img src="images/portfolio.jpg" class="img-responsive" style="width:100%">
				</div>
				<div class="col-sm-3">
					<p>Some Text Here....</p>
					<img src="images/portfolio.jpg" class="img-responsive" style="width:100%">
				</div>
			</div><br><br>
			<footer class="container-fluid text-center">
				<p>Footer Text</p>
			</footer>
			</div>
		</div>
	</body>
 </html>