
<html>
<head><title>SHIPPER UPDATE</title></head>
<body>
<?php

include("admin_session.php");
?>
<table align="center" border="0">
<form method="post" action="shipper_update_last.php">
</tr>
<td width="20">Company&nbspName</td>
<td>
<?php
 echo '<input type = "hidden" name = "id" value = "'.$_POST['up_id'].'">';
  echo '<input  name="name" type="text" size="25" value="'.$_POST['up_name'].'" >';
  ?>
  </td>
</tr>
<tr>
<td >Phone&nbspNumber</td>
<td> 
<?php
  echo '<input  name="pnb" type="text" size="25" value="'.$_POST['up_pnb'].'" >';
  ?>
</td>
</tr>
<tr ><td ></td><td><input type="submit" name="Submit" value="UPDATE" ></td></tr>
</form>
</table>
</body>
</html>
