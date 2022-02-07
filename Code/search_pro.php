<html>
<head><title>SEARCH</title></head>
<body>
<?php
	include("admin_session.php");
?>

<?php
    $connect = mysqli_connect("localhost", "root","", "Store");
    $sql ='select * from order_detail where  ProductID ="'.$_POST['pro'].'"';
    $result = mysqli_query($connect, $sql);
    $numrows = mysqli_num_rows($result);
	  $numfields = mysqli_num_fields($result);


    echo '<table border="1" cellspacing="1" cellpadding="2" align="center" >';

    echo '<tr bgcolor="ccff33">';
    echo '<td >';
    echo "OrderID";
    echo '</td>';
    echo '<td>';
    echo "ProductID";
    echo '</td>';
    echo '<td >';
    echo "Unit Price";
    echo '</td>';
    echo '<td >';
    echo "Quantity";
    echo '</td>';
    echo '</tr>';


	$total = 0;
  while ($row = mysqli_fetch_array($result)) {
		echo '<tr>';

		  	for ($i=0; $i<$numfields; $i++) {
		  	            echo '<td>';
           				echo $row[$i];
						echo '</td>';
						if ($i==3){
							$total = $total + $row[3];
						}

			}

		echo '</tr>';
	}

echo '</table>';

echo '<table border="0" cellspacing="1" cellpadding="2" align="center" >';
echo '<tr>';
echo '<td>';
	echo 'Total sales =';
	echo $total;
echo '</td>';
echo '</tr>';
echo '</table>';

   mysqli_close($connect);

?>
</body>
</html>
