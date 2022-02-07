<?php
 $con = mysqli_connect("localhost","root","","store");
 $sql = 'DELETE FROM  product WHERE ProductID = "'.$_POST['del_id'].'"';
$check = mysqli_query($con,$sql);
if(!$check){
	echo 'DELETE ERROR';
}else{

	include("product_all.php");
}


?>
