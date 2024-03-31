<?php
	$password_hash = password_hash($_POST["password"], PASSWORD_DEFAULT);
	require __DIR__ . "/database.php";

	$sql = "INSERT INTO login_info (name,email,password) VALUES (?,?,?)";

	$stmt = $mysqli -> stmt_init();

	if (! $stmt -> prepare($sql)) {
		die("SQL error: " . $mysqli -> error);
	}

	$stmt -> bind_param("sss", $_POST["name"], $_POST["email"], $password_hash);
	
	if ($stmt -> execute()) {
		header("Location: Visit Indonesia - Login.php");
		exit;
	}
	else  {
		if ($mysqli -> errno === 1062) {
			die("email already taken");
		}
		die ($mysqli -> error . " " . $mysqli -> errno);
	}


	var_dump($password_hash);
?>