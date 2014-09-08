<?php include('sessions.php'); ?>

<?php include('includes/header.php'); ?>

			
<!-- 	<header>
		<?php include("includes/nav.php"); ?>
	</header> -->

	<section>
		<?php 
		$filename = 'includes/content/'; // . page . '.php'
		$fourohfour = $filename . '404.php';
		$home_page = $filename . 'home.php';

		if (isset($_GET['page'])) {
			$filename = $filename . $_GET['page'] . '.php';

			if (file_exists($filename)) {
				$page = $filename;
			} else {
				$page = $fourohfour;
			}

			// $page = $_GET['page'];
		} else {
			$page = $home_page;
		}

		include($page); ?>
	</section>


<?php include('includes/footer.php'); ?>		
