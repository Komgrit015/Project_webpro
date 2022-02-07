<html>
<head><title>REPORT ORDERS</title></head>
<body>
<?php
	include("report.php");
	$con = mysqli_connect("localhost","root","","store");

	if(!isset($ins)){

		$sql =  'SELECT o1.OrderID,c1.Name,e1.Name,s1.CompanyName,o1.ShipAddress,o1.Orderdate,o1.Status
		            FROM orders AS o1
					INNER JOIN customer AS c1 ON (o1.CustomerID = c1.CustomerID)
					INNER JOIN employee AS e1 ON (o1.EmployeeID = e1.EmployeeID)
					INNER JOIN shipper AS s1 ON (o1.ShipID = s1.ShipID)';
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

			echo '<table border="1" cellspacing="1" cellpadding="2" align="center" >';

			echo '<tr bgcolor="ccff33">';
			echo '<td >';
			echo "OrderID";
			echo '</td>';
			echo '<td>';
			echo "Customer NAME";
			echo '</td>';
			echo '<td >';
			echo "Employee NAME";
			echo '</td>';
			echo '<td>';
			echo "Shipper";
			echo '</td>';
			echo '<td>';
			echo "ShipAddress";
			echo '</td>';
			echo '<td>';
			echo "OrderDate";
			echo '</td>';
			echo '<td>';
			echo "Satatus";
			echo '</td>';
			echo '</tr>';
			while($row=mysqli_fetch_array($check)){

				echo '<tr>';
				for($i=0;$i<$fields;$i++){
					echo '<td>'.$row[$i].'</td>';
				}

				echo '<form name="confirm_'.$row[0].'"  method="post" action="report_o_d.php">';
				echo '<input type = "hidden" name = "or_id" value = "'.$row[0].'">';
				echo '<input type = "hidden" name = "ship_name" value = "'.$row[3].'">';
				echo '<input type = "hidden" name = "or_date" value = "'.$row[5].'">';
				echo '<td><input name = "con" type = "submit" value = "Detail"></td>';
			   echo '</tr>';
			   echo '</form>';
			}
			echo '</table>';
		}

	}
	mysqli_close($con);

	?>
	</body>
</html>
