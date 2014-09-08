<?php

// echo "<pre>";
// print_r($_POST);
$first_name = (isset($_POST['first_name'])) ? $_POST['first_name'] : "";
$last_name = (isset($_POST['last_name'])) ? $_POST['last_name'] : "";
$pic = (isset($_POST['profile_pic'])) ? $_POST['profile_pic'] : "";
$email = (isset($_POST['email'])) ? $_POST['email'] : "";
$password = (isset($_POST['password'])) ? md5(SALT . $_POST['password']) : "";


// ERROR HANDLING
if ($first_name === "") {
	die("You must enter your first name!");
}

if ($last_name === "") {
	die("You must enter your last name!");
}

if ($pic === "") {
	die("You must enter a profile pic!");
}

if ($email === "") {
	die("You must enter your email!");
}

if ($password === "") {
	die("You must enter your password!");
}

// SQL LOGIC TO CHECK EMAILS
$emailSQL = "SELECT * FROM users WHERE email = '$email'";

if ($result = $link -> query($emailSQL)) {
	if ($result -> num_rows >= 1) {
		echo "That email already exists.";
	} else {
		// SQL LOGIC (if errors out, page will die)
		$sql = " INSERT INTO users (first_name, last_name, profile_pic, email, password) VALUES ('$first_name', '$last_name', '$pic', '$email', '$password') ";

		if ($link -> query($sql) === false) {
			die ("You had a mysql error");
		} else {
			$last_inserted_id = $link -> insert_id;
			$affected_rows = $link -> affected_rows;
		}
		echo "The user inserted was user ID: " . $last_inserted_id;
		echo "<script>setTimeout(function(){window.location.href='index.php?page=login'}, 2500);</script>";
	}
} else {
	// ERROR
	// echo "There was an error, please try again.";
	printf("Error Message: %s\n", $mysqli->error);
	// echo "<script>setTimeout(function(){window.location.href='index.php?page=register'}, 2500);</script>";
}

?>