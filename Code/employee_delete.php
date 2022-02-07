<?php
 $con = mysqli_connect("localhost","root","","store");
 $sql = 'DELETE FROM  employee WHERE EmployeeID = "'.$_POST['del_id'].'"';
$check = mysqli_query($con,$sql);
if(!$check){
	echo 'DELETE ERROR';
}else{

	include("employee_all.php");
}


?>
