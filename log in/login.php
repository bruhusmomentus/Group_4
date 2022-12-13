<?php
	$email = $_POST['email'];
	$password = $_POST['password'];

	$con = new mysqli("localhost","root","","login");
	if($con->connect_error) {
		die("Failed to connect: ".$con->connect_error);
	} else {
		$stmt = $con->prepare("select * from fatima where email = ?");
		$stmt->bind_param("sssssi", $email);
		$stmt -> execute();
		$stmt -> store_result();
		$stmt_result -> $stmt->get_result();
		if($stmt_result->num_rows > 0) {
			$data = $stmt_result->fetch_assoc();
			if($data['password'] === $password) {
				echo "<h2>Login Successfully</h2>";
		}
		}	else {
			echo "<h2>Invalid email or password</h2>";
		}
	}
?>

