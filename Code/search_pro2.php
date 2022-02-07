<html>
<head><title>SEARCH</title></head>
<body>
<?php
	include("admin_session.php");
?>

<?php
    $connect = mysqli_connect("localhost", "root","", "Store");
    $sql ='select * from orders where  CustomerID ="'.$_POST['cus'].'"';
    $result = mysqli_query($connect, $sql);
    $numrows = mysqli_num_rows($result);
	  $numfields = mysqli_num_fields($result);


    echo '<table border="1" cellspacing="1" cellpadding="2" align="center" >';
    echo '<tr bgcolor="ccff33">';
    echo '<td >';
    echo "OrderID";
    echo '</td>';
    echo '<td>';
    echo "Customer NAME";
    echo '</td>';
    echo '<td >';
    echo "Employee NAME";
    echo '</td>';
    echo '<td>';
    echo "Shipper";
    echo '</td>';
    echo '<td>';
    echo "ShipAddress";
    echo '</td>';
    echo '<td>';
    echo "OrderDate";
    echo '</td>';
    echo '<td>';
    echo "Status";
    echo '</td>';
    echo '</tr>';


	$total = 0;
  while ($row = mysqli_fetch_array($result)) {
		echo '<tr>';

		  	for ($i=0; $i<$numfields; $i++) {
		  	            echo '<td>';
           				echo $row[$i];
						echo '</td>';
			}

		echo '</tr>';
	}
echo '</table>';

   mysqli_close($connect);

?>
</body>
</html>
