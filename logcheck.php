<?php
	session_start();

	if(isset($_REQUEST['submit']))
	{

		$name = trim($_REQUEST['uname']);
		$pass = trim($_REQUEST['pass1']);
		
		
		
			
			if(($_SESSION['uname'] == $name) && ($_SESSION['pass1'] == $pass))

			{

				header('location: adminhome.php');
			}else
			{
				header('location: adminhome.php');
			}			
		
	}
	
?>