<?php
include("connect.php");
$query="select count(id) as total from cart";
$resu=mysqli_query($con,$query);
$val=mysqli_fetch_assoc($resu);
$c=$val['total'];
$tot=0;
$que="select * from cart";
$res=mysqli_query($con,$que);
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
		<a href="" class="navbar-brand text-warning font-weight-bold text-red" >DELHI INDIAN CLUB RESTAURANT</a>
	
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
<h3 style="text-align:center">ITEMS IN CART</h3>
 <div style="padding-left:180px">
	<table class="table table-bordered text-center" style="width:1000px">
	    <thead>
		<tr>
		    <th>Image</th>
		    <th >Name</th>
		    <th>Price</th>
		    <th>qty</th>
		    <th>Total</th>
		    <th>Increase Qty</th>
		    <th>Decrese Qty</th>  
		    <th><a href="clearcart.php" class="nav-link"><i class="fa fa-trash">Clear Cart</i></a></th>
		</tr>
	    </thead>
	<?php 
		while($q=mysqli_fetch_array($res))
		{
			
			$Name = $q[2] ;
			$Price=$q[3];
			$total=$q[5];
			$Qty=$q[4];
			$tot=$tot+$total;
	?>
	    <tbody>
		<tr>
		    <td><img src="<?php echo $q['Image'];?>" width="50px" height="50px" ></td>
				
		    <td><?php echo $Name; ?></td>
		    <td><?php echo $Price; ?></td>	
	    	    <td><?php echo $Qty; ?></td>
		    <td><?php echo $total; ?></td>
		    <td> 
<form class="form-submit" method="POST" action="increment.php?action=add&id=<?php echo $q['id'];?>">
	<input type="hidden" name="pqty"  value="<?php echo $q['qty'];?>">
	<input type="hidden" name="pname"  value="<?php echo $q['Item_name'];?>">
	<input type="hidden" name="pprice"  value="<?php echo $q['Item_price'];?>">
	<input type="submit" class="btn btn-info " name="incr" value="+" >
</form></td>
		    <td> 
<form class="form-submit" method="POST" action="decrement.php?action=add&id=<?php echo $q['id'];?>">
	<input type="hidden" name="pqty"  value="<?php echo $q['qty'];?>">
	<input type="hidden" name="pname"  value="<?php echo $q['Item_name'];?>">
	<input type="hidden" name="pprice"  value="<?php echo $q['Item_price'];?>">
	<input type="submit" class="btn btn-info " name="decr" value="-" >
</form></td>
	    	    
		    <td><form class="form-submit" method="POST" action="del.php?action=add&id=<?php echo $q['id'];?>">
				<button name="remove_item" class="btn btn-danger" id="rem_item">remove</button>
				<input type="hidden" name="pid" value="<?php echo $q['id'];?>">
			
</form> </td>
		</tr>
		
		<?php
		}
		?>
		
		<tr>
			<td colspan="2"><a href="breakfast.php" class="btn btn-success btn-sm">Continue shopping</a></td>
			<td colspan="2">grand total</td><td><?php echo $tot;?></td>
			<td colspan="3"><a href="checkout.php" class="btn btn-info btn-sm">Checkout</a></td>
		</tr>
	    </tbody>
	</table>
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN"
        crossorigin="anonymous"></script>
   <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q"
        crossorigin="anonymous"></script>
   	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl"
        crossorigin="anonymous"></script>

</body>
</html>
