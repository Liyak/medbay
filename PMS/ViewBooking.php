<html>
<head>
  <title>Registration system PHP and MySQL</title>
   <?php
   //include CSS Style Sheet
   echo "<link rel='stylesheet' type='text/css' href='ViewBooking.css' />";
   ?>
</head>
<body>
  <div id="container">
   <form action="">
   	<!--- <button type="submit" name="Add Row">Add Row</button> <br>---->
   	<table align="center">
   		<tr align="center"><td colspan="4"> Bookings</td></tr>
   		<tr>
   			<th>Booking ID</th> 
            <th>Customer ID</th>
            
            <th>View Booking</th> 
            <th>Approve/cancel</th> 
        </tr> 
        <tr>
   			<td>B ID</td> 
            <td>C ID</td>
            
            <td><button type="submit" name="View">View</button></td> 
            <td><button type="submit" name="Approve">Approve</button><button type="submit" name="Cancel">Cancel</button></td> 
        </tr> 
        <tr>
   			<td>B ID</td> 
            <td>C ID</td>
            
           <td><button type="submit" name="View">View</button></td> 
            <td><button type="submit" name="Approve">Approve</button><button type="submit" name="Cancel">Cancel</button></td> 
        </tr> 
      <!---------------  <?php 
          
            $sql="SELECT * FROM products ORDER BY name ASC"; 
            $query=mysql_query($sql); 
              
            while ($row=mysql_fetch_array($query)) { 
                  
        ?> 
            <tr> 
                <td><?php echo $row['name'] ?></td> 
                <td><?php echo $row['description'] ?></td> 
                <td><?php echo $row['price'] ?>$</td> 
                <td><a href="booking.php?page=products&action=add&id=<?php echo $row['id_product'] ?>">Add to cart</a></td> 
            </tr> 
        <?php 
                  
            } 
          
        ?> --------------->
   </form></div></body></html>