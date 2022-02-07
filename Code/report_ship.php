<?php
	include("report.php");
	$con = mysqli_connect("localhost","root","","store");

	if(!isset($ins)){

		$sql =  'SELECT s1.OrderID,p1.CompanyName,s1.ShipDate,s1.Status
		            FROM shipper_detail AS s1
					INNER JOIN shipper AS p1 ON (s1.ShipID = p1.ShipID)';

		$check = mysqli_query($con,$sql);
		$fields = mysqli_num_fields($check);
		$row = mysqli_num_rows($check);
		if(!$check){

			echo mysqli_errno().':'.mysqli_error().'<br>';

		}elseif($row == 0){



			echo '<table border="0" cellspacing="0" cellpadding="1" align="center" >';
			echo '<tr>';
			echo '<td>';
			echo '<font color="red"> ';
		    echo "NO REPORT DETAIL";
			echo '</font>';
			echo '</td>';
			echo '</tr>';
			echo '</table>';

		}else{

			echo '<table border="1" cellspacing="1" cellpadding="2"  align="center">';
			echo '<tr bgcolor="ccff33">';
			echo '<td >';
			echo "OrderID";
			echo '</td>';
			echo '<td>';
			echo "CompanyName";
			echo '</td>';
			echo '<td >';
			echo "ShipDate";
			echo '</td>';
			echo '<td >';
			echo "Status";
			echo '</td>';
			echo '</tr>';
			while($row=mysqli_fetch_array($check)){

				echo '<tr>';
				for($i=0;$i<$fields;$i++){
					echo '<td>'.$row[$i].'</td>';

				}


				echo '</tr>';


			}

			echo '</table>';




		}
	}


	mysqli_close($con);
	?>
