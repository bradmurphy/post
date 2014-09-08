<hr>

<?php

	$sql = "SELECT * FROM comments INNER JOIN users ON comments.user_id=users.id";

	// $results = mysqli_query($link, $sqlQuery);
	$results = $link -> query($sql);
	$rows = $results -> num_rows;

	while ($row = $results -> fetch_assoc()) {
		echo '<div class="comment-container">';
		echo '<div class="user-comment">';
		echo '<div class="profile-pic">' . '<img src="' . $row['profile_pic'] . '" alt="Profile Pic"/>' . '</div>';
		echo '<div class="user-text">' . $row['first_name'] . " " . $row['last_name'] . '</div>';
		echo '</div>';
		echo '<div class="comment">' . $row['comment'] . '</div>';
		echo '</div>';
		// print_r($row);
	}


?>

