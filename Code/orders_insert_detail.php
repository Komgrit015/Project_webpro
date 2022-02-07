<html>
<head><title>ORDERS DETAIL</title></head>
<body>
<?php
include("admin_session.php");

?>
<table align="center" border="0">
<form method="post" action="orders_detail_last.php">

<tr>
<td >Order&nbspDetail</td>
<td>
</td>
</tr>

<tr>
<td >Product</td>
<td>
<?php
echo '<input type = "hidden" name = "or_id" value = "'.$_POST['or_id'].'">';
$con = mysqli_connect("localhost","root","","store");
 $sql = 'SELECT  *  FROM  product ORDER BY  ProductID';
$check = mysqli_query($con,$sql);
$row1 = mysqli_num_fields($check);
		echo '<select name="p_id">';
		while($row = mysqli_fetch_array($check)){
			echo '<option value=';
		 for($i=0;$i<$row1;$i++){
			 echo $row[0].'>'.$row[1].'</option>';
		 }
	   }
	   echo '</select>';


?>
</td>
<td>
Quantity : <input type="number" name="qq"  min="1" max="50">
</td>
</tr>

<tr ><td ></td><td><input type="submit" name="Submit" value="ADD" ></td></tr>
</form>
</table>

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



			echo '<table border="1" cellspacing="1" cellpadding="2" align="center" >';
			echo '<tr bgcolor="#ccff33">';
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
			echo '</table>';
			echo '<table border="0" cellspacing="0" cellpadding="1" align="center" >';
			echo '<tr>';
			echo '<td>';
			echo '<font color="red"> ';
		    echo "NO INFORMATION YOU CAN ADD DETAIL";
			echo '</font>';
			echo '</td>';
			echo '</tr>';
			echo '</table>';

		}else{

			echo '<table border="1" cellspacing="1" cellpadding="2"  align="center">';
			echo '<tr bgcolor="#ccff33">';
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

				echo '<form name = "delete_'.$row[0].'" method = "post" action = "orders_detail_delete.php">';
				echo '<input type="hidden" name = "del_id" value = "'.$row[0].'" >';
				echo '<input type="hidden" name = "del_name" value = "'.$row[1].'" >';
				echo '<td><input type="submit" name="del" value ="delete" ></td>';
				echo '</form>';
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
		}

	}

	function sum_price($price,$quantity){
		global $total;

		$total += $price * $quantity;

	}
	mysqli_close($con);

	?>
</body>
</html>
