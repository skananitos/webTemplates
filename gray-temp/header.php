<!DOCTYPE html>
<html ng-app="rootApp">
<head>
	<title>Gray Template</title>
	<meta charset="utf-8">
	<meta name="Keywords" content="HTML,CSS,JavaScript,PHP,Bootstrap,AngularJS,Web development,template">
	<meta name="Description" content="An easy to use web template">
	<link rel="icon" href="http://ekoletsou.gr/earth.png" type="image/x-icon">
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
	<meta name="author" content="https://github.com/skananitos">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="css/style.css">
	<script src="http://ajax.googleapis.com/ajax/libs/angularjs/1.4.8/angular.min.js"></script>
	<script src="//ajax.googleapis.com/ajax/libs/angularjs/1.4.8/angular-animate.js"></script>
    <script src="//angular-ui.github.io/bootstrap/ui-bootstrap-tpls-1.0.3.js"></script>
   <!-- <script type="text/JavaScript" src="js/myHideApp.js"></script>
	<script type="text/JavaScript" src="js/myCollapseCtrl.js"></script>
	<script type="text/JavaScript" src="js/myNoteApp.js"></script>
	<script type="text/JavaScript" src="js/myNoteCtrl.js"></script>-->
	<script type="text/JavaScript" src="js/myModule.js"></script>
	
	<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script>

</head>
<body>
	<!--Top title -->
	<nav class="navbar navbar-default navbar-fixed-top">
    <div class="container">  
	<!-- Toggle get grouped for better mobile display -->
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#myNavbar" aria-expanded="false">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
    </div>	

    <!-- Collect the nav links, forms, and other content for toggling -->
	
	<div class="collapse navbar-collapse" id="myNavbar">
      <ul class="nav navbar-nav">
        <li class="active"><a href="#">Home <span class="sr-only">(current)</span></a></li>
        <li><a href="#">Contact</a></li>
      </ul>
      <ul class="nav navbar-nav navbar-right">
	  <form class="navbar-form navbar-left" role="search">
        <div class="form-group">
          <input type="text" class="form-control" placeholder="Search">
        </div>
        <button type="submit" class="btn btn-default out-more"><span class="glyphicon glyphicon-play in-more" aria-hidden="true"></span></button>
      </form>
        <li class="active"><a href="#">EN <span class="sr-only">(current)</span></a></li>
        <li><a href="#">GR</a></li>
      </ul>
    </div><!-- /.navbar-collapse -->
	</div><!-- /.container -->
	</nav>
	
	<!--LOGO & LOGGIN-->
	<div class="row marg-top">
	<div class="col-md-2"></div>
	<div class="col-md-6">
		<div class="jumbotron my-jumbotron">
			<a class="navbar-brand" href="#">
			<img src="img/logo.png" alt="Brand" class="img-rounded" id="logo"></a>
		</div>
	</div>
	<div class="col-md-2">	
		<div class="jumbotron my-jumbotron">
		<button type="submit" class="btn btn-default out" style="color:white">MEMBERS LOGIN <span class="glyphicon glyphicon-play in" aria-hidden="true"></span></button>
	</div>
	<div class="col-md-2"></div>
	</div>
	<div class="row"></div>
	
	<!--MENU -->
	<div class="row">
	<div class="col-md-2"></div>
	<div class="col-md-8">
			<nav class="navbar navbar-default">
			  <div class="container navbar-collapse collapse nav-container" id="navbar">
			  <ul class="nav navbar-nav">
				<li class="dropdown">
				  <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="navigation" aria-haspopup="true" aria-expanded="false"><h4>ABOUT US</h4></a>
				</li>
				<li class="dropdown">
				  <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="navigation" aria-haspopup="true" aria-expanded="false"><h4>WHAT WE OFFER</h4></a>
				</li>
				<li class="dropdown">
				  <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="navigation" aria-haspopup="true" aria-expanded="false"><h4>WHERE YOU CAN FIND US</h4></a>
				</li>
				<li class="dropdown">
				  <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="navigation" aria-haspopup="true" aria-expanded="false"><h4>HOW YOU CAN FIND US</h4></a>
				</li>
				<li class="dropdown">
				  <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="navigation" aria-haspopup="true" aria-expanded="false"><h4>MY PRIVATE WEB</h4></a>
				  <ul class="dropdown-menu">
					<li><a href="#"><h4>Register</h4></a></li>
					<li><a href="#"><h4>Sign in</h4></a></li>
					<li><a href="#"><h4>FAQs</h4></a></li>
					<li><a href="#"><h4>Info</h4></a></li>
					<li><a href="#"><h4>Demo</h4></a></li>
				  </ul>
				</li>
			  </ul>
			
		  </div><!-- /.container -->
		</nav>
		</div>
		<div class="col-md-2"></div>
	</div>
	<div class="row"></div>
	