<?php include("connect.php");
$name=$_POST['name'];
$email=$_POST['email'];
$date=$_POST['dat'];
$time=$_POST['time'];
$nop=$_POST['nop'];
$mbnum=$_POST['mbnum'];
$res="insert into table_reserve values('$name','$email','$date','$time','$nop','$mbnum')";
$query=mysqli_query($con,$res);
if($query)
{
	echo "inserted";
}
else{
	echo "not inserted";
}
?>