<?php 
include('connect.php');
$pqty=$_POST['pqty'];
$pname=$_POST['pname'];
$pprice=$_POST['pprice'];
$stm1="select Item_name from cart where Item_name='$pname'";
$que1=mysqli_query($con,$stm1);
$res1=mysqli_fetch_array($que1);
$name=$res1['Item_name'];
if($name)
{
		$pqty=$pqty+1;
		$total=$pqty * $pprice;
		$query="update cart set qty='$pqty',total_price='$total' where Item_name='$pname'";
		$exe=mysqli_query($con,$query);
		header("Refresh:0;url=cart.php");	
	}	

?>