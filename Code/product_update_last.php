<?php

$con = mysqli_connect("localhost","root","","store"); 

	$sql = 'UPDATE product
	          SET Name= "'.$_POST['name'].'" , Price = "'.$_POST['price'].'",Quantity= "'.$_POST['qq'].'" WHERE ProductID = "'.$_POST['id'].'" ';
$check = mysqli_query($con,$sql);
if(!$check){
	echo 'DELETE ERROR';
}else{

	include("product_all.php");
}



?>
