<?php
 $con = mysqli_connect("localhost","root","","store");
 $sql = 'DELETE FROM  orders WHERE OrderID = "'.$_POST['del_id'].'"';
$check = mysqli_query($con,$sql);
if(!$check){
	echo 'DELETE ERROR';
}


$sql = 'DELETE FROM  shipper_detail WHERE OrderID = "'.$_POST['del_id'].'"';
$check = mysqli_query($con,$sql);
if(!$check){
	echo 'DELETE ERROR';
}


$sql = 'DELETE FROM  order_detail WHERE OrderID = "'.$_POST['del_id'].'"';
$check = mysqli_query($con,$sql);
if(!$check){
	echo 'DELETE ERROR';
}else{

	include("order_all.php");
}


?>
