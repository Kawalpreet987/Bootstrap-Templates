<!DOCTYPE html>
<html lang="en">
	<head>
	  <!-- Theme Made By www.w3schools.com - No Copyright -->
		<title>Bootstrap Theme The Band</title>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
		<link href="https://fonts.googleapis.com/css?family=Lato" rel="stylesheet" type="text/css">
		<link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet" type="text/css">
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
		<style>
		.navbar
		{
			background:#dedede;
		}
		.nav li 
		{
			border-right:1px solid white;
		}
		.navbar-header
		{
			border-right:1px solid white;
			color:blue !important;
			width:210px;
		}
		.navbar li a
		{
			color:blue !important;
		}
		.navbar-nav li
		{
			width:210px;
		}
		.nav li:last-child
		{
			border-right:none;
		}
		.person
		{
			font-size:30px;
			color:#0086ab;
		}
		.thumbnail
		{
			background:#0086ab;
			border-radius:10px;
			margin-top:60px;
			color:white;
		}
		.text
		{
			background:#a7a7a7;
			padding:20px;
			border-radius:15px;
		}
		.color
		{
			color:#0086ab;
		}
		footer
		{
			background:#e6e6e6;
			padding:10px;
		}
		@media screen and ( min-width:240px ) and ( max-width:940px)
		{
			.navbar-header
			{
				border-right:none;
			}
			.navbar-nav li
			{
				width:auto;
				text-align:left;
				border-bottom:1px solid white;
			}
			.nav li:last-child
			{
				border-bottom:none;
			}
		}
		</style>
	</head>
	<body>
		<nav class="navbar navbar-default text-center">
			<div class="container-fluid">
				<div class="navbar-header">
					<button type="button" class="navbar-toggle " data-toggle="collapse" data-target="#mynav">
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
					</button>
					<a href="#" class="navbar-brand">Logo</a>
				</div>
				<div class="collapse navbar-collapse" id="mynav">
					<ul class="nav navbar-nav text-center">
						<li><a href="#">Home</a></li>
						<li><a href="#">About</a></li>
						<li><a href="#">Services</a></li>
						<li><a href="#">Partners</a></li>
						<li><a href="#">Contacts</a></li>
					</ul>
				</div>
			</div>
		</nav>
		<div class="container">
			<div class="row">
				<div class="col-sm-3">
					<div class="thumbnail">
						<div class="media">
							<div class="media-left">
								<img src="images/1.jpg"  class="media-object img-circle">
							</div>
							<div class="media-body">
								<div class="media-heading person">
									<strong>About</strong>
								</div>
							</div>
						</div>
						<p>
							Lorem ipsum dolor <br></p><p>psit amet, consectetur adipiscing elit,<br> sed do eiusmod tempor incididunt ut labore et dolore magna aliqua
						</p>
						<ul>
							<li>Lorem ipsum dolor</li>
							<li>Lorem ipsum dolor</li>
							<li>Lorem ipsum dolor</li>
						</ul>
					</div>
				</div>
				<div class="col-sm-9">
					<img src="images/dropex.jpg" style="width:100%;height:350px;" >
				</div>
			</div>
		</div><br><br>
		<div class="container text">
			<div class="row">
				<div class="col-sm-4">
					<div class="media">
						<div class="media-left">
							<img src="images/2.jpg" class="img-circle">
						</div>
						<div class="media-body">
							<div class="media-heading">
								<strong class="person">Solutions</strong>
								<p>sed do eiusmod tempor incididunt ut labore et dolore magna aliquased do eiusmod tempor incididunt ut labore et dolore magna aliqua</p>
								<p>sed do eiusmod tempor incididunt ut labore et dolore magna aliqua</p>
								<ul>
									<li>Lorem ipsum dolor</li>
									<li>Lorem ipsum dolor</li>
									<li>Lorem ipsum dolor</li>
								</ul>
							</div>
						</div>
					</div>
				</div>
				<div class="col-sm-4">
					<div class="media">
						<div class="media-left">
							<img src="images/3.jpg" class="img-circle">
						</div>
						<div class="media-body">
							<div class="media-heading">
								<strong class="person">Why We?</strong>
								<p>sed do eiusmod tempor incididunt ut labore et dolore magna aliquased do eiusmod tempor incididunt ut labore et dolore magna aliqua</p>
								<p>sed do eiusmod tempor incididunt ut labore et dolore magna aliqua</p>
								<ul>
									<li>Lorem ipsum dolor</li>
									<li>Lorem ipsum dolor</li>
									<li>Lorem ipsum dolor</li>
								</ul>
							</div>
						</div>
					</div>
				</div>
				<div class="col-sm-4">
					<div class="media">
						<div class="media-left">
							<img src="images/4.jpg" class="img-circle">
						</div>
						<div class="media-body">
							<div class="media-heading">
								<strong class="person">Info</strong>
								<p>sed do eiusmod tempor incididunt ut labore et dolore magna aliquased do eiusmod tempor incididunt ut labore et dolore magna aliqua</p>
								<p>sed do eiusmod tempor incididunt ut labore et dolore magna aliqua</p>
								<ul>
									<li>Lorem ipsum dolor</li>
									<li>Lorem ipsum dolor</li>
									<li>Lorem ipsum dolor</li>
								</ul>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="container">
			<h3><strong>Our Company</strong></h3>
			<p>
				<span class="color">It is a long established fact that a reader will be distracted by</span> the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using 'Content here, content here', making it look like readable<br> English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for 'lorem ipsum' will uncover many web sites still in their infancy. Various versions have evolved over the years, sometimes 
			</p>
			<ul span class="color">
				<li>Lorem ipsum dolor</li>
				<li>Lorem ipsum dolor</li>
				<li>Lorem ipsum dolor</li>
			</ul>
		</div>
		<footer class="container-fluid text-center">
			<p>Copyright &copy; by Kawal 2019-2020<br>All rights Reserved by Dropex<br>*** Happy Tuesday ***</p>
		</footer>
	</body>
</html>
	