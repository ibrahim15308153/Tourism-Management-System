<?php
	session_start();

	if(isset($_REQUEST['submit']))
	{
		$fname = trim($_REQUEST['fname']);
		$lname = trim($_REQUEST['lname']);
		$phone = trim($_REQUEST['phone']);
		$name = trim($_REQUEST['uname']);
		$pass1 = trim($_REQUEST['pass1']);
		$pass2 = trim($_REQUEST['pass2']);
		$email = trim($_REQUEST['email']);
		
		if($name == "")
		{
			echo "invalid or empty name..<br>";
			header('location: registration.php');
		}
		else if($fname="")
		{
			echo "empty field";
			header('location: registration.php');
		}
		else if($lname="")
		{
			echo "empty field";
			header('location: registration.php');
		}
		else  if (empty($_POST["email"])) {
			echo "Email is required";
			header('location: registration.php');
		} 
		else if(($_POST["email"])!==""){
		$email = test_input($_POST["email"]);

		header('location: registration.php');
		if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
		echo "Invalid email format"; 
		
		header('location: registration.php');
		}else
		{
			if($pass1 == ""){
			echo "invalid or empty password..";
			header('location: registration.php');
		}
		else{
				echo "password and repassword error!";
				header('location: registration.php');
			}			
		}
		}
		
		
	}
	
	else
	{
		header('location: login.php');
		//echo "Invalid request!";
	}
	if($pass1 == $pass2){

				$_SESSION['uname'] = $name;
				$_SESSION['email'] = $email;
				$_SESSION['pass1'] = $pass1;
				header('location: login.php');
	}
function test_input($data) 
{
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}

?>
