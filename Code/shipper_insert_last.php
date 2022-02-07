<?php

$con = mysqli_connect("localhost","root","","store");
$sql = 'INSERT INTO shipper VALUES ("","'.$_POST['name'].'","'.$_POST['pnb'].'")';

$check = mysqli_query($con,$sql);
if(!$check){
	echo "ERROR EXECUTE SQL";
}else{
	include("shipper_all.php");
}



?>
