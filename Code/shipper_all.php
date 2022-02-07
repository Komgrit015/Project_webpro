<html>
<head><title>SHIPPER</title></head>
<body>
<?php
include("admin_session.php");
	$con = mysqli_connect("localhost","root","","store");

	if(!isset($ins)){

		$sql =  'SELECT * FROM shipper';
		$check = mysqli_query($con,$sql);
		$fields = mysqli_num_fields($check);
		$row = mysqli_num_rows($check);
		if(!$check){

			echo mysqli_errno().':'.mysqli_error().'<br>';

		}elseif($row == 0){



			echo '<table border="1" cellspacing="1" cellpadding="2" align="center" >';
			echo '<tr>';
			echo '<form name="insert" method="post" action = "shipper_insert.php">';
			echo '<td>';
			echo '<input type="submit" name="insert" value="ADD" >';
			echo '</td>';
			echo '</form>';
			echo '</tr>';
			echo '<tr bgcolor="ccff33">';
			echo '<td >';
			echo "ShipID";
			echo '</td>';
			echo '<td>';
			echo "CompanyName";
			echo '</td>';
			echo '<td >';
			echo "Phone Number";
			echo '</td>';
			echo '</tr>';
			echo '</table>';
			echo '<table border="0" cellspacing="0" cellpadding="1" align="center" >';
			echo '<tr>';
			echo '<td>';
			echo '<font color="red"> ';
		    echo "NO INFORMATION YOU CAN ADD SHIPPER";
			echo '</font>';
			echo '</td>';
			echo '</tr>';
			echo '</table>';

		}else{

			echo '<table border="1" cellspacing="1" cellpadding="2"  align="center">';
			echo '<tr>';
			echo '<form name="insert" method="post" action = "shipper_insert.php">';
			echo '<td align="center">';
			echo '<input type="submit" name="insert" value="ADD">';
			echo '</td>';
			echo '</form>';
			echo '</tr>';
			echo '<tr bgcolor="ccff33">';
			echo '<td >';
			echo "ShipID";
			echo '</td>';
			echo '<td>';
			echo "CompanyName";
			echo '</td>';
			echo '<td >';
			echo "Phone Number";
			echo '</td>';
			echo '</tr>';
			while($row=mysqli_fetch_array($check)){

				echo '<tr>';
				for($i=0;$i<$fields;$i++){
					echo '<td>'.$row[$i].'</td>';
				}

				echo '<form name="up_'.$row[0].'"  method="post" action="shipper_update.php">';
				echo '<input type = "hidden" name = "up_id" value = "'.$row[0].'">';
				echo '<input type = "hidden" name = "up_name" value = "'.$row[1].'">';
				echo '<input type = "hidden" name = "up_pnb" value = "'.$row[2].'">';
				echo '<td><input name = "up" type = "submit" value = "Update"></td>';
			    echo '</form>';
				echo '<form name = "delete_'.$row[0].'" method = "post" action = "shipper_delete.php">';
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
