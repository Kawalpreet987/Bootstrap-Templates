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
			font-family: Montserrat, sans-serif;
			margin-bottom: 0;
			background-color: #2d2d30;
			font-size: 11px ;
			letter-spacing: 4px;
			opacity:0.9;
		  }
		  .navbar li a, .navbar .navbar-brand { 
			color: #d5d5d5;
		  }
		  .navbar-nav li a:hover {
			color: #fff;
		  }
		  .navbar-nav li.active a {
			color: #fff;
			background-color: #29292c ;
		  }
		  .navbar-default .navbar-toggle {
			border-color: transparent;
			
		  }
		.dropdown-toggle {
			color: #fff;
			background-color: #555 ;
		  }
		  .dropdown-menu li a {
			color: #000;
		  }
		  .dropdown-menu li a:hover {
			background-color: red;
		  }
		  .carousel-inner img {
			-webkit-filter: grayscale(90%);
			filter: grayscale(90%); /* make all photos black and white */ 
			width: 100%; /* Set width to 100% */
			margin: auto;
          }
			.person {
			border: 10px solid transparent;
			margin-bottom: 25px;
			width: 80%;
			height: 80%;
			opacity: 0.7;
		  }
		  .person:hover {
			border-color: #f1f1f1;
		  }
		  h3, h4 {
			margin: 10px 0 30px 0;
			letter-spacing: 10px;      
			font-size: 20px;
			color: #111;
		  }
		  .container {
			padding: 80px 120px;
		  }
		  .bg-1 {
			background: #2d2d30;
			color: #bdbdbd;
		  }
		  .bg-1 h3 {
			  color: #fff;}
		  .list-group-item:first-child {
			border-top-right-radius: 0;
			border-top-left-radius: 0;
		  }
		  .thumbnail {
			padding: 0 0 15px 0;
			border: none;
			border-radius: 0;
		  }
		  .thumbnail p {
			margin-top: 15px;
			color: #555;
		  }
		   .btn {
			padding: 10px 20px;
			background-color: #333;
			color: #f1f1f1;
			border-radius: 0;
			transition: .2s;
		  }
		  .btn:hover, .btn:focus {
			border: 1px solid #333;
			background-color: #fff;
			color: #000;
		  }
		  .modal-header, h4, .close {
			background-color: #333;
			color: #fff !important;
			text-align: center;
			font-size: 30px;
		  }
		  .modal-header, .modal-body {
			padding: 40px 50px;
		  }
		  footer {
			background-color: #2d2d30;
			color: #f5f5f5;
			padding: 32px;
		  }
		  footer a {
			color: #f5f5f5;
		  }
		  footer a:hover {
			color: #777;
			text-decoration: none;
		  }  
		</style>
	</head>
	<body id="myPage">
		<nav class="container-fluid">
			<div class="navbar navbar-inverse navbar-fixed-top">
				<div class="navbar-header">
					<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#mynav">
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
					</button>
					<a href="#" class="navbar-brand">Logo</a>
				</div>
				<div class="collapse navbar-collapse" id="mynav">
					<ul class="nav navbar-nav navbar-right">
						<li ><a href="#myPage" >HOME</a></li>
						<li><a href="#band">BAND</a></li>
						<li><a href="#tour">TOUR</a></li>
						<li><a href="#contact">CONTACT</a></li>
						<li class="dropdown">
							<a href="#" class="dropdown-toggle" data-toggle="dropdown">MORE
								<span class="caret"></span>
							</a>
							<ul class="dropdown-menu">
								<li><a href="#">Merchandise</a></li>
								<li><a href="#">Extras</a></li>
								<li><a href="#">Media</a></li> 
							</ul>
						</li>
						<li><a href="#"><span class="glyphicon glyphicon-search"></span></a></li>	
					</ul>
				</div>
			</div>
		</nav>
		<div class="carousel slide" data-ride="carousel" id="mycarousel">
			<ol class="carousel-indicators">
				<li class="active" data-target="#mycarousel" data-slide-to="0"></li>
				<li data-target="#mycarousel" data-slide-to="1"></li>
				<li data-target="#mycarousel" data-slide-to="2"></li>
			</ol>
			<div class="carousel-inner" role="listbox">
				<div class="item active">
					<img src="images/concert1.jpg" alt="New York" width="1200" height="700">
					<div class="carousel-caption">
						<h3>New York</h3>
						<p>The atmosphere in New York is lorem ipsum.</p>
					</div>
				</div>
				<div class="item ">
					<img src="images/concert2.jpg"  alt="New York"width="1200" height="700">
					<div class="carousel-caption">
						<h3>New York</h3>
						<p>The atmosphere in New York is lorem ipsum.</p>
					</div>
				</div>
				<div class="item">
					<img src="images/concert3.jpg" alt="New York" width="1200" height="700">
					<div class="carousel-caption">
						<h3>New York</h3>
						<p>The atmosphere in New York is lorem ipsum.</p>
					</div>
				</div>
			</div>
			<a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
			  <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
			  <span class="sr-only">Previous</span>
			</a>
			<a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
			  <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
			  <span class="sr-only">Next</span>
			</a>
		</div>
		<div class="container text-center" id="band">
			<h3>THE BAND</h3>
			<p><em>WE LOVE MUSIC</em></p>
			<p>
				We have created a fictional band website. Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
			</p>
			<br>
			<div class="row">
				<div class="col-sm-4">
					<p><strong>NAME</strong></p>
					<a href="#demo1" data-toggle="collapse">
						<img src="images/bandmember.jpg" class="img-circle person">
					</a>
					<div id="demo1" class="collapse">
						<p>Guitarist and Lead Vocalist</p>
						<p>Loves long walks on the beach</p>
						<p>Member since 1988</p>
					</div>
				</div>
				<div class="col-sm-4">
					<p><strong>NAME</strong></p>
					<a href="#demo2" data-toggle="collapse">
						<img src="images/bandmember.jpg" class="img-circle person">
					</a>
					<div id="demo2" class="collapse">
						<p>Guitarist and Lead Vocalist</p>
						<p>Loves long walks on the beach</p>
						<p>Member since 1988</p>
					</div>
				</div>
				<div class="col-sm-4">
					<p><strong>NAME</strong></p>
					<a href="#demo3" data-toggle="collapse">
						<img src="images/bandmember.jpg" class="img-circle person">
					</a>
					<div id="demo3" class="collapse">
						<p>Guitarist and Lead Vocalist</p>
						<p>Loves long walks on the beach</p>
						<p>Member since 1988</p>
					</div>
				</div>
			</div>
		</div>
		<div class="bg-1" id="tour">
			<div class="container">
				<h3 class=" text-center"><strong>TOUR DATES</strong></h3>
				<p class=" text-center"><em>Lorem ipsum we'll play you some music.<br> Remember to book your tickets!</em></p>
				<ul class="list-group">
					<li class="list-group-item">SEPTEMBER<span class="label label-danger">Sold Out</span></li>
					<li class="list-group-item">SEPTEMBER<span class="label label-danger">Sold Out</span></li>
					<li class="list-group-item">SEPTEMBER<span class="badge">3</span></li>
				</ul>
				<div class="row text-center">
					<div class="col-sm-4">
						<div class="thumbnail">
							<img src="images/paris.jpg " width="400" height="300">
							<p><strong>Paris</strong></p>
							<p>Friday 27 November 2015</p>
							<button type="button" class="btn" data-toggle="modal" data-target="#myModal">Buy Tickets</button>
						</div>
					</div>
					<div class="col-sm-4">
						<div class="thumbnail">
							<img src="images/paris.jpg" width="400" height="300">
							<p><strong>Paris</strong></p>
							<p>Friday 27 November 2015</p>
							<button type="button" class="btn" data-toggle="modal" data-target="#myModal">Buy Tickets</button>
						</div>
					</div>
					<div class="col-sm-4">
						<div class="thumbnail">
							<img src="images/paris.jpg" width="400" height="300">
							<p><strong>Paris</strong></p>
							<p>Friday 27 November 2015</p>
							<button type="button" class="btn" data-toggle="modal" data-target="#myModal">Buy Tickets</button>
						</div>
					</div>
				</div>
			</div>
			<div class="modal fade" id="myModal" role="dialog">
				<div class="modal-dialog">
						<div class="modal-content">
							<div class="modal-header">
								<button type="button" class="close" data-dismiss="modal">x</button>
								<h4><span class="glyphicon glyphicon-lock"></span> Tickets</h4>
							</div>
							<div class="modal-body">
								<form>
									<div class="form-group">
										<label><span class="glyphicon glyphicon-shopping-cart"></span>Tickets, $23 per person</label>
										<input type="number" class="form-control" placeholder="enter number">
									</div>
									<div class="form-group">
										<label><span class="glyphicon glyphicon-user"></span>Send To</label>
										<input type="text" class="form-control" placeholder="enter email">
									</div>
									<button type="button" class="btn btn-block">Pay   
										<span class="glyphicon glyphicon-ok"></span>
									</button>
								</form>
							</div>
							<div class="modal-footer">
								<button class="btn btn-danger btn-deafult pull-left" data-dismiss="modal">
									<span class="glyphicon glyphicon-remove"></span>Cancel
								</button>
								<p><em>Need <a href="#">Help?</a></em></p>
							</div>
						</div>
				</div>
			</div>
		</div>
		<div class="container" id="contact">
			<h3 class="text-center">CONTACTS</h3>
			<p class="text-center"><em>WE Love Our Fans</em></p>
			<div class="row">
				<div class="col-sm-4">
					<p>Fan ? Drop a Note.</p>
					<p><span class="glyphicon glyphicon-map-marker"></span> Chicago,US</p>
					<p><span class="glyphicon glyphicon-phone"></span> Phone: +00 1515151515</p>
					<p><span class="glyphicon glyphicon-envelope"></span> Email: mail@mail.com</p>
				</div>
				<div class="col-sm-8">
					<div class="row">
						<div class="col-sm-6 form-group">
							<input type="text" placeholder="name" class="form-control" required>
						</div>
						<div class="col-sm-6  form-group">
							<input type="text" placeholder="email"  class="form-control" required>
						</div>
					</div>
					<textarea class="form-control" placeholder="comments" type="text" required rows="5"></textarea><br>
					<div class="row">
						<div class="col-md-12 form-group">
							<button class="btn pull-right" type="submit">Send</button>
						</div>
					</div>
				</div>
			</div><br>
			<h3 class="text-center">From The Blog</h3>
			<ul class="nav nav-tabs">
				<li class="active"><a data-toggle="tab" href="#home" aria-expanded="false">Mike</a></li>
				<li><a data-toggle="tab" href="#menu1" aria-expanded="false">Chandler</a></li>
				<li><a data-toggle="tab" href="#menu2" aria-expanded="false">Peter</a></li>
			</ul>
			<div class="tab-content">
				<div id="home" class="tab-pane fade in active">
					<h2>Mike Ross, Manager</h2>
					<p>Man, we've been on the road for some time now. Looking forward to lorem ipsum.</p>
				</div>
				 <div id="menu1" class="tab-pane fade">
					<h2>Chandler Bing, Guitarist</h2>
					<p>Always a pleasure people! Hope you enjoyed it as much as I did. Could I BE.. any more pleased?</p>
				</div>
				<div id="menu2" class="tab-pane fade">
					<h2>Peter Griffin, Bass player</h2>
					<p>I mean, sometimes I enjoy the show, but other times I enjoy other things.</p>
				</div>
			</div>
		</div>
		<img src="images/map.jpg" class="img-responsive" width="100%">
		<footer class="text-center">
			 <a class="up-arrow" href="#myPage" data-toggle="tooltip" title="TO TOP">
				<span class="glyphicon glyphicon-chevron-up"></span>
			  </a><br><br>
			  <p>Bootstrap Theme Made By <a href="https://www.w3schools.com" data-toggle="tooltip" title="Visit w3schools">www.w3schools.com</a></p> 
		</footer>
	</body>
</html>