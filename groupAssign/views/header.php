<?php

echo 'work'

?>

<html>
	<header>
		<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
		<link rel="stylesheet" type="text/css" href="css/style.css">    
	    <link href='http://fonts.googleapis.com/css?family=Voltaire' rel='stylesheet' type='text/css'>
	</header>
	
	<style>
	.modal-backdrop{
		z-index: 0;
	}
	
	.modal-footer{
	padding-bottom: 0;
	}
	
	
	</style>
	
	<body>
<div class="navbar navbar-fixed-top alt" data-spy="affix" data-offset-top="1000">
  <div class="container">
    <div class="navbar-header">
      <a href="?controller=home&action=home" class="navbar-brand">Home</a>
      <a class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </a>
    </div>
    <div class="navbar-collapse collapse" id="navbar">
      <ul class="nav navbar-nav">
        <li><a href="?controller=home&action=register">Add User</a></li>
        <li><a href="?controller=home&action=uploadForm">Upload Form</a></li>
        <li><a data-toggle="modal" data-target="#myModal">Login</a></li>
      </ul>
    </div>
   </div>
</div>