<?php
	$con = mysqli_connect("localhost","root","","store");
	$sql = 'SELECT ProductID,Quantity FROM order_detail WHERE OrderID ="'.$_POST['or_id'].'" ORDER BY ProductID';
	$check = mysqli_query($con,$sql);
	$fields = mysqli_num_fields($check);
	$row1 = mysqli_num_rows($check);
	while($row=mysqli_fetch_array($check)){
		for($i=0;$i<$fields;$i++){

					$row[0];
					$row[1];
				}
			$product_ID = $row[0];
			$quantity_add=$row[1];

			eiei($product_ID,$quantity_add);

	}

	name2id($_POST['ship_name']);
	$sql = 'INSERT INTO shipper_detail VALUES("'.$_POST['or_id'].'","'.$ship_id.'","'.$_POST['or_date'].'","SENT") ';
	$check = mysqli_query($con,$sql);
	 if(!$check){
		 echo "can't confirm ERROR UPDATE SHIPPERDETAIL";
	 }

	$sql = 'UPDATE orders SET  Status = "CONFIRM" WHERE OrderID="'.$_POST['or_id'].'"';
	$check = mysqli_query($con,$sql);
	 if(!$check){
		 echo "can't confirm ERROR UPDATE  STATUS ORDERS";
	 }

	 include("order_all.php");
	  function name2id($name){
		 global	$ship_id;
		 $con = mysqli_connect("localhost","root","","Store");
		 $sql = 'SELECT ShipID FROM shipper WHERE CompanyName = "'.$name.'" ';
		 $check = mysqli_query($con,$sql);
		 $fields = mysqli_num_fields($check);
		while($row=mysqli_fetch_array($check)){
			for($i=0;$i<$fields;$i++){

					$row[0];
		   }
			$ship_id=$row[0];
		}
	 }



	function eiei($pid,$quantity_add){
	$con = mysqli_connect("localhost","root","","Store");
	$sql = 'SELECT Quantity FROM product  WHERE ProductID ="'.$pid.'" ORDER BY ProductID';
	$check = mysqli_query($con,$sql);
	$fields = mysqli_num_fields($check);
	while($row=mysqli_fetch_array($check)){
		for($i=0;$i<$fields;$i++){

					$row[0];
				}
				$quantity_old=$row[0];
		}
	 global $quantity_new;
	 $quantity_new = $quantity_old - $quantity_add;

	 $sql = 'UPDATE product SET Quantity = "'.$quantity_new.'" WHERE ProductID="'.$pid.'"';
	 $check = mysqli_query($con,$sql);

	 if(!$check){
		 echo "can't confirm ERROR UPDATE Quantity";
	 }

    }

?>
