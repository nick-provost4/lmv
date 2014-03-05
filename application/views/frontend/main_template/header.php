<html>
<head>
	<title><?=$title?></title>
	<link href="/stylesheets/screen.css" media="screen, projection" rel="stylesheet" type="text/css" />
	<link href="/stylesheets/print.css" media="print" rel="stylesheet" type="text/css" />
	<!--[if IE]>
	  <link href="/stylesheets/ie.css" media="screen, projection" rel="stylesheet" type="text/css" />
	<![endif]-->
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.8.3/jquery.min.js"></script>
	<script src="/javascript/library.js"></script>
</head>
<body>
	<button class="toggle-grid">Toggle-grid</button>
	<div class="topbar">
		<div class="container showgrid topbanner">
			<div class="signin">
				<?php $this->load->view('frontend/main_template/social');?>
				<?php echo anchor($signin, $signin_text, array('class'=>'menu_item', 'title'=>'Sign-in')); ?>
				<span class="divider">|</span>
				<?php if ($signin == 'signout'); ?>
					<?php //echo anchor('edit_account', 'Update account', array('class'=>'menu_item', 'title'=>'Update account')); ?>
					<span class="divider">|</span>
				<?php endif ?>
				<?php echo anchor('create_account', 'Email notifications', array('class'=>'menu_item', 'title'=>'Email notifications')); ?>
				<span class="divider">|</span>
				<?php echo anchor('create_account', 'List your property', array('class'=>'menu_item', 'title'=>'List your property')); ?>
			</div>
		</div>
	</div>
	<div class="bannertop">
		<div class="container showgrid">
			<div id="header" class="hbground">
				<?php echo anchor('home', img(array('src'=>'/images/logo.png', 'class'=>'hlogo')), array('class'=>'menu_item', 'title'=>'Home page')); ?>
				<!-- <div class="menu">
					<?php // echo anchor('home', 'Home', array('class'=>'menu_item', 'title'=>'Home page')); ?>
				</div> -->
			</div>
			<div class="bottombar">
				Vacation Rentals Only! - Discounts Only!
				<?php $this->load->view('frontend/main_template/searchbar');?>
			</div>
		</div>
	</div>
	<div class="container showgrid">
