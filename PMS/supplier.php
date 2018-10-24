<html>
<head>
    <?php
    echo"<link rel='stylesheet' type='text/css' href='supplier.css' />";
   ?>
</head>
<body>
    <form action="" >
    <div>
        <br>
        <br>
    <table align="center" cellpadding = "10" border="0" bgcolor="pink">
        <tr><th align="center" colspan="3">Add Medicine Supplier</th></tr>
     <tr><td>
        <table>
            <tr></tr>
            <tr></tr>
            <tr></tr>
            <tr></tr>
            
        <tr><td>
            <label for="name"><b>Supplier Name</b></label></td>
            <td><input type="text"  name="brand" required></td>
        </tr>
        
        <tr></tr>
        <tr>
        <td><label for="Email"><b>Email</b></label></td>
        <td><input type="text" name="Email" required></td>
        </tr>
        <tr></tr>
        <tr>
        <td><label for="proof"><b>Certification</b></label></td>
        <td><input type="file" name="image" required></td>
<!-------- <td><input type="Submit" value="Upload"/></td>------------>
        </tr>
        </table>
    </td>
    <td>
        <table>
            
            <tr><td>
            <label for="Supplier ID"><b>Supplier ID</b></label></td>
            <td><input type="text"  name="supplierID" required disabled="1"></td>
        </tr>
        <tr></tr>
        <tr>
        <td><label for="Phone"><b>Phone</b></label></td>
        <td><input type="text" name="phone" required></td>
        </tr>
        <tr></tr>
        
        
    </tr></table>
        </tr><tr colspan="3" align="center"><td> <input type="Submit" value="Submit"> </td></tr></table></td></tr>
    </div></form></body></html>