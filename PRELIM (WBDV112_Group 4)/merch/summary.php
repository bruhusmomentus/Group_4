<!DOCTYPE html>
<html>
	<head>
		<style>
			body {
				background-color: black;
				background-image: url("https://wallpaper.dog/large/1001906.png");
				text-align: center;
				font-size: 50px;
				color: white;
				padding: 10px 0px 10px 0px;
				background-repeat: no-repeat;
				background-size: cover;
				font-family: Sans-serif;
				font: Arial;
			}
			
			h1 {
				text-align: center;
				font-size: 60px;
				color: #66B933;
			}
			
			h4 {
				text-align: center;
				font-size: 30px;
				color: white;
			}
			
			h5 {
				text-align: center;
				font-size: 20px;
				color: white;
			}
			input[type="submit"] {
				width: 320px;
				height: 60px;
				border: none;
				background: #66B933;
				color: white;
			}
			
			input[type="button"] {
				width: 320px;
				height: 60px;
				border: none;
				background: #66B933;
				color: white;
			}
			
		</style>
	</head>

<body>
	<form action="form.html" method="POST">
	<h1> Registration Form: Summary Page </h1>
	<h4> These are your inputted details, kindly check them.</h4>
	<h5> If you wish to go back to the registration page, use button below. </h5>
	
<?php
	$fname = $_POST ["fname"];
	echo "Firstname: " . $fname;
	echo "<br>";
	
	$lname = $_POST ["lname"];
	echo "Lastname: " . $lname;
	echo "<br>";
	
	$email = $_POST ["email"];
	echo "Email: " . $email;
	echo "<br>";
	
	$pswrd = $_POST ["pswrd"];
	echo "Password: " . $pswrd;
	echo "<br>";
	
?> 
	<input type="submit" name="back" value="Back">
	
	<form action="">
		<a href="home.html" </a>
		<input type="button" value="Home">
	</form>
	
</body>
</html>