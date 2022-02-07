<?php
 $con = mysqli_connect("localhost","root","","store");
// $sql = 'DELETE FROM  order_detail WHERE ProductID = "'.$_POST['del_id'].'"';

 name2id($_POST['del_name']);

 $sql = 'DELETE FROM  order_detail WHERE OrderID = "'.$_POST['del_id'].'" AND ProductID = "'.$ProductID.'"';
$check = mysqli_query($con,$sql);
if(!$check){
	echo 'DELETE ERROR';
}else{

	include("order_all.php");
}


function name2id($name){
		 global	$ProductID;
		 $con = mysqli_connect("localhost","root","","Store");
		 $sql = 'SELECT ProductID FROM product WHERE Name = "'.$name.'" ';
		 $check = mysqli_query($con,$sql);
		 $fields = mysqli_num_fields($check);
		while($row=mysqli_fetch_array($check)){
			for($i=0;$i<$fields;$i++){

					$row[0];
		   }
			$ProductID=$row[0];
		}
	 }


?>
