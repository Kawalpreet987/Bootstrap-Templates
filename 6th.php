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
		
			.carousel-inner img
			{
				height:100%;
				min-height:400px;
			}
		
		</style>
	</head>
	<body>
		<nav class="navbar navbar-inverse">
			<div class="container-fluid">
				<div class="navbar-header">
					<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#mynav" >
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
					</button>
					<a href="#" class="navbar-brand">Logo</a>
				</div>
				<div class="collapse navbar-collapse" id="mynav">
					<ul class="nav navbar-nav">
						<li><a href="#" class="active">Home</a></li>
						<li><a href="#">Services</a></li>
						<li><a href="#">Contact</a></li>
					</ul>
					<ul class="nav navbar-nav navbar-right">
						<li><a href="#"><span class="glyphicon glyphicon-log-in"> Login</span></a></li>
					</ul>
				</div>
			</div>
		</nav>
		<div class="container">
			<div class="row">
				<div class="col-sm-8">
					<div class="carousel slide" id="mycarousel" data-ride="carousel" >
						<ol class="carousel-indicators">
							<li data-target="#mycarousel" data-slide-to="0" class="active"></li>
							<li data-target="#mycarousel" data-slide-to="1"></li>
						</ol>
						<div class="carousel-inner" role="listbox">
							<div class="item active">
								<img src="images/image1.jpg">
								<div class="carousel-caption">
									<h3>Sell$</h3>
									<p>Money Money.</p>
								</div>
							</div>
							<div class="item">
								<img src="images/image1.jpg">
								<div class="carousel-caption">
									<h3>money</h3>
									<p>Lorem Ipsum..</p>
								</div>
							</div>
						</div>
						<a href="#mycarousel" class="left carousel-control" role="button" data-slide="prev">
							<span class="glyphicon glyphicon-chevron-left"></span>
							<span class="sr-only">Previous</span>
						</a>
						<a href="#mycarousel" class="right carousel-control" role="button" data-slide="next">
							<span class="glyphicon glyphicon-chevron-right"></span>
							<span class="sr-only">Next</span>
						</a>
					</div>
				</div>
			</div>
		</div>
	</body>
</html>