<html>
<head>
 <?php
   //include CSS Style Sheet
   echo "<link rel='stylesheet' type='text/css' href='dashboardadmin.css' />";
   ?>
</head>

<body>
 <form>
	<table frame="box" align="center" bgcolor="pink">
		<tr><th></th> 
		<th align="center"> WELCOME USER </th></tr>
		<tr></tr>
		
		<tr>
			<td>
				<div id="dash" name="dashboard" style="border: solid">
				<a href=""><img src="images/med.jpg" title="Expiry" width="200" height="100"></a>
				</div>	
			</td>
			
			<td>
				<div id="dash" name="dashboard" style="border: solid">
				<a href=""><img src="images/stock.jpg" title="stock" width="200" height="100"></a>
				</div>
			</td>
		
			<td>
				<div id="dash" name="dashboard" style="border: solid">
				<a href=""><img src="images/outofstock.jpg" title="outofstock" width="200" height="100"></a>
				</div>
			</td>
		</tr>
		<tr>
			<td align="center">
			<div class="container" style="background-color:#ffc0cb">
    		<span class="img">View <a href="reg.php">Expired Medicines</a></span>
    		</div>
			</td>
			
			<td align="center">
			<div class="container" style="background-color:#ffc0cb">
    		<span class="img">View <a href="reg.php">Current Stock</a></span>
    		</div>
			</td>
			
			<td align="center">
			<div class="container" style="background-color:#ffc0cb">
    		<span class="img">View <a href="reg.php">Out of Stock</a></span>
    		</div>
			</td>
		</tr>
		
		<tr>
			<td>
				<div id="dash" name="dashboard" style="border: solid">
				<a href=""><img src="images/book.jpg" title="booking" width="200" height="100"></a>
				</div>	
			</td>
			<td>
				<div id="dash" name="dashboard" style="border: solid">
				<a href=""><img src="images/attndence.jpg" title="attendence" width="200" height="100"></a>
				</div>	
			</td>
		</tr>
		<tr>
			<td align="center">
			<div class="container" style="background-color:#ffc0cb">
    		<span class="img">View <a href="reg.php">Bookings</a></span>
    		</div>
			</td>
			
			<td align="center">
			<div class="container" style="background-color:#ffc0cb">
    		<span class="img">Manage <a href="reg.php">Attendence</a></span>
    		</div>
			</td>

	</table>
	</form>
</body>
