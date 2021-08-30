<?php
include('connect.php');
$name=$_POST['name'];
$pass=$_POST['password'];
$q="select * from admin";
$res=mysqli_query($con,$q);
while($r=mysqli_fetch_array($res))
{
	$adname=$r[0];
	$adpass=$r[1];
}
	if($name == $adname && $pass == $adpass)
	{
		header("Refresh:1;url=admin.php");
	}
	else
	{
		echo '<script>alert("Invalid Admin Name or Password");</script>';
		header("Refresh:0;url=login.php");
		
	}
?>







