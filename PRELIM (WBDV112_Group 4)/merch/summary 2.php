<!DOCTYPE html>
<html>
	<head>
		<style>
			<body bgcolor = "green">
        <p align = "center">
        <font face = "cocogoose" color = "white" size = "+30">
            OLFU MERCHANDISE
		</font>
    </p>

    <p align = "center">
        <font face = "Montserrat" color = "black" size = "+1">
            125 MacArthur Hwy, Valenzuela, Metro Manila
		</font>
</style>
</head>

<body>
	<form action="orderform.html" method="POST">
	<h1> OLFU MERCH INVOICE </h1>
	<h4> Please check your complete invoice. You will receive a copy of this on your email.</h4>
	<h5> If you wish to go back to the Order page, use button below. </h5>
	
<?php
	$fname = $_POST ["fname"];
	echo "Last Name" . $fname;
	echo "<br>";
	
	$lname = $_POST ["lname"];
	echo "First Name" . $lname;
	echo "<br>";
	
	$studentno = $_POST ["email"];
	echo "Student No," . $studentno;
	echo "<br>";
	
?> 
	<input type="submit" name="back" value="Back">
	
	<form action="">
		<a href="ORDER FORM.html" </a>
		<input type="button" value="ORDER FORM">
	</form>
	
</body>
</html>