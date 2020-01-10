<?php
session_start();

if(empty($_SESSION['email']) && empty($_SESSION['pwd'])){

	echo "<script>
            alert('You Need To log in first');
            window.location='../../project/project/admin.php'
            </script>";

}

?>


<!DOCTYPE html>
<html>
<head>
	<title></title>
	  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<body>

	<style type="text/css">
		
		form{
			width: 50%;
			margin: 10% auto;
		}
		label{
			color: black;
		}
		.form-group > div{
			margin-bottom: 20px;
		}

		a{
			position: relative;
			top: 10px;
			margin-left: 100%;
		}
	</style>


	            <div class="container">
	            	<a href="../../project/project/logout.php"> <button class="btn btn-primary" name="sout">Sign Out</button></a> 

                <form   method="POST" action="../../project/project/adminpage.php" >
                    <div class="form-group">

                        <div class="col-lg-12">
                            <label  for="from">Operator Name</label>
                            <input class="form-control" type="text" name="oname" >
                        </div>
                       

                        <div class="col-lg-12">
                            <label  for="from">Departure</label>
                            <input class="form-control"  type="text" name="dcity" >
                        </div>
                        <div class="col-lg-12">
                        	 <label  for="from">Arrival city</label>
                            <input class="form-control" type="text" name="acity" >
                        </div>
                        <div class="col-lg-12">
                            <label  for="from">Departure time</label>
                            <input class="form-control" type="time" name="dtime" >
                        </div>
                        <div class="col-lg-12">
                            <label  for="from">Arrival time</label>
                            <input class="form-control" type="time" name="atime" >
                        </div>
                         <div class="col-lg-12">
                            <label  for="from">Fare</label>
                            <input class="form-control" type="tele" name="fare">
                        </div>
                        <div class="col-lg-12">
                            <label  for="from">Capacity</label>
                            <input class="form-control" type="tele" name="capacity">
                        </div>
                        <div class="col-lg-12">
                            <label  for="from">Date of Return(optional):</label>
                            <input class="form-control" type="date" name="datea" >
                        </div>

                        <button class="btn btn-primary" name="save">Submit</button>
				


                    </div>
                </form>

            </div>

           

            <?php




            		$link = mysqli_connect("localhost", "root", "", "demo");
 
					// Check connection
					if($link === false){
					die("ERROR: Could not connect. " . mysqli_connect_error());
					}



if(isset($_POST['save'])){

	$op=$_POST['oname'];
    $dp=$_POST['dcity'];
    $ar=$_POST['acity'];

    $dtime=$_POST['dtime'];
    $art=$_POST['atime'];
    $far=$_POST['fare'];
    $cap=$_POST['capacity'];
    $dateofr=$_POST['datea'];
  


					   $sql = "INSERT INTO bus_time ( operator,dep,arr,deptime,arrtime,fare,capacity,dat) VALUES ('$op','$dp','$ar','$dtime','$art','$far','$cap','$dateofr')";
    
        if($link->query($sql) === true){
            
            echo "<script>
            alert('Succesfully Reserved');
            window.location='../../project/project/adminpage.php'
            </script>";
            
        }


        else{


        	

        	
        			 echo "<script>
            alert('Something Going Wrong');
            window.location='../../project/project/adminpage.php'
            </script>";

           
           
        }
    }

            ?>

</body>
</html>