<?php

if(isset($_POST['p_id'])){
	$con = mysqli_connect("localhost","root","","store");
	$sql = 'SELECT Price FROM product WHERE ProductID = "'.$_POST['p_id'].'" ';
	$check = mysqli_query($con,$sql);
	$fields = mysqli_num_fields($check);

	while($row=mysqli_fetch_array($check)){
		for($i=0;$i<$fields;$i++){

					$row[0];
				}
				$price=$row[0];
	}
}

$con = mysqli_connect("localhost","root","","store");
$sql = 'INSERT INTO order_detail VALUES ("'.$_POST['or_id'].'","'.$_POST['p_id'].'","'.$price.'","'.$_POST['qq'].'")';

$check = mysqli_query($con,$sql);
if(!$check){
			include("orders_insert_detail.php");
			echo '<table border="0" cellspacing="0" cellpadding="1" align="center" >';
			echo '<tr>';
			echo '<td>';
			echo '<font color="red"> ';
		    echo "CANT ADD SAME PRODUCT DELETE OLD PRODUCT FIRST";
			echo '</font>';
			echo '</td>';
			echo '</tr>';
			echo '</table>';


}else{
	include("orders_insert_detail.php");
}
?>
