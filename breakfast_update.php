<html>
<body>
<form action='breakfast_update.php' method='POST' enctype='multipart/form-data'>
	<input type='file' name='myfile' >
	<input type='text' name='text' >
	<input type='submit' name='upload' value='send'>
</form>
</body>

<?php
include('connect.php');
error_reporting(0);
	
	$name=$_FILES['myfile']['name'];
	$text=$_POST['text'];
	$tmp_name=$_FILES['myfile']['tmp_name'];
	$qu="insert into breakfast values('','','$text','$name','')";
	$re=mysqli_query($con,$qu);

	if(move_uploaded_file($tmp_name,$name))
	{
		
		echo"file uploaded";
		echo"<img src='$name' width=300 height=300>";	
	}
	else
	{
		echo "not uploaded";
	}
?>