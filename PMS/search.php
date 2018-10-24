<html>
<head>
  <title>Registration system PHP and MySQL</title>
   <?php
   //include CSS Style Sheet
   echo "<link rel='stylesheet' type='text/css' href='booking.css' />";
   ?>
</head>
<body>

  <div class="container" >
   <div id="main"> 

<form action="" method="post" >
<table align="center" cellpadding = "10">
	<tr><td>
<input type="text" name="valueToSearch" placeholder="Search Medicine.."></td>
<td>
<input type="submit" name="search" value="Search .."></td>
</tr></table>
 <div id="sidebar"> 


include 'db-connect.php';

mysql_select_db("tutorohx_rw", $conncection);

$valueToSearch = $_POST['valueToSearch'];

$sql = "SELECT * FROM user WHERE f_name=$valueToSearch ";
$result = mysql_query($sql, $connection);

?>

<?php

if ($result)
 {
  while($row = mysql_fetch_array($result))
 {

?>
 	<table>
<tr><th>ID</th><th>First Name</th><th>Last Name</th></tr>
<tr>
<td><?php echo $row["f_name"]; ?></td>
<td><?php echo $row["l_name"]; ?></td>
</tr>


 
 
<?php
 }
} 
?>
</table>
 	</div>
</form>
</div></div>
</body></html>