<?php
session_start();

?>

<!DOCTYPE html>
<html>
<head>
	<title></title>

	  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="icon" type="image/jpg" href="1.png">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
	
</head>
<body>

	<style type="text/css">
		
	form{
			width: 50%;
			margin:10% auto;
		}
	</style>

	<div class="container">
 
  <form  method="post" action="../../project/project/admin.php">
  	 <h2>Admin Login</h2>
    <div class="form-group">
      <label for="email">User Name</label>
      <input type="name" class="form-control" placeholder="Enter email" name="email">
    </div>
    <div class="form-group">
      <label for="pwd">Password:</label>
      <input type="password" class="form-control"  placeholder="Enter password" name="pwd">
    </div>
    <div class="checkbox">
      <label><input type="checkbox" name="remember"> Remember me</label>
    </div>
    <button type="submit" name="log" class="btn btn-default">Submit</button>
  </form>
</div>

<?php

	$aname="admin";
	$apass= "1234";



	if(isset($_POST['log'])){

	$admin=$_POST['email'];
	$pass=$_POST['pwd'];
	$_SESSION['email']=$admin;
	$_SESSION['pwd']=$pass;


		if($aname===$admin &&  $apass===$pass){

			echo "<script>
			alert('login Succesfull');
			window.location='../../project/project/adminpage.php';
			
			</script>";

		}
		else{

		echo "<script>
			alert('Incorrect username or password');
			window.location='../../project/project/admin.php';

			

			</script>";

		}
		}

	

?>

</body>
</html>