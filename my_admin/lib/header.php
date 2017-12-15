<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">

	<title>Quiz Admin</title>

	<meta name="description" content="">
	<meta name="author" content="">

	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="apple-mobile-web-app-capable" content="yes">
	<meta name="apple-mobile-web-app-status-bar-style" content="black-translucent">

	<!-- BEGIN CORE CSS -->
	<link rel="stylesheet" href="css/admin1.css">
	<link rel="stylesheet" href="css/elements.css">
	<link rel="stylesheet" href="css/jquery.dataTables.min.css">
	<link rel="stylesheet" href="css/dataTables.bootstrap.css">
	<link rel="stylesheet" href="css/plugins.css">
	<link href="css/datepicker.css" media="all" rel="stylesheet" type="text/css" />
	<link href="css/animate.min.css" rel="stylesheet">
    <link href="css/bootstrap-dropdownhover.min.css" rel="stylesheet">
     <!-- for pop up -->
	<link rel="stylesheet" href="css/style-popup.css"> <!-- Resource style -->
	<link rel="stylesheet" href="css/build.min.css">
    <link rel="stylesheet" href="css/fastselect.min.css">
    
	
	<script src="js/fastselect.standalone.js"></script>
	<script src="js/build.min.js"></script>


	 
	 <style>

            .fstElement { font-size: 17px; }
            .fstToggleBtn { min-width: 16.5em; }

            .fstMultipleMode { display: block; }
            .fstMultipleMode .fstControls { width: 100%; }
            .attireMainNav {
    margin-bottom: 0;
    display: none;
}

        </style>
		<!-- end pop up -->
		
		<style>
	.menu_scroll
	{
	 position: relative;
width: 310px;
height: auto;
overflow: hidden;
max-height:650px;
	}
	.menu_scroll ul {
    height: auto;
    width: 327px;
    overflow-y: scroll;
    overflow-x: hidden;
    max-height:650px;
}
.menu-layer
{
overflow-y: auto;
}
@media(max-width:767px)
{
.menu_scroll
	{
	 position: relative;
width: 100%;
height: auto;
overflow: auto;
max-height:100%;
	}
	.menu_scroll ul {
    height: auto;
    width: 100%;
    overflow-y: scroll;
    overflow-x: hidden;
    max-height:100%;
}
.menu-layer
{
overflow-y: auto;
}
}
	
	</style>
   
	
	<!-- END CORE CSS -->

	

	<script src="js/modernizr.min.js"></script>
<!-- datepicker next-previous off -->
	<!-- <style>
		.datepicker th.prev {
		   visibility: hidden !important;
		}
		.datepicker th.next {
		   visibility: hidden !important;
		}
	</style> -->
</head>
<body>
<?php

date_default_timezone_set('Europe/London');

ini_set('max_input_vars', 90000);

				?>
<style>
body {
  margin: 0 0 0 81px;
  background: #F4FAFB;
}
@media (max-width: 768px) {
  body {
    margin: 0 0 0 0px;
    background: #F4FAFB;
}
.page-header.full-content {
    padding-top: 76px;
    padding-bottom: 10px;
}
}

</style>

	<div class="nav-bar-container">

		<!-- BEGIN ICONS -->
		<div class="nav-menu">
			<div class="hamburger">
				<span class="patty"></span>
				<span class="patty"></span>
				<span class="patty"></span>
				<span class="patty"></span>
				<span class="patty"></span>
				<span class="patty"></span>
			</div><!--.hamburger-->
		</div><!--.nav-menu-->

		
		<div class="nav-user">
			<div class="cross">
				<span class="line"></span>
				<span class="line"></span>
			</div><!--.cross-->
		</div><!--.nav-user-->
		<!-- END OF ICONS -->

		<div class="nav-bar-border"></div><!--.nav-bar-border-->

		<!-- BEGIN OVERLAY HELPERS -->
		<div class="overlay" >
			<div class="starting-point">
				<span></span>
			</div><!--.starting-point-->
			<div class="logo">Admin Panel</div><!--.logo-->
		</div><!--.overlay-->

		<div class="overlay-secondary"></div><!--.overlay-secondary-->
		<!-- END OF OVERLAY HELPERS -->

	</div><!--.nav-bar-container-->
	

	<div class="content">

		<div class="page-header full-content bg-brown">
			<div class="row">
				<div class="col-sm-6">
					<a href="pages.php"><img src="images/logo.png" class="company-logo"></a>
				</div><!--.col-->
				
				<div class="col-sm-6 head-menu-top" >
				<ul class="head-menu">
				<li style="position:relative;">

				<div  class="head-menu-top-1">
					<div class="dropdown">
					  <button class="btn  dropdown-toggle" type="button" data-toggle="dropdown" data-hover="dropdown" data-animations="fadeIn fadeInLeft fadeInUp fadeInRight" style="background-color: #e7512f;color:#fff;">
					  <span class="glyphicon glyphicon-user"></span>&nbsp;<span style="text-transform: capitalize;"><?php echo $_SESSION['username']; ?></span>&nbsp;<span class="caret"></span>
					  </button>
					  <ul class="dropdown-menu">
						<li><a href="setting.php">Profile Setting</a></li>
					  </ul>
					</div>
				  </div>
				  </li>
					<li><a href="logout.php?q=1" class="btn btn-primary btn-ripple">Logout</a></li>
					</ul>
				</div><!--.col-->
			</div><!--.row-->
		</div><!--.page-header-->
		
		

