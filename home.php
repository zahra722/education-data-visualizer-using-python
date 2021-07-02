<?php 
session_start();

if (isset($_SESSION['id']) && isset($_SESSION['user_name'])) {

 ?>
<!DOCTYPE html>
<html>
<head>
	<title>HOME</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
</head>
<body>	


<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <a class="navbar-brand" href="#">Hello, <?php echo $_SESSION['name'];?></a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
        <a class="nav-link" href="#">HOME  <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="forms/teacherreg.html">UPDATE PROFILE</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="forms/teacherfetch.php">TEACHERS DATA</a>
      </li>
      <li class="my-2 my-lg-0">
        <a class="nav-link" href="result.html">RESULT</a>
      </li>
      <li class="my-2 my-lg-0">
        <a class="nav-link" href="att.html">ATTENDANCE</a>
      </li>
      <li class="my-2 my-lg-0">
        <a class="nav-link" href="student.html">STUDENTS PROFILE</a>
      </li>




    </ul>
    <form class="form-inline my-2 my-lg-0">
       <a href="logout.php">Logout</a>
    </form>
  </div>
</nav>

	<h1>Hello, <?php echo $_SESSION['name'];?></h1>
     <a href="logout.php">Logout</a>


</body>
</html>

<?php 
}else{
     header("Location: index.php");
     exit();
}
 ?>