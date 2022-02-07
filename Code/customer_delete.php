<?php
 $con = mysqli_connect("localhost","root","","store");
 $sql = 'DELETE FROM  customer WHERE CustomerID = "'.$_POST['del_id'].'"';
$check = mysqli_query($con,$sql);
if(!$check){
	echo 'DELETE ERROR';
}else{

	include("customer_all.php");
}


?>
