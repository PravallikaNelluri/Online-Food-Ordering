<?php 
include('connect.php');
$pqty=$_POST['pqty'];
$pname=$_POST['pname'];
$pprice=$_POST['pprice'];
$stm1="select qty from cart where qty='$pqty'";
$que1=mysqli_query($con,$stm1);
$res1=mysqli_fetch_array($que1);
$qty=$res1['qty'];
if($qty)
{
	if($qty==1)
	{
		
		$query="delete from cart where Item_name='$pname'";
		$exe=mysqli_query($con,$query);
		header("Refresh:0;url=cart.php");		
	}	
	else{
		$pqty=$pqty-1;
		$total=$pqty * $pprice;
		$quer="update cart set qty='$pqty',total_price='$total' where Item_name='$pname'";
		$exec=mysqli_query($con,$quer);
		header("Refresh:0;url=cart.php");	
	}
}

?>