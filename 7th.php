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
			height:550px;
		}
		.sidenav
		{
			background-color: #f1f1f1;
			height:100%;
		}
		@media screen and ( min-width:240px ) and ( max-width:940px)
		{
			.row.content
			{
				height:auto;
			}
		}
		</style>
	</head>
	<body>
		<nav class="navbar navbar-inverse visible-xs">
			<div class="container-fluid">
				<div class="navbar-header">
					<button type="button" class="navbar-toggle" data-target="#mynav" data-toggle="collapse">
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
					</button>
					<a href="#" class="navbar-brand">Logo</a>
				</div>
				<div class="collapse navbar-collapse" id="mynav">
					<ul class="nav navbar-nav">
						<li class="active"><a href="#" >Dashboard</a></li>
						<li><a href="#">Age</a></li>
						<li><a href="#">Gender</a></li>
						<li><a href="#">Geo</a></li>
					</ul>
				</div>
			</div>
		</nav>
		<div class="container-fluid ">
			<div class="row content">
				<div class="col-sm-3 sidenav hidden-xs">
					<h3>Logo</h3>
					<ul class="nav nav-pills nav-stacked">
						<li class="active"><a href="#" >Dashboard</a></li>
						<li><a href="#">Age</a></li>
						<li><a href="#">Gender</a></li>
						<li><a href="#">Geo</a></li>
					</ul>
				</div><br>
				<div class="col-sm-9">
					<div class="well">
						<h4>My Dashboard</h4>
						<p>Some Text....</p>
					</div>
					<div class="row">
						<div class="col-sm-3">
							<div class="well">
								<h4>Users</h4>
								<p>1 Millions</p>
							</div>
						</div>
						<div class="col-sm-3">
							<div class="well">
								<h4>Pages</h4>
								<p>100 Millions</p>
							</div>
						</div>
						<div class="col-sm-3">
							<div class="well">
								<h4>Sessions</h4>
								<p>10 Millions</p>
							</div>
						</div>
						<div class="col-sm-3">
							<div class="well">
								<h4>Bounce</h4>
								<p>30%</p>
							</div>
						</div>
					</div>
					<div class="row">
						<div class="col-sm-4">
							<div class="well">
								<p>text</p>
								<p>text</p>
								<p>text</p>
							</div>
						</div>
						<div class="col-sm-4">
							<div class="well">
								<p>text</p>
								<p>text</p>
								<p>text</p>
							</div>
						</div>
						<div class="col-sm-4">
							<div class="well">
								<p>text</p>
								<p>text</p>
								<p>text</p>
							</div>
						</div>
					</div>
					<div class="row">
						<div class="col-sm-8">
							<div class="well">
								<p>text</p>
							</div>
						</div>
						<div class="col-sm-4">
							<div class="well">
								<p>text</p>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</body>
</html>