<html>
<html>
<head><title>PRODUCT ADD</title></head>
<body>
<?php
include("admin_session.php");
?>
<table align="center" border="0">
<form method="post" action="product_insert_last.php">
<tr>
<td width="20">Name</td>
<td> <input name="name" type="text" size="25" value="" > </td>
</tr>
<tr>
<td width="20">Price</td>
<td> <input name="price" type="text" size="25" value="" > </td>
</tr>
<tr>
<td width="20">Quantity</td>
<td> <input name="qq" type="text" size="25" value="" > </td>
</tr>
<tr ><td ></td><td><input type="submit" name="Submit" value="ADD" ></td></tr>
</form>
</table>
</body>
</html>
