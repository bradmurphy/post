<?php

// GRAB THE COMMENT FORM MARKUP PAGE
$comment = $_POST['comment'];

// USERNAME SHOULD BE SET FROM OUR SESSION
$username = $_SESSION['id'];

// INSERT INTO comments (username, comment) VALUES ('dan', 'hello world');
$sql = "INSERT INTO comments (comment, user_id) VALUES('" . $comment . "', '" . $username . "')";

	if ($link -> query($sql) === false) {
		echo "You had a mySQL error";
	} else {
		echo "<script>window.location = 'index.php';</script>";
	}

?>
