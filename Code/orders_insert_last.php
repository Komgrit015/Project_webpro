<?php

$con = mysqli_connect("localhost","root","","store");
$sql = 'INSERT INTO orders VALUES ("","'.$_POST['c_name'].'","'.$_POST['e_name'].'","'.$_POST['s_name'].'","'.$_POST['addr'].'","'.$_POST['day'].'-'.$_POST['month'].'-'.$_POST['year'].'","CHECK")';

$check = mysqli_query($con,$sql);
if(!$check){
	echo "ERROR EXECUTE SQL";
}else{
	include("order_all.php");
}



?>
