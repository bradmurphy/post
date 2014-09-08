<div class="form-container">
	<form action="index.php?page=processLogin" method="POST">
		<input type="text" name="email" placeholder="Email">
		<input type="password" name="password" placeholder="Password">
		<input type="submit" value="Login">
		<?php

		if(!$_SESSION['logged_in']) {
			// If the user is logged in, do not show register
			echo '<div>';
			echo '<a href="index.php?page=register">Register</a>';
			echo '</div>';
		} 
		
		?>
	</form>
</div>




	