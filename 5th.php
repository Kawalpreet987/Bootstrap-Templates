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
		.navbar-inverse
		{
			margin-bottom:0px;
		}
		.item
		{
			height:400px;
			width:100%;
		}
		.item.active
		{
			height:400px;
			width:100%;
		}
		footer
		{
			background:black;
			color:white;
			padding:20px;
		}
		@media screen and ( min-width:240px ) and ( max-width:900px )
		{
			.carousel-caption
			{
				display:none;
			}
		}
		</style>
	</head>
	<body>
		<nav class="navbar navbar-inverse">
			<div class="container-fluid">
				<div class="navbar-header">
					<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#mynav">
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
					</button>
					<a href="#" class="navbar-brand">LOGO</a>
				</div>
				<div class="collapse navbar-collapse" id="mynav">
					<ul class="nav navbar-nav">
						<li><a href="#" class="active">Home</a></li>
						<li><a href="#">About</a></li>
						<li><a href="#">Services</a></li>
						<li><a href="#">Contacts</a></li>
					</ul>
					<ul class="nav navbar-nav navbar-right">
						<li><a href="#"><span class="glyphicon glyphicon-log-in"> login</a></span></li>
					</ul>
				</div>
			</div>
		</nav>
		<div class="carousel slide" id="mycarousel" data-ride="carousel">
			<ol class="carousel-indicators">
				<li data-target="#mycarousel" data-slide-to="0" class="active"></li>
				<li data-target="#mycarousel" data-slide-to="1"></li>
			</ol>
			<div class="carousel-inner" role="listbox">
				<div class="item active">
					<img src="images/image1.jpg">
					<div class="carousel-caption">
						<h3>Sell $</h3>
						<p>Money Money.</p>
					</div>
				</div>
				<div class="item">
					<img src="images/image1.jpg">
					<div class="carousel-caption">
						<h3>More Sell $</h3>
						<p>Lorem ipsum...</p>
					</div>
				</div>
			</div>
			<a href="#mycarousel" class="left carousel-control" data-slide="prev" role="button">
				<span class="glyphicon glyphicon-chevron-left"></span>
				<span class="sr-only">previous</span>
			</a>
			<a href="#mycarousel" class="right carousel-control" data-slide="next" role="button">
				<span class="glyphicon glyphicon-chevron-right"></span>
				<span class="sr-only">next</span>
			</a>
		</div>
		<div class="container text-center">
			<h3>What We Can Do</h3>
			<div class="row">
				<div class="col-sm-4">
					<img src="images/image.jpg" class="image-responsive" width="100%">
					<p>Current Project</p>
				</div>
				<div class="col-sm-4">
					<img src="images/image.jpg" class="image-responsive" width="100%">
					<p>Project1</p>
				</div>
				<div class="col-sm-4">
					<div class="well">
						<p>Some Text Here......</p>
					</div>
					<div class="well">
						<p>Some Text Here......</p>
					</div>
				</div>
			</div>
		</div>
		<footer class="container-fluid text-center">
			Footer Text
		</footer>
	</body>
</html>