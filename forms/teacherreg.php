<!DOCTYPE html>
<html>
<head>
	<title>Teacherreg</title>
</head>
<body>
<?php
if($_POST)
{
	$name= $_POST['name'];
	$dept=$_POST['dept'];
	$qualification=$_POST['qualification'];
	$designation=$_POST['designation'];
	$dob=$_POST['dob'];
	$email=$_POST['email'];
	$phoneno=$_POST['phoneno'];
	$address=$_POST['address'];
	$domain=$_POST['domain'];
	if(!empty($name))
	{
		$link=mysqli_connect('localhost','root','','project');
		if(!$link){
			echo "<br>unable to connect database.".mysqli_connect_error();
		}
	
	 $query= "insert into teacher values('$name','$dept','$qualification','$designation','$dob','$email','$phoneno','$address','$domain')";
	 $result= mysqli_query($link,$query);


    if(!$result){
    	echo "<br>".mysqli_error($link);
    }
    else{
    	echo "<script>alert('Your Message is Sent Successfully..')</script>";
    	echo "Successfully Data enter";
    	header('Refresh:2, url= teacherreg.html');
    }
    mysqli_close($link);
	}

	else{
		echo "something is missing";
	}


}

else{
	echo "data is not post";
}

?>



</body>
</html>