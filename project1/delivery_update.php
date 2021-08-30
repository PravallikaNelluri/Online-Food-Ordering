<?php 
include('connect.php');
$delivered=$_POST['delivered'];
$id=$_POST['id'];
$que="select id from confirm where id='$id'";
$res=mysqli_query($con,$que);
$r=mysqli_fetch_array($res);
$oid=$r['id'];
if($oid)
{
	$delivered="delivered";
	$query="update confirm set status='$delivered' where id='$id'";
	$exe=mysqli_query($con,$query);
	header("Refresh:1;url=order_details.php");
}
else
{
	echo "no";
}
?>