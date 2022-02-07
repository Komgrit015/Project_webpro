<?php

$con = mysqli_connect("localhost","root","","store");

	$sql = 'UPDATE employee
	          SET Name= "'.$_POST['name'].'" , Address= "'.$_POST['addr'].'",PhoneNO= "'.$_POST['pnb'].'",Salary= "'.$_POST['slr'].'"  WHERE EmployeeID = "'.$_POST['id'].'" ';
$check = mysqli_query($con,$sql);
if(!$check){
	echo 'DELETE ERROR';
}else{

	include("employee_all.php");
}



?>
