<?php
include("connect.php");
$pid=$_POST['pid'];
$pname=$_POST['pname'];
$pprice=$_POST['pprice'];
$pimage=mysqli_real_escape_string($con,$_POST['pimage']);
$pcode=$_POST['pcode'];
$pqty=1;
$stm="select Item_name from cart where Item_name='$pname'";
$que=mysqli_query($con,$stm);
$res=mysqli_fetch_array($que);
$code=$res['Item_name'];
			$Qty=$pqty;
			$total=$pprice * $pqty;
			
if(!$code)
{
	$query="insert into cart(id,Item_name,Item_price,Image,qty,total_price,code) values('$pid','$pname','$pprice','$pimage','$pqty','$total','$pcode')";
	$execute=mysqli_query($con,$query);
	echo '<script>alert("inserted");</script>';
	header("Refresh:1;url=lunch.php");
}
else{
	echo '<script>alert("Item already present check in cart");</script>';
	header("Refresh:0;url=lunch.php");
}
?>
