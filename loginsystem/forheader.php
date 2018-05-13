<?php
session_start();
?>

<!DOCTYPE html>
<html>
<head>
	<title>Login system</title>
	<link rel="stylesheet" type="text/css" href="stylelogin.css">
</head>
<body>

<header>
	<nav>
		<div class="main-wrapper">
			<ul>
				<li><a href="index.php">Home</a></li>
			</ul>
			<div class="nav-login">
				<?php
					if (isset($_SESSION['u_name'])) 
					{
						echo '
						<form action="include/logout-inc.php" method="POST">
						<button type="submit" name="submit">Logout</button>
						</form>';
					}
					else
					{
						echo '
						<form action="include/login-inc.php" method="POST">
						<input type="text" name="name" placeholder="Username/e-mail">
						<input type="password" name="pwd" placeholder="password">
						<button type="submit" name="submit">Login</button>
						</form>
						<a href="signup.php">Sign Up</a>';
						
					}

				?>
				
			</div>
		</div>
	</nav>
</header>

