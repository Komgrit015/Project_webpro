<?php
	session_start();
	if($_SESSION["User"]==""){

		include("login_session.php");
		echo "please login";
		exit();
	}
	else{
		echo "welcome : ".$_SESSION["User"];
		include("ALL.php");
	}
	?>
	<html>
	<br>
	<a href="logout_session.php">Logout</a>
	</html>
