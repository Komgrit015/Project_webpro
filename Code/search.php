<html>
<head><title>SEARCH</title></head>
<body>
<?php
	include("admin_session.php");
?>

<table border="1" cellpadding="1" cellspacing="1" align="center">
  <br>
<tr>

<td>
  <form name = frminsert action="search_pro.php" method="post">
  Product :<select name="pro">
  <?php
      $connect = mysqli_connect("localhost", "root","", "Store");
  	  $sql ='select * from product';
      $result = mysqli_query($connect, $sql);

      if (!$result) {
  	     echo mysqli_error().'<br>';
  	      die('Can not access database!');
      } else {
          while ($row = mysqli_fetch_array($result)) {

  		          echo '<option value=';
             	  echo $row[0];
  							 echo '>';
  							 echo $row[1];
  							 echo '</option>';

  		}
     mysqli_close($connect);
  }
  ?>
  <br>
  </select>
  <br>
  <input type='submit' value= 'Search'>
  <br>
  </form>
</td>

<!-- ใส่คอมเมนต์ไว้ภายในนี้นะครับ=============================================================================== -->

<td>
  <form name = "search" action="search_pro2.php" method="post">
  Customer :<select name="cus">
  <?php
      $connect = mysqli_connect("localhost", "root","", "Store");
     $sql ='select * from customer';
      $result = mysqli_query($connect, $sql);

      if (!$result) {
        echo mysqli_error().'<br>';
         die('Can not access database!');
      } else {
          while ($row = mysqli_fetch_array($result)) {

               echo '<option value=';
                 echo $row[0];
                echo '>';
                echo $row[1];
                echo '</option>';

     }
     mysqli_close($connect);
  }
  ?>
  <br>
  </select>
  <br>
  <input type='submit' value= 'Search'>
  <br>
  </form>
</td>
</tr>

</table>


</body>
</html>
