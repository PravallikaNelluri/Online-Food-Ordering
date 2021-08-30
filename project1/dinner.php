<?php
include('connect.php');
$query="select count(id) as total from cart";
$resu=mysqli_query($con,$query);
$val=mysqli_fetch_assoc($resu);
$c=$val['total'];
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
			    <a href="index.html" class="nav-link">Home</a>
			</li>
			<li class="nav-item dropdown">
			    <a href="#" class="nav-link dropdown-toggle" id="navbarDropdown" role="button" data-toggle="dropdown">Items</a>
				<div class="dropdown-menu" data-target="#navbarDropdown">
				   <a class="dropdown-item" href="breakfast.php">Breakfast</a>
				   <a class="dropdown-item" href="lunch.php">Lunch</a>
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
</div><br><br><br><br>
<div class="container">    
    <div class="row">
	<?php
		$que="select * from dinner";
		$res=mysqli_query($con,$que);
		while($row=mysqli_fetch_array($res))
		{
		?>
		<div class="col-lg-3 col-md-3 col-sm-6 ">	   
			<div class="card-deck">
				<div class="card p-1">
					<img src="<?php echo $row['image'];?>  " class="card-img-top" height="200">
				<div class="card-body p-1">
				<h4 class="card-title text-center text-info"><?php echo $row['item_name'];?></h4>
				<h5 class="card-text text-center teaxt-danger">Rs.<?php echo $row['price']; ?></h5>
				
				</div>
			<div class="card-footer p-1">
			<form class="form-submit" method="POST" action="action1.php?action=add&id=<?php echo $row['id'];?>">
				<input type="hidden" name="pid" value="<?php echo $row['id'];?>">
				<input type="hidden" name="pname" value="<?php echo $row['item_name'];?>">
				<input type="hidden" name="pprice" value="<?php echo $row['price'];?>">
				<input type="hidden" name="pimage" value="<?php echo $row['image'];?>">
				<input type="hidden" name="pcode" value="<?php echo $row['code'];?>">
				<input type="submit" class="btn btn-info btn-block addTocart" name="add_to_cart" value="Add to Cart">
			</form>
			</div>
			</div>
		</div>
		</div>
		<?php
		}?>
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