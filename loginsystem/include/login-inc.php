<?php

session_start();

if (isset($_POST['submit'])) 
{
	 include 'dbh-inc.php';

	 $name = mysqli_real_escape_string($conn, $_POST['name']);
	 $pwd = mysqli_real_escape_string($conn, $_POST['pwd']);

	 // Error Handlers
	 // Chech for empty inputs

	 if (empty($name) || empty($pwd)) 
	 {
	 	header("Location: ../index.php?login=empty");
		exit();
	 	
	 }
	 else
	 {
	 	$sql = "SELECT * FROM usersnew WHERE users_name = '$name' OR users_email='$email'";
	 	$result = mysqli_query($conn, $sql);
	 	$resultCheck = mysqli_num_rows($result);

	 	if ($resultCheck < 1) 
	 	{
	 		header("Location: ../index.php?login=error");
			exit();
	 	}
	 	else
	 	{
	 		if ($row = mysqli_fetch_assoc($result)) 
	 		{
	 			//Dehashing the password
	 			$hashedCheck = password_verify($pwd, $row['users_pwd']);
	 			if ($hashedCheck == false)
	 			{
	 				header("Location: ../index.php?login=error");
					exit();
	 			}
	 			else
	 			{ 
	 			if ($hashedCheck == true) 
	 			{
	 				// log in here 
	 				$_SESSION['u_name'] = $row['users_name'];
	 				$_SESSION['u_email'] = $row['users_email'];
	 				//$_SESSION['u_id'] = $row['users_id'];
	 				
	 				header("Location: ../index.php?login=success");
					exit();
	 					
	 			}
	 			}
	 		}
	 	}
	 }
}
else
{
	header("Location: ../index.php?login=error");
	exit();
}