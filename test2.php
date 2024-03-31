<?php
	require __DIR__ . "/database.php";

	$sql = "INSERT INTO evisa_request (full_name,sex,place_of_birth,date_of_birth,nationality,full_address,phone_number,email,occupation,pasport_number,duration,type_of_visa,reason,pasport_photography,vaccine_certificate) VALUES (?,?,?,?,?,?,?,?,?,?,?,?,?,?,?)";

	$stmt = $mysqli -> stmt_init();

	if (! $stmt -> prepare($sql)) {
		die("SQL error: " . $mysqli -> error);
	}

	$stmt -> bind_param("sssssssssiissss", 
	$_GET["fullname"], $_GET["sex"], $_GET["pob"], $_GET["dob"], $_GET["nationality"], $_GET["address"],
	$_GET["telephone"],$_GET["email"], $_GET["occupation"], $_GET["pasport_number"], $_GET["duration"], 
	$_GET["visa_type"], $_GET["reason"], $_GET["pasphoto"], $_GET["vaccer"]);
	
	if ($stmt -> execute()) {
		header("Location: Visit Indonesia - Table.php");
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