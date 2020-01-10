<!DOCTYPE html>
<html>
<head>
	<title>Table</title>
	<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>DESHANTOR</title>

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="icon" type="image/jpg" href="1.png">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
	
	<style>
	
	 body,
    html {
        height: 80%;

        margin: 0;
        font-size: 16px;
        font-family: "Lato", sans-serif;
        font-weight: 400;
        line-height: 1.8em;

    }

    .pimg0 {
        background-image: url("1.jpg");
        min-height: 100%;
    }

    .pimg1 {
        background-image: url("2.jpg");
        min-height: 100%;
    }

    .pimg2 {
        background-image: url("3.jpg");
        min-height: 100%;
    }

    .pimg3 {
        background-image: url("4.jpg");
        min-height: 100%;
    }

    .pimg0,
    .pimg1,
    .pimg2,
    .pimg3 {
        position: relative;
        opacity: 0.70;
        background-position: center;
        background-size: cover;
        background-repeat: no-repeat;
        background-attachment: fixed;
    }

    .section {
        text-align: center;
        padding: 50px;
    }

    .section-light {
        background-color: #f4f4f4;
        color: #666;
    }

    .section-dark {
        background-color: #282e34;
        color: #ddd;
    }

    .ptext {
        position: absolute;
        top: 50%;
        width: 100%;
        text-align: center;
        color: #000;
        font-size: 27px;
        letter-spacing: 8px;
        text-transform: uppercase;
    }

    .ptext,
    .border {
        color: #f7f7f7;
        apdding: 20px;
    }


    .navbar {
        margin-bottom: 0;
        background-color: #2d2d30;
        border: 0;
        font-size: 11px !important;
        letter-spacing: 4px;
        opacity: 0.9;
    }

    .navbar li a,
    .navbar .navbar-brand {
        color: #d5d5d5 !important;
    }

    .navbar-nav li a:hover {
        color: #939496 !important;
    }

    .navbar-nav li.active a {
        color: #fff !important;
        background-color: #29292c !important;
    }

    .navbar-default .navbar-toggle {
        border-color: transparent;
    }

    footer {
        background-color: #2d2d30;
        color: #f5f5f5;
        padding: 20px;
        font-family: Arial;
        letter-spacing: 3px;

        margin: 0px;
    }

    footer a {
        color: #f5f5f5;
    }

    footer a:hover {
        color: #777;
        text-decoration: none;
    }

    .ag {
        background-image: url("cover1.jpg");
        background-position: center;
        background-repeat: no-repeat;
        background-size: cover;
        height: 700px;
        min-height: 100%;
    }

    .bg {
        background-color: #282e34;
        height: 100px;
        width: 1350px;
        padding: 10px;
        background-size: cover;
        font-size: 17px;
        letter-spacing: 2px;
        text-transform: uppercase;
        margin-top: -30px;
        text-align: center;
        


    }

    .btn {
        background-color: #6d756a;

        border: none;
        color: white;
        padding: 16px 32px;
        text-align: center;
        font-size: 16px;
        margin: 15px 5px;
        opacity: 1;
        transition: 0.3s;
    }

    .dg {
        background-color: #2d2d30;
    }

    .eg {
        padding: 50px;
        margin: 0px;
        background-color: #d9d9db;
    }

    .fg {
        background-color: #282e34;
        padding: 20px;

    }
    .dropdown-menu{
       background-color: #282e34;
       height: 150px;
       width:400px;
       padding:25px;
       float: justify;
       color: white;


   }
   .dropdown{
       position: absolute;

   }


   @media(max-width:568px) {
    .pimg1,
    .pimg2,
    .pimg3,
    .bg {
        background-attachment: scroll;
    }
}	
		
		
		body
			{
				font-family:sans-serif;
				font-size:11px;
			
			}
			
			
		
			
		table
			{
				margin:auto;
				width:80%;
				position:relative;
				top:60px;
				margin-top:5px;
			}
			
		table,th,td
			{
				border:1px solid black;
				border-collapse:collapse;
				opacity:0.95;
				
			}
		
		th,td
			{
				padding:10px;
				text-align:center;

			}

            td{
                font-size: 12px;
            }
			
		
			
		th
			{
				background-color: #282e34;
				color:white;
                font-size: 13px;
			}
		
		tr:nth-child(even)
			{
				background-color:#999966;
                color:white;
			}
			
		
		tr:nth-child(odd)
			{
				background-color:#282e34;
                color:white;
			}
			.eg{
				margin-top:100px;
			}
             .btn-primary:hover {
            transform: scale(1.2);

        }

			
		
	</style>
</head>

<body>

		 <!--navigation-->

    <nav class="navbar navbar-defalut navbar-fixed-top">
        <div class="container-fluid">
            <div class="navbar-header">
                <a class="navbar-brand" style="font-family:Berlin Sans FB Demi" href="bus.php">DESHANTOR.COM</a>
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
            </div>
            <div class="collapse navbar-collapse" id="mynavbar">
                <ul class=" nav navbar-nav navbar-right">
                    <li><a href="bus.php">HOME</a></li>
                    <li><a href="bkash.php">VERIFY BKASH</a></li>
                    <li><a href="cancel.php">CANCEL TICKET</a></li>
                    <li><a href="reg.php">BUS RESERVATION</a></li>
                    <li><a href="contact.php">CONTACT US</a></li>

                    <li class="dropdown"><a href="#" class="dropdown-toogle" data-toggle="dropdown"><span class="glyphicon glyphicon-user" style="font-size: 10px;"></span>LOGIN/SIGN-UP</a>

                        <ul class="dropdown-menu">
                            <div class="container">
                                <div class="row">
                                    <div class="col-sm-2"> 
                                        <li><a href="login.php" class="btn btn-danger btn-sm" role="button" style="font-size: 11px;"><span class="glyphicon glyphicon-user"></span>LOGIN</a></li>
                                    </div>
                                    <div class="col-sm-2">
                                        <li><a href="#" class="btn btn-danger btn-sm" role="button" style="font-size: 11px;"><span class="glyphicon glyphicon-user"></span>SIGN-UP</a></li>

                                    </div>

                                </div>
                            </div>
                        </ul>
                    </li>
                </ul>

            </div>

        </div>
    </nav>



