<?php
include('connect.php');
?>
<html>
<head>

<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm"
        crossorigin="anonymous">

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	
</head>
<body>
    <div class="container">
	<nav class="navbar navbar-expand-md bg-dark navbar-dark fixed-top">
	    	<img src="image/logo.png" width="100px" height="80px">
		<a href="" class="navbar-brand text-warning font-weight-bold text-red" >DELHI CLUB INDIAN RESTAURANT</a>
	
		<button class="navbar-toggler" data-toggle="collapse" data-target="#navMenu">
		    <span class="navbar-toggler-icon"></span>
		</button>
		
		<div class="collapse navbar-collapse" id="navMenu">
		    <ul class="navbar-nav ml-auto">
			<li class="nav-item">
			    <a class="nav-link" href="index.html" text-white">Logout</a>	
			</li>
			
		    </ul>
		</div>
	    
	</nav>
</div>
<br><br><br><br><br>
<br>
<a href="existing_orders.php" class="btn btn-info">Existing Orders</a>
<a href="delivered_orders.php" class="btn btn-info">Delivered Orders</a>
<a href="delivery_update.php" class="btn btn-info">Update Menu</a>
