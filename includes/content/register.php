<div class="form-container">
	<form action="index.php?page=processRegister" method="POST">
		
		<input type="text" name="first_name" placeholder="First Name"><br/>
		<input type="text" name="last_name" placeholder="Last Name"><br/>
		<input type="text" name="profile_pic" placeholder="Profile Pic"><br/>
		<input type="text" name="email" placeholder="E-mail"><br/>
		<input type="password" name="password" placeholder="Password"><br/>
		<input type="submit" value="SUBMIT">

		<?php

		if(!$_SESSION['logged_in']) {
			// If the user is logged in, do not show register
			echo '<div>';
			echo '<a href="index.php">Login</a>';
			echo '<div>';
		} 

		?>

	</form>
</div>

