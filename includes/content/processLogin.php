<?php

$email = (isset($_POST['email'])) ? $_POST['email'] : "";
$password = (isset($_POST['password'])) ? md5(SALT . $_POST['password']) : "";

// SQL LOGIC TO CHECK EMAILS

$emailSQL = "SELECT * FROM users WHERE email = '$email'";

$results = $link -> query($emailSQL);
$rows = $results -> num_rows;

if ($rows >= 1 ) {
	// EMAIL FOUND IN DATABASE, RUN PASSWORD CHECK
	while ($row = $results -> fetch_assoc()) {
		if($row['password'] === $password) {
			$_SESSION['id'] = $row['id'];
			$_SESSION['profile_pic'] = $row['profile_pic'];
			$_SESSION['first_name'] = $row['first_name'];
			$_SESSION['last_name'] = $row['last_name'];
			$_SESSION['logged_in'] = TRUE;
			echo "<script>window.location = 'index.php';</script>";
		} else {
			echo "You have entered the wrong password.<br/>";
			echo '<a href="index.php">Try Again</a>' . ' | ' . '<a href="index.php?page=register">Register</a>';
		}
	}
} else {
	// EMAIL NOT FOUND IN DATABASE, DISPLAY ERROR
	echo "Sorry, that email is not registered.<br/>";
	echo '<a href="index.php">Try Again</a>' . ' | ' . '<a href="index.php?page=register">Register</a>';
}

?>