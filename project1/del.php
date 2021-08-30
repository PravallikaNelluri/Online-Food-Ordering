<?php 
include('connect.php');
$pid=$_POST['pid'];

$stm="select id from cart where id='$pid'";
$que=mysqli_query($con,$stm);
$res=mysqli_fetch_array($que);
$id=$res['id'];


if($id)
{
	$query="delete from cart where id='$pid'";
	$execute=mysqli_query($con,$query);
	echo '<script>alert("deleted");</script>';
	header("Refresh:1;url=cart.php");
}

?>   