
<html>
<head><title>SHIPPER ADD</title></head>
<body>
<?php
include("admin_session.php");

?>
<table align="center" border="0">
<form method="post" action="shipper_insert_last.php">
</tr>
<td width="20">Company&nbspName</td>
<td> <input name="name" type="text" size="25" value="" > </td>
</tr>
<tr>
<td >Phone&nbspNumber</td>
<td> <input name="pnb" type="text" size="25" value="" > </td>
</tr>
<tr ><td ></td><td><input type="submit" name="Submit" value="ADD" ></td></tr>
</form>
</table>
</body>
</html>
