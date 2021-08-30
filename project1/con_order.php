<?php
include('connect.php');
$name=$_POST['name'];
$toemail=$_POST['email'];
$phno=$_POST['phno'];
$allitems=$_POST['products'];
$total=$_POST['total'];
$address=$_POST['address'];
$pmode=$_POST['pmode'];
$status="notdelivered";


$query="insert into confirm values('$name','$toemail','$phno','$address','$pmode','$allitems','$total','$status')";
$res=mysqli_query($con,$query);
$from="From: pravallikachowdary4965@gmail.com";
if($res & mail($toemail,$total,$allitems,$from))
{
?>
<html>
<head>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm"
        crossorigin="anonymous">
</head>

<body>
		<div class="text-center">
		<h1 class="display-4 mt-4 text-danger">Thank you!</h1>
		<h2 class="text-success">Order Placed Successfully!</h2>
		<h4 class="bg-danger text-light rounded p-2">Items Orderd <?php echo $allitems;?></h4>
		<h4>Your Name:<?php echo $name;?></h4>
		<h4>Your Email:<?php echo $toemail;?></h4>
		<h4>Your Phone No:<?php echo $phno;?></h4>
		<h4>Total Amount Paid:<?php echo $total;?></h4>
		</div>
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN"
        crossorigin="anonymous"></script>
   <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q"
        crossorigin="anonymous"></script>
   	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl"
        crossorigin="anonymous"></script>
</body>
</html>
<?php
}
else
{
	echo "no";
}?>
