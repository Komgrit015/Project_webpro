<html>
<head><title>ORDERS ADD</title></head>
<body>
<?php

include("admin_session.php");
?>
<table align="center" border="0">
<form method="post" action="orders_insert_last.php">
</tr>
<td width="20">Customer&nbspName</td>
<td>
<?php
$con = mysqli_connect("localhost","root","","store");
 $sql = 'SELECT  *  FROM  customer ORDER BY CustomerID';
$check = mysqli_query($con,$sql);
$row1 = mysqli_num_fields($check);

		echo '<select name="c_name">';
		while($row = mysqli_fetch_array($check)){
			echo '<option value=';
		 for($i=0;$i<$row1;$i++){
			 echo $row[0].'>'.$row[1].'</option>';
		 }

	   }
	    echo '</select>';


?>
</td>
</tr>
<tr>
<td >Employee&nbspNAME</td>
<td>
<?php
$con = mysqli_connect("localhost","root","","store");
 $sql = 'SELECT  *  FROM  employee ORDER BY EmployeeID';
$check = mysqli_query($con,$sql);
$row1 = mysqli_num_fields($check);
		echo '<select name="e_name">';
		while($row = mysqli_fetch_array($check)){
			echo '<option value=';
		 for($i=0;$i<$row1;$i++){
			 echo $row[0].'>'.$row[1].'</option>';
		 }
	   }
	   echo '</select>';
?>
</td>
</tr>
<tr>
<td >SHIPPER</td>
<td>
<?php
$con = mysqli_connect("localhost","root","","store");
 $sql = 'SELECT  *  FROM  shipper ORDER BY ShipID';
$check = mysqli_query($con,$sql);
$row1 = mysqli_num_fields($check);
		echo '<select name="s_name">';
		while($row = mysqli_fetch_array($check)){
			echo '<option value=';
		 for($i=0;$i<$row1;$i++){
			 echo $row[0].'>'.$row[1].'</option>';
		 }

	   }
	   echo '</select>';
?>
</td>
</tr>
<tr>
<td >Ship&nbspAddress</td>
<td> <input name="addr" type="text" size="25" value="" > </td>
</tr>
<tr>
<td >Order&nbspDate</td>
<td>
<?php

             echo '<select name ="day">';
		    for($i=1;$i<=31;$i++){

			echo '<option value ='.$i.'>';
			echo ''.$i.'</option>';

		    }
		    echo '</select>';
			echo ' - ';
			echo '<select name ="month">';
		    for($i=1;$i<=12;$i++){

			echo '<option value ='.$i.'>';
			echo ''.$i.'</option>';

		    }
		    echo '</select>';
			echo ' - ';
			echo '<select name ="year">';
		    for($i=1990;$i<=2017;$i++){

			echo '<option value ='.$i.'>';
			echo ''.$i.'</option>';

		    }
		    echo '</select>';

?>
</td>
</tr>
</tr>
<tr ><td ></td><td><input type="submit" name="Submit" value="NEXT" ></td></tr>
</form>
</table>
</body>
</html>
