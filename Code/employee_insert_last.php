<?php

$con = mysqli_connect("localhost","root","","store");
$sql = 'INSERT INTO employee VALUES ("","'.$_POST['name'].'","'.$_POST['sex'].'","'.$_POST['addr'].'"
,"'.$_POST['pnb'].'","'.$_POST['day'].'-'.$_POST['month'].'-'.$_POST['year'].'"
,"'.$_POST['slr'].'","'.$_POST['usr'].'","'.$_POST['pwd'].'","Admin")';

$check = mysqli_query($con,$sql);
if(!$check){
	echo "ERROR EXECUTE SQL";
}else{
	include("employee_all.php");
}



?>
