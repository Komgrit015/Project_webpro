<?php

	$con = mysqli_connect("localhost","root","","store");

	if(!isset($ins)){

		$sql =  'SELECT o1.OrderID,p1.Name,o1.UnitPrice,o1.Quantity
		            FROM order_detail AS o1
					INNER JOIN product AS p1 ON (o1.ProductID = p1.ProductID)
					where o1.OrderID = "'.$_POST['or_id'].'"';

		$check = mysqli_query($con,$sql);
		$fields = mysqli_num_fields($check);
		$row = mysqli_num_rows($check);
		if(!$check){

			echo mysqli_errno().':'.mysqli_error().'<br>';

		}elseif($row == 0){



			include("order_all.php");
			echo '<table border="0" cellspacing="0" cellpadding="1" align="center" >';
			echo '<tr>';
			echo '<td>';
			echo '<font color="red"> ';
		    echo "CANT CONFIRM YOU MUST ADD ORDER DETAIL";
			echo '</font>';
			echo '</td>';
			echo '</tr>';
			echo '</table>';

		}else{
			include("admin_session.php");
			echo '<form name = "confirm" method = "post" action = "orders_confirm_finish.php">';
			echo '<table border="1" cellspacing="1" cellpadding="2"  align="center">';
			echo '<tr bgcolor="ccff33">';
			echo '<td >';
			echo "OrderID";
			echo '</td>';
			echo '<td>';
			echo "Product";
			echo '</td>';
			echo '<td >';
			echo "Unit Price";
			echo '</td>';
			echo '<td >';
			echo "Quantity";
			echo '</td>';
			echo '</tr>';
			while($row=mysqli_fetch_array($check)){

				echo '<tr>';
				for($i=0;$i<$fields;$i++){
					echo '<td>'.$row[$i].'</td>';

				}
				sum_price($row[2],$row[3]);

				echo '<input type = "hidden" name = "or_id" value = "'.$row[0].'">';

				echo '</tr>';


			}
			echo '<tr>';
			echo '<td>';
			echo '</td>';
			echo '<td>';
			echo '</td>';
			echo '<td>';
			echo 'TOTAL';
			echo '</td>';
			echo '<td>';
			echo $total;
			echo '</td>';
			echo '</tr>';
			echo '</table>';

			echo '<tr>';
			echo '<input type = "hidden" name = "ship_name" value = "'.$_POST['ship_name'].'">';
			echo '<input type = "hidden" name = "or_date" value = "'.$_POST['or_date'].'">';
			echo '<table border="0" cellspacing="1" cellpadding="2"  align="center">';
			echo '<td><input type="submit" name="del" value ="Confirm" ></td>';
			echo '</tr>';
			echo '</table>';
			echo '</form>';
		}
	}
	function sum_price($price,$quantity){
		global $total;

		$total += $price * $quantity;

	}


	?>
