<?php
$con=new mysqli("0.0.0.0","root","root","habtu");
$Email=$_POST['email'];
$Password=$_POST['password'];
$sql="INSERT INTO now (email , password)
VALUES (' $Email ' , '$Password')" ;
 $result=mysqli_query($con,
$sql);
if($result=="true") {
  echo 
"New record created successfully";
} 
else {
  echo "Not Submitted ";
}

?>
	
	<!DOCTYPE html>
	<html>
		<head> <title>try project</title> 
		
		<style type="text/css">
		.heades{
			background-color: brown;
			
			}
			#main{
				background-color: orange;
				
				
				
				}
			
			.home{
			font-size: 25px;
				font-weight: bold;
				margin-right: 200px;
				color: white;
				}
				
				.course{
			font-size: 25px;
				font-weight: bold;
				margin-right: 0px;
				color: white;
				}
				.about{
			font-size: 25px;
				font-weight: bold;
				margin-right: 50px;
				margin-left: 100px;
				color: white;
				}
				.contact{
			font-size: 25px;
				font-weight: bold;
				margin-right: 100px;
				margin-left: 150px;
				color: white;
				}
			
		</style>
		
		</head>
		<body>
			<center>
			<h1 class="heades">Welcome To The Website</h1>
			<div id="main">
				<nav class="nave">
			<a href="#"  class="home">Home</a>
			<a href="#" class="course">Course</a>
			<a href="#" class="about">About</a>
			<a href="#" class="contact">Contact</a>
			</nav>
			
			
			</div>
			</center>
			</body>
			</html>
	