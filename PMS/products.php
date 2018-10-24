<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" 
"http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd"> 
  
<html xmlns="http://www.w3.org/1999/xhtml"> 
<head> 
       <?php
   //include CSS Style Sheet
   echo "<link rel='stylesheet' type='text/css' href='booking.css' />";
   echo "<link rel='stylesheet' type='text/css' href='reset.css' />";
   ?>
</head>
<body>
    <div id="container"> 
  
        <div id="main"> 
            
<?php 
  
    if(isset($_GET['action']) && $_GET['action']=="add"){ 
          
        $id=intval($_GET['id']); 
          
        if(isset($_SESSION['cart'][$id])){ 
              
            $_SESSION['cart'][$id]['quantity']++; 
              
        }else{ 
              
            $sql_s="SELECT * FROM products 
                WHERE id_product={$id}"; 
            $query_s=mysql_query($sql_s); 
            if(mysql_num_rows($query_s)!=0){ 
                $row_s=mysql_fetch_array($query_s); 
                  
                $_SESSION['cart'][$row_s['id_product']]=array( 
                        "quantity" => 1, 
                        "price" => $row_s['price'] 
                    ); 
                  
                  
            }else{ 
                  
                $message="This product id it's invalid!"; 
                  
            } 
              
        } 
          
    } 
  
?> 
    <h1>Product List</h1> 
    <?php 
        if(isset($message)){ 
            echo "<h2>$message</h2>"; 
        } 
    ?> 
    <table> 
        <tr> 
            <th>Name</th> 
            <th>Description</th> 
            <th>Price</th> 
            <th>Action</th> 
        </tr> 
          
        <?php 
          
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
          
        ?> 
          
    </table>
</div></div>
</body> 
</html>