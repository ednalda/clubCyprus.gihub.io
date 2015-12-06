<!DOCTYPE html> 
<html>
 <head> 
	<title>Club Cyprus</title>
	<script src="jquery-1.11.3.min.js"></script>
	<link rel="stylesheet" type="text/css" href="<?php echo base_url('css/style.css'); ?>"> 

	<!--[if lt IE 9]> <script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script> <![endif]-->
 </head>
 <body>
    <div class="wrapper">
      <header>
	      	<ul class="name"> 
	      		<li class="logo"><?php echo img("images/logo.png");?></li> 
	      		<li class="title"><?php echo img('images/name.png');?></li> 
	      	</ul>
	        <div id="banner"><?php echo img("images/banner.png");?></div>
	      	<ul class="signup_login">
	      		<li><?php echo anchor ('form/login_open','Login'); ?></li>
	      		<li><?php echo anchor ('form/signup_open','Signup'); ?></li>
	      	</ul>
	      	<nav><?php echo anchor ('form','Home'); ?></nav> 
      </header><!--End header-->
    
 

