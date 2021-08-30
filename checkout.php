<?php
include('connect.php');
$query="select count(id) as total from cart";
$resu=mysqli_query($con,$query);
$val=mysqli_fetch_assoc($resu);
$c=$val['total'];
$allitem='';
$items=array();
$sql="select concat(item_Name,'(',qty,')') as itempty,total_price from cart";
$quer1=mysqli_query($con,$sql);
while($row=mysqli_fetch_assoc($quer1))
{
	$total+=$row['total_price'];
	$items[]=$row['itempty'];
}
$allitems=implode(",",$items);
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
			    <a href="#" class="nav-link">Home</a>
			</li>
			<li class="nav-item dropdown">
			    <a href="#" class="nav-link dropdown-toggle" id="navbarDropdown" role="button" data-toggle="dropdown">Items</a>
				<div class="dropdown-menu" data-target="#navbarDropdown">
				   <a class="dropdown-item" href="breakfast.php">Breakfast</a>
				   <a class="dropdown-item" href="lunch.php">lunch</a>
				   <a class="dropdown-item" href="dinner.php">Dinner</a>
				</div>
			</li>
			<li class="nav-item">
			    <a class="nav-link href="#" text-white">ContactUs</a>	
			</li>
			<li class="nav-item">
			   <a href="cart.php" class="nav-link"><i class="fa fa-shopping-cart"><span class="badge badge-danger" id="cart-item"><?php echo $c;?></span></i></a>
			</li>
			
		    </ul>
		</div>
	    
	</nav>
</div><br><br><br><br><br>
<div class="container">
	<div class="row justify-content-center">
		<div class="col-lg-8 px-4 pb-4">
		<h4 class="text-center text-info p-2">Order Details</h4>
		<div class="jumbotron p-4 mb-2 text-center">
			<h6 class="lead"><b>ITEMS:</b><?php echo $allitems;?></h6>
			<h5 class="lead"><b>Total Amount :</b><?php echo $total;?></h6>
		</div>
		<form action="con_order.php" method="POST">
		<input type="hidden" name="products" value="<?php echo $allitems;?>">
		<input type="hidden" name="total" value="<?php echo $total;?>">
		<div class="form-group">
		<input type="text" class="form-control" placeholder="Enter Name" name="name" required>
		</div>
		<div class="form-group">
		<input type="text" class="form-control" placeholder="Enter city" name="city" required>
		</div>
		<div class="form-group">
		<input type="text" class="form-control" placeholder="Enter Email" name="email" required>
		</div>
		<div class="form-group">
		<input type="text" class="form-control" placeholder="Enter phone Number" name="phno" required>
		</div>
		<div class="form-group">
		<textarea name="address" class="form-control" rows="3" cols="10" placeholder="Enter Delivery Adress" name="address" required></textarea>
		</div>
		<h6 class="text-center lead">Select Payment Mode</h6>
		<div class="form-group">
		<select name="pmode" class="form-control">
			<option value="cod">Cash on Delivery</option>
			<option value="netbanking">UPI Transfer</option>
		</select>
		</div>
		
		<div class="col-md-9 m-auto">
		<input type="submit" class="form-control" value="Place Order" name="submit" style="background-color:red">
        </div>	
		</form>
	</div>
</div>
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN"
        crossorigin="anonymous"></script>
   <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q"
        crossorigin="anonymous"></script>
   	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl"
        crossorigin="anonymous"></script>
</body>
</html>