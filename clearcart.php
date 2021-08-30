<?php
include("connect.php");
$que="delete from cart";
$res=mysqli_query($con,$que);
echo '<script>alert("cart is empty");</script>';
header("Refresh:0;url=cart.php");	
?>
