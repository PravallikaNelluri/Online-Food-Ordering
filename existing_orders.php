<?php
include('connect.php');
$que="select * from confirm where status='notdelivered'";
$res=mysqli_query($con,$que);
?>
<html>
<head>

<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm"
        crossorigin="anonymous">

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">	
</head>
<body>
<table class="table table-bordered text-center" style="width:1000px">
    <thead>
	<tr>
	    <th>Cust_Name</th>
	    <th >Email</th>
	    <th>Ph No.</th>
	    <th>Address</th>
	    <th>Payment Mode</th>
	    <th>Items</th>
	    <th>Total</th> 
		<th>Status</th> 
		
	</tr>
    </thead>
<?php 
	while($q=mysqli_fetch_array($res))
	{	
		$name=$q[0];
		$email=$q[1];
		$phno=$q[2];
		$address=$q[3];
		$pmode=$q[4];
		$items=$q[5];
		$total=$q[6];
		$status=$q[7];
?>
 <tbody>
		<tr>
		    <td><?php echo $name; ?></td>
		    <td><?php echo $email; ?></td>	
	    	    <td><?php echo $phno; ?></td>
		    <td><?php echo $address; ?></td>
		    <td><?php echo $pmode; ?></td>
		    <td><?php echo $items; ?></td>
		    <td><?php echo $total; ?></td>
			<td><?php echo $status; ?></td>
			
		    
		</tr>
	<?php } ?>
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
