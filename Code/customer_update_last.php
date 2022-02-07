<?php

$con = mysqli_connect("localhost","root","","store");

	$sql = 'UPDATE customer
	          SET Name= "'.$_POST['name'].'" , Address= "'.$_POST['addr'].'",PhoneNO= "'.$_POST['pnb'].'" WHERE CustomerID = "'.$_POST['id'].'" ';
$check = mysqli_query($con,$sql);
if(!$check){
	echo 'DELETE ERROR';
}else{

	include("customer_all.php");
}



?>
