<html>
<head><title>EMPLOYEE</title></head>
<body>
<?php
	include("admin_session.php");
	$con = mysqli_connect("localhost","root","","store");

	if(!isset($ins)){

		$sql =  'SELECT * FROM employee';
		$check = mysqli_query($con,$sql);
		$fields = mysqli_num_fields($check);
		$row = mysqli_num_rows($check);
		if(!$check){

			echo mysqli_errno().':'.mysqli_error().'<br>';

		}elseif($row == 0){



			echo '<table border="1" cellspacing="1" cellpadding="2" align="center" >';
			echo '<tr>';
			echo '<form name="insert" method="post" action = "employee_insert.php">';
			echo '<td>';
			echo '<input type="submit" name="insert" value="ADD" >';
			echo '</td>';
			echo '</form>';
			echo '</tr>';
			echo '<tr bgcolor="ccff33">';
			echo '<td >';
			echo "EmpID";
			echo '</td>';
			echo '<td>';
			echo "Name";
			echo '</td>';
			echo '<td >';
			echo "Sex";
			echo '</td>';
			echo '<td>';
			echo "Address";
			echo '</td>';
			echo '<td>';
			echo "PhoneNO";
			echo '</td>';
			echo '<td>';
			echo "DateOfBirth";
			echo '</td>';
			echo '<td>';
			echo "Salary";
			echo '</td>';
			echo '<td>';
			echo "User";
			echo '</td>';
			echo '<td>';
			echo "Password";
			echo '</td>';
			echo '<td>';
			echo "Status";
			echo '</td>';
			echo '</tr>';
			echo '</table>';
			echo '<table border="0" cellspacing="0" cellpadding="1" align="center" >';
			echo '<tr>';
			echo '<td>';
			echo '<font color="red"> ';
		    echo "NO INFORMATION YOU CAN ADD EMPLOYEE";
			echo '</font>';
			echo '</td>';
			echo '</tr>';
			echo '</table>';

		}else{

			echo '<table border="1" cellspacing="1" cellpadding="2"  align="center">';
			echo '<tr>';
			echo '<form name="insert" method="post" action = "employee_insert.php">';
			echo '<td align="center">';
			echo '<input type="submit" name="insert" value="ADD">';
			echo '</td>';
			echo '</form>';
			echo '</tr>';
			echo '<tr bgcolor="ccff33">';
			echo '<td >';
			echo "EmpID";
			echo '</td>';
			echo '<td>';
			echo "Name";
			echo '</td>';
			echo '<td >';
			echo "Sex";
			echo '</td>';
			echo '<td>';
			echo "Address";
			echo '</td>';
			echo '<td>';
			echo "PhoneNO";
			echo '</td>';
			echo '<td>';
			echo "DateOfBirth";
			echo '</td>';
			echo '<td>';
			echo "Salary";
			echo '</td>';
			/*echo '<td>';
			echo "User";
			echo '</td>';
			echo '<td>';
			echo "Password";
			echo '</td>';
			echo '<td>';
			echo "Status";
			echo '</td>';*/
			echo '</tr>';
			while($row=mysqli_fetch_array($check)){

				echo '<tr>';
				//for($i=0;$i<$fields;$i++){
					echo '<td>'.$row[0].'</td>';
					echo '<td>'.$row[1].'</td>';
					echo '<td>'.$row[2].'</td>';
					echo '<td>'.$row[3].'</td>';
					echo '<td>'.$row[4].'</td>';
					echo '<td>'.$row[5].'</td>';
					echo '<td>'.$row[6].'</td>';
				//}

				echo '<form name="up_'.$row[0].'"  method="post" action="employee_update.php">';
				echo '<input type = "hidden" name = "up_id" value = "'.$row[0].'">';
				echo '<input type = "hidden" name = "up_name" value = "'.$row[1].'">';
				echo '<input type = "hidden" name = "up_sex" value = "'.$row[2].'">';
				echo '<input type = "hidden" name = "up_addr" value = "'.$row[3].'">';
				echo '<input type = "hidden" name = "up_pnb" value = "'.$row[4].'">';
				echo '<input type = "hidden" name = "up_bd" value = "'.$row[5].'">';
				echo '<input type = "hidden" name = "up_slr" value = "'.$row[6].'">';
				/*echo '<input type = "hidden" name = "up_usr" value = "'.$row[7].'">';
				echo '<input type = "hidden" name = "up_pwd" value = "'.$row[8].'">';*/
				echo '<td><input name = "up" type = "submit" value = "Update"></td>';
			    echo '</form>';
				echo '<form name = "delete_'.$row[0].'" method = "post" action = "employee_delete.php">';
				echo '<input type="hidden" name = "del_id" value = "'.$row[0].'" >';
				echo '<td><input type="submit" name="del" value ="delete" ></td>';
				echo '</form>';
				echo '</tr>';
			}
			echo '</table>';
		}

	}
	mysqli_close($con);

	?>
	</body>
</html>
