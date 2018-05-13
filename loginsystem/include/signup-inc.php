<?php

if (isset($_POST['submit'])) 
{
	include_once 'dbh-inc.php';

	$name = mysqli_real_escape_string($conn, $_POST['name']);
	$email = mysqli_real_escape_string($conn, $_POST['email']);
	$pwd = mysqli_real_escape_string($conn, $_POST['pwd']);

	// Errors handlers
	// Firsltly, check for empty fields  
	if (empty($name) || empty($email) ||  empty($pwd)) 
	{
		header("Location: ../signup.php?signup=empty");
		exit();
	}
	else
	{
		//check for validation 
		if (!preg_match("/^[a-zA-Z]*$/", $name)) 
		{
			header("Location: ../signup.php?signup=invalid");
			exit();
		}
		else
		{
			 //check for email validation
			if(!$email)
			{
				header("Location: ../signup.php?signup=invalidemail");
				exit();
			}
			else
			{
				$sql = "SELECT * FROM usersnew WHERE users_name = '$name'";
				$result = mysqli_query($conn, $sql);
				$resultCheck = mysqli_num_rows($result);

				if ($resultCheck > 0) 
				{
					header("Location: ../signup.php?signup=usertaken");
					exit();
				}
				else
				{
					//Hashing The Password
					$hashedPwd = password_hash($pwd, PASSWORD_DEFAULT);
					// Insert the user into the database
					$sql = "INSERT INTO usersnew (users_name, users_email,  users_pwd) VALUES('$name','$email','$hashedPwd');";

					mysqli_query($conn, $sql);
					header("Location: ../signup.php?signup=success");
					exit();
				}

			}
		}

	} 

}
else
{
	header("Location: ../signup.php");
	exit();
}



?>