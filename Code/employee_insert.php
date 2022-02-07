<html>
<head><title>EMPLOYEE ADD</title></head>
<body>
<?php
include("admin_session.php");


?>
<table align="center" border="0">
<form method="post" action="employee_insert_last.php">
</tr>
<td width="20">Name</td>
<td> <input name="name" type="text" size="25" value="" > </td></tr><tr>
<td >Sex       </td>
<td> <select name="sex">
<option value="MALE">MALE</option>
<option value="FEMALE">FEMALE</option>
</select>
</td>
</tr>
<tr>
<td >Address</td>
<td> <input name="addr" type="text" size="25" value="" > </td>
</tr>
<tr>
<td >Phone&nbspNumber</td>
<td> <input name="pnb" type="text" size="25" value="" > </td>
</tr>
<tr>
<td >Birth&nbspDate</td>
<td>
<?php
			
             echo '<select name ="day">';
		    for($i=1;$i<=31;$i++){
			
			echo '<option value ='.$i.'>';       
			echo ''.$i.'</option>';
			
		    }
		    echo '</select>';
			echo ' - ';
			echo '<select name ="month">';
		    for($i=1;$i<=12;$i++){
			
			echo '<option value ='.$i.'>';       
			echo ''.$i.'</option>';
			
		    }
		    echo '</select>';
			echo ' - ';
			echo '<select name ="year">';
		    for($i=1990;$i<=2016;$i++){
			
			echo '<option value ='.$i.'>';       
			echo ''.$i.'</option>';
			
		    }
		    echo '</select>';			
?>
</td>
</tr>
<tr>
<td >Salary</td>
<td> <input name="slr" type="text" size="25" value="" > </td>
</tr>
<tr>
<td >User</td>
<td> <input name="usr" type="text" size="25" value="" > </td>
</tr><tr>
<td >Password</td>
<td> <input name="pwd" type="text" size="25" value="" > </td></tr>
<tr ><td ></td><td><input type="submit" name="Submit" value="ADD" ></td></tr>
</form>
</table>
</body>
</html>
