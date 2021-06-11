<!DOCTYPE html>
<html lang="en">
	<head>
	  <!-- Theme Made By www.w3schools.com - No Copyright -->
		<title>Real Estate</title>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
		<link href="https://fonts.googleapis.com/css?family=Lato" rel="stylesheet" type="text/css">
		<link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet" type="text/css">
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
		<style>
		.navbar
		{
			background:white;
			border:0px;
			padding-top:20px;
			color:#1f3870 !important;
		}
			.navbar-brand
			{
				font-size:30px;
				color:#1f3870 !important;
			}
			.date span
			{
				font-size:15px;
				display:block;
			}
			.date
			{
				float:left;
				margin:4px 0px 0px 120px;
			}
			.navbar a
			{
				color:#1f3870 !important;
			}
			.bg1
			{
				background-image:url('images/home1.jpg');
				background-size:cover;
				height:650px;
			}
			.bg1 h3
			{
				font-size:50px;
				color:white;
				font-weight:bold;
				padding-top:200px;
			}
			.bg1 p
			{
				font-size:20px;
				color:white;
			}
			button
			{
				margin-top:50px;
			}
			.bg2
			{
				background:#1f3870;
				color:white;
			}
			.bg3
			{
				background:#1f3870;
				margin-top:15px;
			}
			.bg3 a
			{
				color:white;
			}
			.media
			{
				padding-top:30px;
			}
			.media-body
			{
				padding-left:20px;
			}
			.media-heading 
			{
				font-size:30px;
				font-weight:bold;
			}
			.line h3::after
			{
				position:absolute;
				content: "";
				background:red;
				height:3px;
				width:50px;
			}
			.media-heading1
			{
				font-size:25px;
				font-weight:bold;
				padding-top:20px;
			}
			.bg4 li
			{
				text-decoration:none;
			}
			.bg4 li::before
			{
				content:'\f00c';
				font-family:'FontAwesome';
				color:#1f386e;
				font-size:20px;
				font-weight:300;
			}
			.bg5
			{
				background:#f6f6f6;
				padding:50px;
			}
			.bg6
			{
				padding:60px;
			}
			.bg7
			{
				font-weight:bold;
				font-size:30px;
				padding-bottom:30px;
			}
			.thumbnail
			{
				padding:0px;
			}
			h4
			{
				font-size:20px;
				font-weight:bold;
			}
			.bg9
			{
				background:#f6f6f6;
				padding:50px;
			}
			.bg10
			{
				padding:15px;
			}
			.bg11
			{
				padding:60px;
				background:#1f3870;
				color:white;
			}
			.bg12
			{
				margin-top:0px;
				background:#1f3870;
			}
			.bg12 a
			{
				color:white;
			}
			.bg13 h2
			{
				color:white;
				font-size:20px;
			}
			.bg14
			{
				padding-bottom:60px;
			}
			.fa
			{
				padding-left:30px;
				font-size:20px;
			}
			.bg15
			{
				padding:20px;
				font-size:15px;
			}
			.bg15 span
			{
				color:#1f3870;
			}
			.media-left img{
				height:350px;
				width:500px;
			}
			@media screen and ( min-width:240px ) and ( max-width:940px )
			{
				.media-body
				{
					display:block;
					width:100%;
					padding:0;
				}
				.media-left{
					padding:0px;
				}
				.media-left img{
					width:350px;
				}
				.bg11 .form textarea{
					width:325px;
				}
			}
		</style>
	</head>
	<body>
		<nav class="navbar navbar-default">
			<div class="container">
				<div class="navbar-header">
					<button class="navbar-toggle" data-toggle="collapse" data-target="#mynav">
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
					</button>
					<a class="navbar-brand"  href="#"><strong>INNOVA</strong></a>
					<div class="date"><span>CALL TODAY</span>9876543210</div>
				</div>
				<div class="collapse navbar-collapse" id="mynav">
					<ul class="nav navbar-nav navbar-right">
						<li><a href="#">HOME</a></li>
						<li><a href="#">HOME</a></li>
						<li><a href="#">HOME</a></li>
						<li><a href="#">HOME</a></li>
						<li><a href="#">HOME</a></li>
					</ul>
				</div>
			</div>
		</nav>	
		<div class="container-fluid bg1 text-center">
			<div class="container">
				<h3>Home Construction <br>& Remodeling</h3>
				<p>
					It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters,
				</p>
				<button class="btn btn-danger">Learn More</button>
			</div>
		</div>
		<div class="container-fluid bg2">
			<div class="container text-center ">
				<div class="col-sm-6">
					<h3>Cost for your home renovation project</h3>
					<p>
						It is a long established fact that a reader will be distracted by the readable content 
					</p>
				</div>
				<div class="col-sm-6">
					<button class="btn btn-default bg3"><a href="#">Free Estimate</a></button>
				</div>
			</div>
		</div>
		<div class="container-fluid bg5">
			<div class="container ">
				<div class="media">
					<div class="media-left">
						<img src="images/innova1.jpg">
					</div>
					<div class="media-body">
						<h3 class="media-heading line">Who We Are?</h3>
						<p>
							It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using 'Content here, content here', making it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for 'lorem ipsum' will uncover many web sites still in their infancy. Various versions have evolved over the years, sometimes by accident, sometimes on purpose (injected humour and the like).
						</p>
						<h5 class="media-heading1">Why Choose Us</h5>
						<div class="col-sm-6 bg4">
							<ul>
								<li>Years Of Experience</li>
								<li>Fully Insured</li>
								<li>Cost Control Experts</li>
								<li>100% Satisfaction Guarantee</li>
							</ul>
						</div>
						<div class="col-sm-6 bg4">
							<ul>
								<li>Free Constulaton</li>
								<li>Satisfied Costumers</li>
								<li>Project Management</li>
								<li>Affordable Prices</li>
							</ul>
						</div>	
					</div>
				</div>
			</div>
		</div>
		<div class="container-fluid bg6">
			<div class="container">
				<h3 class=" bg7 line"> Our Services</h3>
				<div class="row">
					<div class="col-sm-4">
						<div class="thumbnail">
							<img src="images/house1.jpg" style="height:200px; width:100%">
							<h4 class="bg8">New Home Construction</h4>
							<p>
								It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters
							</p>
						</div>
					</div>
					<div class="col-sm-4">
						<div class="thumbnail">
							<img src="images/house2.jpg" style="height:200px; width:100%">
							<h4 class="bg8">New Home Construction</h4>
							<p>
								It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters
							</p>
						</div>
					</div>
					<div class="col-sm-4">
						<div class="thumbnail">
							<img src="images/house3.jpg" style="height:200px; width:100%">
							<h4 class="bg8">New Home Construction</h4>
							<p>
								It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters
							</p>
						</div>
					</div>
				</div>
				<div class="row">
					<div class="col-sm-4">
						<div class="thumbnail">
							<img src="images/house4.jpg" style="height:200px; width:100%">
							<h4 class="bg8">New Home Construction</h4>
							<p>
								It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters
							</p>
						</div>
					</div>
					<div class="col-sm-4">
						<div class="thumbnail">
							<img src="images/house5.jpg" style="height:200px; width:100%">
							<h4 class="bg8">New Home Construction</h4>
							<p>
								It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters
							</p>
						</div>
					</div>
					<div class="col-sm-4">
						<div class="thumbnail">
							<img src="images/house6.jpg" style="height:200px; width:100%">
							<h4 class="bg8">New Home Construction</h4>
							<p>
								It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters
							</p>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="container-fluid bg9">
			<div class="container">
			<h3 class=" bg7 line"> Our Work</h3>
				<div class="row bg10">
					<div class="col-sm-4">
						<img src="images/house1.jpg" style="height:200px; width:100%">
					</div>
					<div class="col-sm-4">
						<img src="images/house2.jpg" style="height:200px; width:100%">
					</div>
					<div class="col-sm-4">
						<img src="images/house3.jpg" style="height:200px; width:100%">
					</div>
				</div>
				<div class="row bg10">
					<div class="col-sm-4">
						<img src="images/house4.jpg" style="height:200px; width:100%">
					</div>
					<div class="col-sm-4">
						<img src="images/house5.jpg" style="height:200px; width:100%">
					</div>
					<div class="col-sm-4">
						<img src="images/house6.jpg" style="height:200px; width:100%">
					</div>
				</div>
				<div class="row bg10">
					<div class="col-sm-4">
						<img src="images/house7.jpg" style="height:200px; width:100%">
					</div>
					<div class="col-sm-4">
						<img src="images/house8.jpg" style="height:200px; width:100%">
					</div>
					<div class="col-sm-4">
						<img src="images/house9.jpg" style="height:200px; width:100%">
					</div>
				</div>
			</div>
		</div>
		<div class="container-fluid bg6">
			<div class="container">
				<h3 class=" bg7 line"> Our Services</h3>
				<div class="row">
					<div class="col-sm-4">
						<div class="media">
							<div class="media-left">
								<img src="images/house1.jpg" style="height:50px; width:50px;">
							</div>
							<div class="media-body">
								<p>
								It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum.
								</p>
								<h4 class="media-heading2"><strong>It is a long established </strong></h4>
							</div>
						</div>
					</div>
					<div class="col-sm-4">
						<div class="media">
							<div class="media-left">
								<img src="images/house2.jpg" style="height:50px; width:50px;">
							</div>
							<div class="media-body">
								<p>
								It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum.
								</p>
								<h4 class="media-heading2"><strong>It is a long established </strong></h4>
							</div>
						</div>
					</div>
					<div class="col-sm-4">
						<div class="media">
							<div class="media-left">
								<img src="images/house3.jpg" style="height:50px; width:50px;">
							</div>
							<div class="media-body">
								<p>
								It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum.
								</p>
								<h4 class="media-heading2"><strong>It is a long established </strong></h4>
							</div>
						</div>
					</div>
				</div>
				<div class="row">
					<div class="col-sm-4">
						<div class="media">
							<div class="media-left">
								<img src="images/house4.jpg" style="height:50px; width:50px;">
							</div>
							<div class="media-body">
								<p>
								It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum.
								</p>
								<h4 class="media-heading2"><strong>It is a long established </strong></h4>
							</div>
						</div>
					</div>
					<div class="col-sm-4">
						<div class="media">
							<div class="media-left">
								<img src="images/house5.jpg" style="height:50px; width:50px;">
							</div>
							<div class="media-body">
								<p>
								It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum.
								</p>
								<h4 class="media-heading2"><strong>It is a long established </strong></h4>
							</div>
						</div>
					</div>
					<div class="col-sm-4">
						<div class="media">
							<div class="media-left">
								<img src="images/house6.jpg" style="height:50px; width:50px;">
							</div>
							<div class="media-body">
								<p>
								It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum.
								</p>
								<h4 class="media-heading2"><strong>It is a long established </strong></h4>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="container-fluid bg11">
			<div class="container">
				<div class="row bg14">
					<div class="col-sm-9">
						<h3 class=" bg7 line">Get In Touch</h3><hr>
						<p>
							It is a long established fact that a reader will be distracted by the readable content
						</p>
						<div class="form">
							<input type="textbox" class="form-group inline" size="40" placeholder="name">
							<input type="email" class="form-group inline" size="40" placeholder="email">
							<textarea class="form-group" rows="5" placeholder="message" cols="90"></textarea><br>
							<button class="btn btn-default bg12"><a href="#">Read More</a></button>
						</div>
					</div>
					<div class="col-sm-3">
						<h4 class=" bg13line">contact</h3><hr><br><br>
						<address>
							address:<br>
							987,model town,ludhiana,punjab<br><br>
							email:<br>
							abc@gmail.com<br><br>
							phone:<br>234567890 
						</address>
					</div>
				</div><hr>
				<div class="icons text-center">
					<i class="fa fa-facebook"></i>
					<i class="fa fa-twitter"></i>
					<i class="fa fa-google-plus"></i>
					<i class="fa fa-linkedin"></i>
				</div>
			</div>
		</div>
		<div class="container-fluid">
			<div class="container bg15 text-center">
				<p>&copy; 2017 *Privacy Policy* designed by <span>Kawalpreet Kaur</span></p>
			</div>
		</div>
	</body>
</html>