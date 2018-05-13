<?php
	include_once 'forheader.php';
?>

<section class="main-container">
	<div class="main-wrapper">
		<h2>Home</h2>
		<?php
			if (isset($_SESSION['u_name'])) 
			{
				//echo "Welcome You Are Now Logged In!";
				echo '<h3>Welcome You Are Now Logged In!</h3>';

			}

		?>
	</div>
</section>

<?php
	include_once 'footer.php';
?>
