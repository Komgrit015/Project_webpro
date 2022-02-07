<?php
 $con = mysqli_connect("localhost","root","","store");
 $sql = 'DELETE FROM  shipper WHERE ShipID = "'.$_POST['del_id'].'"';
$check = mysqli_query($con,$sql);
if(!$check){
	echo 'DELETE ERROR';
}else{

	include("shipper_all.php");
}


?>
