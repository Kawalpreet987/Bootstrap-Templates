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
			background:#555;
			padding:20px;
			color:white;
		}
		</style>
	</head>
	<body>
		<nav class="navbar navbar-inverse">
			<div class="container-fluid">
				<div class="navbar-header">
					<button class="navbar-toggle" type="button" data-toggle="collapse" data-target="#mynav">
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
					</button>
					<a href="#" class="navbar-brand">Logo</a>
				</div>
				<div class="collapse navbar-collapse"  id="mynav"> 
					<ul class="nav navbar-nav" >
						<li><a href="#" class="active">Home</a></li>
						<li><a href="#">Messages</a></li>
					</ul>
					<form class="navbar-form navbar-right">
						<div class="form-group input-group">
							<input type="text" placeholder="search..." class="form-control">
							<span class="input-group-btn">
								<button class="btn btn-default" type="button">
									<span class="glyphicon glyphicon-search"></span>
								</button>
							</span>
						</div>
					</form>
					<ul class="nav navbar-nav navbar-right">
						<li><a href="#"><span class="glyphicon glyphicon-user"></span>My Account</a></li>
					</ul>
				</div>
			</div>
		</nav>
		
		<div class="container text-center">
			<div class="row">
				<div class="col-sm-3 well">
					<div class="well">
						<p><a href="#">My Profile</a></p>
						<img src="images/bird.jpg" class="img-circle" height="65" width="65">
					</div>
					<div class="well">
						<p><a href="#">My Intersts</a></p>
						<span class="label label-default">News</span>
						<span class="label label-primary">gaming</span>
						<span class="label label-info">infrastructure</span>
						<span class="label label-success">books</span>
						<span class="label label-warning">laptop</span>
						<span class="label label-danger">comp</span>
					</div>
					<div class="alert alert-success fade in">
						<a href="#"  data-dismiss="alert" class="close" aria-label="close">x</a>
						<p><strong>EY!</strong></p>
						<p>People are looking at your profile. Find out who.</p>
					</div>
					<p><a href="#">Link</a></p>
					<p><a href="#">Link</a></p>
					<p><a href="#">Link</a></p>
				</div>
				<div class="col-sm-7">
					<div class="row">
						<div class="col-sm-12">
							<div class="panel panel-default text-left">
								<div class="panel-body">
									<p contenteditable="true">Status:Feeling Blue</p>
									<button type="button" class="btn btn-default btn-sm">
										<span class="glyphicon glyphicon-thumbs-up"></span> Like
									</button>
								</div>
							</div>
						</div>
					</div>
					<div class="row">
						<div class="col-sm-3">
							<div class="well">
								<p>John</p>
								<img src="images/bird.jpg" class="img-circle" height="65" width="65">
							</div>
						</div>
						<div class="col-sm-9">
							<div class="well">
								<p>
									Just Forgot that I had to mention something about someone to someone about how I forgot something, but now I forgot it. Ahh, forget it! Or wait. I remember.... no I don't.
								</p>
							</div>
						</div>
					</div>
										<div class="row">
						<div class="col-sm-3">
							<div class="well">
								<p>John</p>
								<img src="images/bird.jpg" class="img-circle" height="65" width="65">
							</div>
						</div>
						<div class="col-sm-9">
							<div class="well">
								<p>
									Just Forgot that I had to mention something about someone to someone about how I forgot something, but now I forgot it. Ahh, forget it! Or wait. I remember.... no I don't.
								</p>
							</div>
						</div>
					</div>
										<div class="row">
						<div class="col-sm-3">
							<div class="well">
								<p>John</p>
								<img src="images/bird.jpg" class="img-circle" height="65" width="65">
							</div>
						</div>
						<div class="col-sm-9">
							<div class="well">
								<p>
									Just Forgot that I had to mention something about someone to someone about how I forgot something, but now I forgot it. Ahh, forget it! Or wait. I remember.... no I don't.
								</p>
							</div>
						</div>
					</div>
										<div class="row">
						<div class="col-sm-3">
							<div class="well">
								<p>John</p>
								<img src="images/bird.jpg" class="img-circle" height="65" width="65">
							</div>
						</div>
						<div class="col-sm-9">
							<div class="well">
								<p>
									Just Forgot that I had to mention something about someone to someone about how I forgot something, but now I forgot it. Ahh, forget it! Or wait. I remember.... no I don't.
								</p>
							</div>
						</div>
					</div>
					<div class="row">
						<div class="col-sm-3">
							<div class="well">
								<p>John</p>
								<img src="images/bird.jpg" class="img-circle" height="65" width="65">
							</div>
						</div>
						<div class="col-sm-9">
							<div class="well">
								<p>
									Just Forgot that I had to mention something about someone to someone about how I forgot something, but now I forgot it. Ahh, forget it! Or wait. I remember.... no I don't.
								</p>
							</div>
						</div>
					</div>
				</div>
				<div class="col-sm-2 well">
					<div class="well">
						<p>Upcoming Events:</p>
						<img src="images/bird.jpg" height="120" width="120">
						<p><strong>PARIS</strong></p>
						<p>27-November-2013</p>
						<button type="button" class="btn btn-info">
							INFO
						</button>
					</div>
					<div class="well">
						<p>ADS</p>
					</div>
					<div class="well">
						<p>ADS</p>
					</div>
				</div>
			</div>
		</div>
		<footer class="container-fluid text-center">
			Footer Text
		</footer>
	</body>
</html>