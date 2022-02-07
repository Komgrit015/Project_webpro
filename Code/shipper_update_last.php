<?php

$con = mysqli_connect("localhost","root","","store"); 

	$sql = 'UPDATE shipper
	          SET CompanyName= "'.$_POST['name'].'",PhoneNO= "'.$_POST['pnb'].'" WHERE ShipID = "'.$_POST['id'].'" ';
$check = mysqli_query($con,$sql);
if(!$check){
	echo 'DELETE ERROR';
}else{

	include("shipper_all.php");
}



?>
