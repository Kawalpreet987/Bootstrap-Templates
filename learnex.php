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
			background:#185999;
			margin-bottom: 0;
			border-radius:0;
			border:0;
		}
		.navbar > .container {
				text-align: center;
			}
			.navbar-header,.navbar-brand,.navbar .navbar-nav,.navbar .navbar-nav > li {
				float: none;
				display: inline-block;
			}
			.collapse.navbar-collapse {
				float: none;
				display: inline-block!important;
				width: auto;
				clear: none;
			}
		}
		.navbar li
		{
			border-right:1px solid white;
		}
		.navbar li:last-child
		{
			border-right:none;
		}
		.navbar a
		{
			color:white !important;
			
		}
		.text
		{
			font-size:30px;
		}
		.color
		{
			height:333px;
			background:#1965a3;
			color:white;
		}
		.margin
		{
			margin-top:120px;
		}
		.btn 
		{
			background:gray;
		}
		.btn a
		{
			color:white;
			text-decoration:none;
		}
		.thumbnail:hover
		{
			background:#1965a3;
		}
		h2
		{
			color:#1965a3;
		}
		.span
		{
			color:#a85859;
		}
		footer
		{
			background:#1965a3;
			color:white;
			padding:20px;
		}
		@media screen and ( min-width:240px ) and ( max-width:940px )
		{
			.navbar li
			{
			width:100%;
			border-bottom:1px solid white;
			}
			.navbar li:last-child
			{
			border-bottom:none;	
			}
		</style>
	</head>
	<body>
		<nav class="navbar navbar-default">
			<div class="container">
					<ul class="nav navbar-nav ">
						<li><a href="#">About Us</a></li>
						<li><a href="#">Our Programs</a></li>
						<li><a href="#">Our Staff</a></li>
						<li><a href="#">Blog</a></li>
						<li><a href="#">Contacts</a></li>
					</ul>
			</div>
		</nav>
		<div class="container-fluid color">
			<h3 class="text-center text">Learnex</h3>
			<p class="text-center">Education center</p>
			<div class="container">
				<img src="images/learnex.jpg" style="width:100%; height:350px;">
			</div>
		</div>
		<div class="container margin">
			<div class="row text-center">
				<div class="col-sm-3">
					<div class="thumbnail">
						<img src="images/pic1.jpg" style="width:100%;">
						<h4  class="text-center">lorem ipsum</h4>
						<button type="button" class="btn"><a href="#">Read More</a></button>
					</div>
				</div>
				<div class="col-sm-3">
					<div class="thumbnail">
						<img src="images/pic2.jpg" style="width:100%;">
						<h4  class="text-center">lorem ipsum</h4>
						<button type="button" class="btn"><a href="#">Read More</a></button>
					</div>
				</div>
				<div class="col-sm-3">
					<div class="thumbnail">
						<img src="images/pic3.jpg"  style="width:100%;">
						<h4 class="text-center">lorem ipsum</h4>
						<button type="button" class="btn"><a href="#">Read More</a></button>
					</div>
				</div>
				<div class="col-sm-3">
					<div class="thumbnail">
						<img src="images/pic4.jpg"  style="width:100%;">
						<h4 class="text-center">lorem ipsum</h4>
						<button type="button" class="btn bg-1"><a href="#">Read More</a></button>
					</div>
				</div>
			</div>
		</div>
		<div class="container">
			<div class="row">
				<div class="col-sm-4">
					<h2>News and Events</h2>
					<p>18.06.2019</p>
					<p>sed do eiusmod tempor incididunt ut labore et dolore magna aliquased do eiusmod tempor incididunt ut labore et dolore magna aliqua</p>
					<hr>
					<h2>News and Events</h2>
					<p>18.06.2019</p>
					<p>sed do eiusmod tempor incididunt ut labore et dolore magna aliquased do eiusmod tempor incididunt ut labore et dolore magna aliqua</p>
					<button type="button" class="btn bg-1"><a href="#">Read More</a></button>					
				</div>
				<div class="col-sm-4">
					<img src="images/pic5.jpg" style="width:100%;"><br>
					<h2>Welcome</h2>
					<p> tempor incididunt ut labore et dolore magna</p><br>
					<p>sed do eiusmod tempor incididunt ut labore et dolore magna aliquased do eiusmod tempor incididunt ut labore et dolore magna aliqua</p>
					<button type="button" class="btn bg-1"><a href="#">Read More</a></button>					
				</div>
				<div class="col-sm-4">
					<h2>Most Popular</h2><br>
					<h4 class="span">labore et dolore magna</h4>
					<p>sed do eiusmod tempor incididunt ut labore et dolore magna aliquased do eiusmod tempor incididunt ut labore et dolore magna aliqua</p>
					<hr>
					<h4  class="span">labore et dolore magna</h4>
					<p>sed do eiusmod tempor incididunt ut labore et dolore magna aliquased do eiusmod tempor incididunt ut labore et dolore magna aliqua</p>
					<hr>
					<h4 class="span">labore et dolore magna</h4>
					<p>sed do eiusmod tempor incididunt ut labore et dolore magna aliquased do eiusmod tempor incididunt ut labore et dolore magna aliqua</p>
					<hr>
				</div>
			</div>
		</div>
		<footer class="container-fluid">
			Learnex &copy 2012 *Privacy Policy*
		</footer>
	</body>
</html>