<?php

					$link = mysqli_connect("localhost", "root", "", "demo");
 
					// Check connection
					if($link === false){
					die("ERROR: Could not connect. " . mysqli_connect_error());
					}
					$from=$_POST["from"];
					$to=$_POST["to"];
					$date=$_POST["date"];
					
                   
					// Attempt select query execution
					$sql = "SELECT * FROM bus_time where dep='$from' AND arr='$to' AND dat='$date' ";

					if($result = mysqli_query($link, $sql)){
					if(mysqli_num_rows($result) > 0){
					
					echo"<table>";
					echo"<tr>";
					echo "<td><h1>Departure Schedule</h1></td>";
					echo"</tr>";
					echo"</table>";
					
					
					
					echo "<table >";
		
						echo "<tr>";
							echo "<th>ID</th>";
							echo "<th>Operator(bus type)</th>";
							echo "<th>Dep</th>";
							echo "<th>Arr</th>";
							echo "<th>Dep.time</th>";
							echo "<th>Arr.time</th>";
							echo "<th>Fare</th>";
							echo "<th>Date</th>";
							echo "</tr>";
					while($row = mysqli_fetch_array($result)){
					echo "<tr>";
						echo "<td>" . $row['id'] . "</td>";
						echo "<td>" . $row['operator'] . "</td>";
						echo "<td>" . $row['dep'] . "</td>";
						echo "<td>" . $row['arr'] . "</td>";
						echo "<td>" . $row['deptime'] . "</td>";
						echo "<td>" . $row['arrtime'] . "</td>";
						echo "<td>" . $row['fare'] . "</td>";
						echo "<td>" . $row['dat'] . "</td>";
					echo "</tr>";
					}
				echo "</table>";
				// Free result set. mysqli_free_result() function frees the memory associated with the result.
					mysqli_free_result($result);
				}
				else{
					echo '<h3 style="color:blue;margin-top:195px;margin-left:80px">No trips found. Please contact with us  and we might arrange the tickets for you..</h3>';
				//echo "No trips found. Please call our call centre @ 16374 and we might arrange the tickets for you..";
					}
				} 
				else{
					echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
				}
				mysqli_close($link);
				?>
				<h4 style="padding:15px;margin-top: 90px;text-align: right;margin-right: 155px;color: red;"><strong>If you want to register please click below this button</strong></h4><br>
                 <a href="reg.php" class="btn btn-primary " role="button" style="font-size: 15px;float: right;margin-right: 165px;margin-top: -35px;">Registration</a>
				
			 <div class="container-fluid eg">
        <div class="row">
            <div class="col-sm-4">
                <h4 style="color:#404043;padding:20px;margin-top:25px;"><strong>Top Bus Router</strong></h4>
                <ul style="list-style-type:none;margin-left:-18px;color:#979799;font-size:15px;">
                    <li>Dhaka To Chittagong (Vise Versa)</li>
                    <li>Dhaka To Cox Bazar (Vise Varsa)</li>
                    <li>Dhaka To Sylhet (Vise Versa)</li>
                    <li>Dhaka To Rajshahi (Vise Versa)</li>
                    <li>Dhaka To Bogra (Vise Versa)</li>
                    <li>Dhaka To Kushtia (Vise Versa)</li>
                    <li>Dhaka To Feni (Vise Versa)</li>
                    <li>Dhaka To Noakhali(Vise Versa)</li>
                    <li>Dhaka To Rangpur (Vise Versa)</li>
                    <li>Dhaka To Khulna (Vise Versa)</li>
                    <li>Dhaka To Panchagar(Vise Versa)</li>
                    <li>Dhaka To Rangamati (Vise Versa)</li>
                    <li>Dhaka To Comilla (Vise Versa)</li>

                </ul>
            </div>
            <div class="col-sm-4">
                <h4 style="color:#404043;padding:20px;margin-top:25px;"><strong>Top Bus Operators</strong></h4>
                <ul style="list-style-type:none;margin-left:-18px;color:#979799;font-size:15px;">
                    <li>Green Line Paribahan</li>
                    <li>Shyamoli paribahan</li>
                    <li>Dipjol Enterprise</li>
                    <li>Hanif Enterprise</li>
                    <li>Royal Coach</li>
                    <li>Saint Martin Hyundai</li>
                    <li>Star Line Special Limited</li>


            </div>


        </div>
    </div>



    <!--footer-->
    <footer class="text-center">
        <a class="up-arrow" href="#myPage" data-toggle="tooltip" title="TO TOP">
    <span class="glyphicon glyphicon-chevron-up"></span>
  </a><br><br>
        <p style="font-size:10px;">Copyright © 2018 DESHANTOR.COM All Rights Reserved</p>
    </footer>
	
				
					
				
</body>

</html>
