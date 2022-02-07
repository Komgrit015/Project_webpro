<?php
	session_start();
	$connect = mysqli_connect("localhost","root","","store");
	$sql = 'select * from employee where User ="'.$_POST['user'].'" AND Password = "'.$_POST['pass'].'"';

	$result = mysqli_query($connect,$sql);
	$numrows = mysqli_num_rows($result);

	if($numrows == 0){
		include("login_session.php");
		echo   '<table border="0" align="center"><tr><td>please check username and pass</td></tr></table>';
	}else{

		while($row = mysqli_fetch_array($result,MYSQLI_NUM)){
			if($row[9]=="Admin"){
				$_SESSION['User'] = $row[1];
				session_write_close();
				header("location:admin_session.php");

			}
		}
		mysqli_close($connect);
	}

	?>
