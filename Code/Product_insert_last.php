<?php

$con = mysqli_connect("localhost","root","","store");
$sql = 'INSERT INTO product VALUES ("","'.$_POST['name'].'","'.$_POST['price'].'","'.$_POST['qq'].'")';

$check = mysqli_query($con,$sql);
if(!$check){
	echo "ERROR EXECUTE SQL";
}else{
	include("product_all.php");
}



?>
