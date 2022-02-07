<?php

$con = mysqli_connect("localhost","root","","store");
$sql = 'INSERT INTO customer VALUES ("","'.$_POST['name'].'","'.$_POST['sex'].'","'.$_POST['addr'].'","'.$_POST['pnb'].'","'.$_POST['day'].'-'.$_POST['month'].'-'.$_POST['year'].'")';

$check = mysqli_query($con,$sql);
if(!$check){
	echo "ERROR EXECUTE SQL";
}else{
	include("customer_all.php");
}



?>
