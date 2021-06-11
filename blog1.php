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
	  .row.content
	  {
		  height:1500px;
	  }
	  .sidenav
	  {
		 background:#f1f1f1;
		 height:100%;
	  }
	  .input-grp
	  {
		 padding-left:10px;
	  }
	footer {
      background-color: #555;
      color: white;
     padding:15px;
    }
	  </style>
	</head>
	<body>
		<div class="container-fluid">
			<div class="row content">
				<div class="col-sm-3 sidenav">
					<h4>John's Blog</h4>
					<ul class="nav nav-pills nav-stacked">
						<li class="active"><a href="#">Home</a></li>
						<li><a href="#">Friends</a></li>
						<li><a href="#">Family</a></li>
						<li><a href="#">Photos</a></li>
					</ul><br>
					<div class="input-group">
						<input type="text" placeholder="search blog........." class="form-control" >
						<span class="input-group-btn">
						<button class="btn btn-default">
							<span class="glyphicon glyphicon-search"></span>
						</button>
						</span>
					</div>
				</div>
				<div class="col-sm-9">
					<h5>Recent News</h5>
					<hr>
					<h2>I LOVE FOOD</h2>
					<h5><span class="glyphicon glyphicon-time"></span> Post by Jane Dane, Sep 27, 2015.</h5>
					<button type="button" class="btn btn-danger">Food</button>
					<button type="button" class="btn btn-primary">Ipsum</button><br><br>
					<p>
						Lorem ipsum dolor sit amet, consectetur adipiscing elit,
						sed do eiusmod tempor incididunt ut labore et dolore magna aliqua
						. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris
						nisi ut aliquip ex ea commodo consequat. Excepteur sint occaecat cupidatat
						non proident, sunt in culpa qui officia deserunt mollit anim id est laborum 
						consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore
						magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris
						nisi ut aliquip ex ea commodo consequat.
					</p><br>
					<h5>Recent News</h5>
					<hr>
					<h2>I LOVE FOOD</h2>
					<h5><span class="glyphicon glyphicon-time"></span> Post by Jane Dane, Sep 27, 2015.</h5>
					<button type="button" class="btn btn-success">Ipsum</button><br><br>
					<p>
						Lorem ipsum dolor sit amet, consectetur adipiscing elit,
						sed do eiusmod tempor incididunt ut labore et dolore magna aliqua
						. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris
						nisi ut aliquip ex ea commodo consequat. Excepteur sint occaecat cupidatat
						non proident, sunt in culpa qui officia deserunt mollit anim id est laborum 
						consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore
						magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris
						nisi ut aliquip ex ea commodo consequat.
					</p><br>
					<h4>Leave A Comment</h4>
					<form role="form">
					<div class="form-group">
						<textarea rows="3" required class="form-control"></textarea>
					</div>
					<button type="submit" class="btn btn-success">Submit</button>
					</form><br>	
					<p><span class="badge">1</span>Comments	:</p>
					<div class="media">
						<div class="media-left">
							<img src="images/bird.jpg" class="img-circle" style="width:60px">
						</div>
						<div class="media-body">
							<h4 class="media-heading">John Doe<small> Sep 29, 2015, 9:12 PM</small></h4>
							<p>
								Lorem ipsumdolor sit amet, consectetur adipiscing elit,
								sed do eiusmod tempor incididunt ut labore et dolore magna aliqua
								Lorem ipsumdolor sit amet, consectetur adipiscing elit,
								sed do eiusmod tempor incididunt ut labore et dolore magna aliqua
							</p>
						</div><br>
						</div>
						<div class="media">
						<div class="media-left">
							<img src="images/bird.jpg" class="img-circle" style="width:60px">
						</div>
						<div class="media-body">
							<h4 class="media-heading">John Doe<small> Sep 29, 2015, 9:12 PM</small></h4>
							<p>
								Lorem ipsumdolor sit amet, consectetur adipiscing elit,
								sed do eiusmod tempor incididunt ut labore et dolore magna aliqua
								Lorem ipsumdolor sit amet, consectetur adipiscing elit,
								sed do eiusmod tempor incididunt ut labore et dolore magna aliqua
							</p><br>
							<p><span class="badge">1</span> Comments	:</p>
							<div class="media">
								<div class="media-left">
									<img src="images/bird.jpg" class="img-circle" style="width:60px">
								</div>
								<div class="media-body">
									<h4 class="media-heading">John Doe<small> Sep 29, 2015, 9:12 PM</small></h4>
									<p>
										Lorem ipsumdolor sit amet, consectetur adipiscing elit,
										sed do eiusmod tempor incididunt ut labore et dolore magna aliqua
										Lorem ipsumdolor sit amet, consectetur adipiscing elit,
										sed do eiusmod tempor incididunt ut labore et dolore magna aliqua
									</p>
								</div>
							</div>
						</div>
					  </div>
				</div>
			</div>
		</div>
		<footer class="container-fluid"><p>Footer text</p></footer>
	</body>
</html>