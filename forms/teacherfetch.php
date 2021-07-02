<?php
$link=mysqli_connect('localhost','root','','project');
$query="select * from teacher";
$result=mysqli_query($link , $query);
?>

<!DOCTYPE html>
<html>
<head>
	<title>fetch data from database</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
</head>
<body>
	<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <a class="navbar-brand" href="#">Website</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
        <a class="nav-link" href="../home.php">Home <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="teacherreg.html">Teacher Registration</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="teacherfetch.php">Teacher Data</a>
      </li>
      <li class="my-2 my-lg-0">
        <a class="nav-link" href="#">Link</a>
      </li>


    </ul>
  </div>
</nav>
	<table align="center" border="lpx" style="width: 900px; line-height: 30px;">
		<tr>
			<th colspan="9"><h2>Teachers PROFILE</h2></th>
			
		</tr>
		<tr>
			<th>name</th>
			<th>dept</th>
			<th>qualification</th>
			<th>designation</th>
			<th>dob</th>
			<th>email</th>
			<th>phoneno</th>
			<th>address</th>
			<th>domain</th>
		</tr>
	<?php
	    while ($rows=mysqli_fetch_array($result))
	    {
	?>    	

	    	<tr>
	    		<td><?php echo $rows['name']; ?></td>
	    		<td><?php echo $rows['dept']; ?></td>
	    		<td><?php echo $rows['qualification']; ?></td>
	    		<td><?php echo $rows['designation'];?></td>
	    		<td><?php echo $rows['dob'];?></td>
	    		<td><?php echo $rows['email']; ?></td>
	    		<td><?php echo $rows['phoneno']; ?></td>
	    		<td><?php echo $rows['address']; ?></td>
	    		<td><?php echo $rows['domain']; ?></td>

	    	</tr>
	<?php   	
	    }
	?>    	
	</table>

</body>
</html>

