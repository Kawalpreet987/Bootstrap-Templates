<!DOCTYPE html>
<html lang="en">
	<head>
		  <!-- Theme Made By www.w3schools.com - No Copyright -->
		  <title>Bootstrap Theme Simply Me</title>
		  <meta charset="utf-8">
		  <meta name="viewport" content="width=device-width, initial-scale=1">
		  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
		  <link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet">
		  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
		  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
		  <style>
			.container-fluid
			{
				padding-top:70px;
				padding-bottom:70px;
			}
			.navbar
			{
				margin-bottom:0px;
				border-radius:0px;
				font-size:15px;
				padding-top:15px;
				padding-bottom:15px;
				letter-spacing:5px;
			}
			.margin
			{
				margin-bottom:45px;
			}
			.bg-1
			{
			  background: #1abc9c;
			  color:white;
			}
			.bg-2
			{
			  background: #474e5d;
			  color:white;
			}
			footer
			{
				padding:25px;
				background:#2f2f2f;
				font-size:20px;
				color:white;
			}
		  </style>
	</head>
	<body>
		<nav class="navbar navbar-default">
			<div class="container">
				<div class="navbar-header">
					<button type="button" class="navbar-toggle" data-target="#mynav" data-toggle="collapse">
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
					</button>
					<a href="#" class="navbar-brand">Me</a>
				</div>
				<div class="collapse navbar-collapse" id="mynav" >
					<ul class="nav navbar-nav navbar-right">
						<li><a href="#">WHO'S</a></li>
						<li><a href="#">WHAT</a></li>
						<li><a href="#">WHERE</a></li>
					</ul>
				</div>
			</div>
		</nav>
		<div class="container-fluid text-center bg-1">
			<h3 class="margin">Who Am I ?</h3>
			<img src="images/bird.jpg" class="img-circle margin" height="300px" width="300px">
			<h3>I am an Adventurer</h3>
		</div>
		<div class="container-fluid text-center bg-2">
			<h3 class="margin">What AM I?</h3>
			<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim a          veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
			</p>
			<a href="#" class="btn btn-default btn-lg">
				<span class="glyphicon glyphicon-search"></span> Search
			</a>
		</div>
		<div class="container-fluid text-center bg-3">
			<h3 class="margin">Where To Find Me</h3><br>
			<div class="row">
				<div class="col-sm-4">
					<p class="margin">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim a  veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
					</p>
					<img src="images/bird.jpg" style="width:100%; height:250px" class="img-responsive margin">
				</div>
				<div class="col-sm-4">
					<p class="margin">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim a  veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
					</p>
					<img src="images/bird.jpg" style="width:100%; height:250px" class="img-responsive margin">
				</div>
				<div class="col-sm-4">
					<p class="margin">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim a  veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
					</p>
					<img src="images/bird.jpg" style="width:100%; height:250px" class="img-responsive margin">
				</div>
			</div>
		</div>
		<footer class="container-fluid text-center">
			<p>Bootstrap theme made by <a href="#">w3.schools.com</a></p>
		</footer>
	</body>
</html>