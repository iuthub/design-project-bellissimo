<?php
	include_once 'forheader.php';
?>

<section class="main-container">
	<div class="main-wrapper">
		<h2>Sign Up</h2>
		<form class="form-signup" action="include/signup-inc.php" method="POST">
			<input type="text" name="name" placeholder="Name">
			<input type="text" name="email" placeholder="E-mail">
			<input type="password" name="pwd" placeholder="Password">
			<button type="submit" name="submit">Sign Up</button>	

		</form>
		
	</div>
</section>

<?php
	include_once 'footer.php';
?>