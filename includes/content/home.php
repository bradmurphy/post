<?php 

	if ($_SESSION['logged_in']) {
		// print_r($_SESSION);
		echo '<div class="content-wrap">';
		echo '<nav>';
		echo '<ul>';
		echo '<li><a href="index.php">Post</a></li>';
		echo '<li><a href="index.php?page=users">Users</a></li>';
		echo '<li><a href="index.php?page=logout">Log Out</a></li>';
		echo '</ul>';
		echo '</nav>';
		echo '<div class="session-container">';
		echo '<div class="user-session">';
		echo '<div class="profile-pic">' . '<img src="' . $_SESSION['profile_pic'] . '" alt="Profile Pic"/>' . '</div>';
		echo '<div class="user-text">' . $_SESSION['first_name'] . " " . $_SESSION['last_name'] . '</div>';
		echo '</div>';
		echo '</div>';
		echo '<hr>';
		include('comments.php');
		include('all_comments.php');
		echo '</div>';
	} else {
		include('login.php');
	}

?>