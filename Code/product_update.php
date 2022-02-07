<html>
<html>
<head><title>PRODUCT UPDATE</title></head>
<body>
<?php
include("admin_session.php");
?>
<table align="center" border="0">
<form method="post" action="product_update_last.php">
</tr>
<td width="20">ID</td>
<td>
<?php
echo '<input type = "text" value = "'.$_POST['p_id'].'" disabled>';
 echo '<input type = "hidden" name = "id" value = "'.$_POST['p_id'].'">';
  
  ?>
  </td>
</tr>
<tr>
</tr>
<td width="20">Name</td>
<td>
<?php

  echo '<input  name="name" type="text" size="25" value="'.$_POST['p_name'].'" >';
  ?>
  </td>
</tr>
<tr>
<td >Price  </td>
<td> 
<?php
  echo '<input  name="price" type="text" size="25" value="'.$_POST['p_price'].'"  >';
  ?>
</td>
</tr>
<tr>
<td >Quantity</td>
<td> 
<?php
  echo '<input  name="qq" type="text" size="25" value="'.$_POST['p_quan'].'"  >';
  ?>
</td>
<tr ><td ></td><td><input type="submit" name="Submit" value="UPDATE" ></td></tr>
</form>
</table>
</body>
</html>
