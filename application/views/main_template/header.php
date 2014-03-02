<html>
<head>
	<title><?=$title?></title>
	<link href="stylesheets/screen.css" media="screen, projection" rel="stylesheet" type="text/css" />
	<link href="stylesheets/print.css" media="print" rel="stylesheet" type="text/css" />
	<!--[if IE]>
	  <link href="stylesheets/ie.css" media="screen, projection" rel="stylesheet" type="text/css" />
	<![endif]-->
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.8.3/jquery.min.js"></script>
	<script src="javascript/library.js"></script>
</head>
<body>
<!--	<button class="toggle-grid">Toggle-grid</button>  -->
	<div class="topbar">
		<div class="container showgrid topbanner">
			<div class="signin">
				<?php $this->load->view('main_template/social');?>
				Sign-in<span class="divider">|</span>Create account<span class="divider">|</span>Email notifications
			</div>
		</div>
	</div>
	<div class="bannertop">
		<div class="container showgrid">
			<div id="header" class="hbground">
				<img class="hlogo" alt="Vacation Rentals Discounts" src="images/logo.png">
				<?php $this->load->view('main_template/searchbar');?>
				<!-- <div class="menu">
					<?php // echo anchor('home', 'Home', array('class'=>'menu_item', 'title'=>'Home page')); ?>
				</div> -->
			</div>
		</div>
	</div>
	<div class="container showgrid">
