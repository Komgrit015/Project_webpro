<html>
<head><title>EMPLOYEE UPDATE</title></head>
<body>
<?php
include("admin_session.php");

?>
<table align="center" border="0">
<form method="post" action="employee_update_last.php">
</tr>
<td width="20">Name</td>
<td>
<?php
 echo '<input type = "hidden" name = "id" value = "'.$_POST['up_id'].'">';
  echo '<input  name="name" type="text" size="25" value="'.$_POST['up_name'].'" >';
  ?>
  </td>
</tr>
<tr>
<td >Sex  </td>
<td> 
<?php
  echo '<input  type="text" size="25" value="'.$_POST['up_sex'].'" disabled >';
  ?>
</td>
</tr>
<tr>
<td >Address</td>
<td> 
<?php
  echo '<input  name="addr" type="text" size="25" value="'.$_POST['up_addr'].'"  >';
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
<tr>
<td >Birth&nbspDate</td>
<td>

			
<?php
  echo '<input  type="text" size="25" value="'.$_POST['up_bd'].'" disabled >';
  ?>


</td>
</tr>
<tr>
<td >Salary</td>
<td> 
<?php
  echo '<input  name="slr" type="text" size="25" value="'.$_POST['up_slr'].'"  >';
  ?>
</td>
</tr>
<tr ><td ></td><td><input type="submit" name="Submit" value="UPDATE" ></td></tr>
</form>
</table>
</body>
</html>
