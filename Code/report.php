<html>
<head><title>REPORT</title></head>
<body>
<?php
	include("admin_session.php");
?>
<table border="0" cellpadding="1" cellspacing="1" align="center">
<tr>
<td>
	<form method="get" action="report_order.php">
	<input type="submit" name="order" value="order">
	</form>
</td>
<td>
	<form method="get" action="report_ship.php">
	<input type="submit" name="shipdetail" value="ship detail">
	</form>
</td>
</tr>
</table>
</body>
</html>