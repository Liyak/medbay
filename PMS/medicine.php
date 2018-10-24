<html>
<head>
  <title>Registration system PHP and MySQL</title>
   <?php
   //include CSS Style Sheet
   echo "<link rel='stylesheet' type='text/css' href='medicine.css'/>";
  
   ?>
</head>
<body>
  <div class="container">
   <form action="">
	<table align="center" cellpadding = "10" border="0"  bgcolor="#f2f2f2">
  <tr align="center" bgcolor="dodgerblue"><th></th><th></th><th>
    <h2>Add Stock</h2>
  
  </th><th></th>
</tr>
 
 	<!----------------
   <tr><td>
       <label> Medicine ID</label></td>
      <td><input type="text"  name="med id" maxlength="30" disabled="1" /></td>
    </tr>
    -------------------------------->
      <tr>
        <td>
  	   <label> Medicine Name</label></td>
  	  <td><input type="text"  name="med name" maxlength="30"/></td>
  	  
  	  <td><label> Medicine ID</label></td>
  	  <td><input type="text"  name="med name" maxlength="30" disabled="1" /></td>
     </tr>
    
      <tr><td>
      <label>Genere</label></td>
      <td><select id="cmdGenere" name="Genere">
        <option value="0">-------SELECT TYPE------</option>
        <OPTION value="1">Tablet</OPTION>
        <option value="2">Capsule</option>
        <option value="3">Syrup</option>
        <option value="4">Oinment</option>
        </select> </td>
        <td><label>Brand</label></td>

      <td><select id="cmdBrand" name="Brand">
        <option value="0"> ------SELECT Brand------</option>
        <OPTION value="1">T</OPTION>
        <option value="2">Cap</option>
        <option value="3">Sy</option>
        <option value="4">Oin</option>
        </select> </td>
    </tr>
      <tr><td>
  	  <label>Description</label></td>
  	  <td> <textarea id="desc" name="Description"  style="height:80px">
       </textarea></td>
       <td
      <label>Supplier</label></td>
       <td><select id="cmdSupplier" name="Supplier">
        <option value="0"> -----SELECT Supplier-----</option>
        <OPTION value="1">T</OPTION>
        <option value="2">Cap</option>
        <option value="3">Sy</option>
        <option value="4">Oin</option>
        </select> </td></tr>
        <tr><td>
      <label>Date of Arrival</label></td>
      <td ><input type="date" name="DateOfArrival" style="width: 175px"></td>
      <td>
      <label>Date Of Expiry</label></td>
      <td><input type="date" name="DateOfExpiry" style="width: 175px"></td>
     
   </tr>

     </tr>
     <tr>
       <td> <label>Cost Price</label></td>
       <td><input type="text" name="cp" maxlength="30"/></td>
      <td> <label>Selling Price </label></td>
       <td><input type="text" name="sp" maxlength="30"/></td>
   
     </tr>
     <tr><td>
    
      <label>Total Purchased</label></td>
      <td><input type="text" name="Total" maxlength="30"/></td>
      <td>
      <label>Total Left</label></td>
      <td><input type="text" name="Left" maxlength="30" disabled="1" /></td>
      </tr>
    
      <tr>
        <td><label>Threshold Limit</label></td>
         <td><input type="text" name="Total" maxlength="30"/></td>
          <td><label>Location</label></td>

      <td><select id="cmdGenere" name="Genere">
        <option value="0"> --RACK--</option>
        <OPTION value="1">R1</OPTION>
        <option value="2">R2</option>
        <option value="3">R3</option>
        <option value="4">R4</option>
      </select>
        <select id="cmdGenere" name="Genere">
        <option value="0"> --ROW--</option>
        <OPTION value="1">01</OPTION>
        <option value="2">02</option>
        <option value="3">03</option>
        <option value="4">04</option>
        </select>
        <select id="cmdGenere" name="Genere">
        <option value="0"> --COLUMN---</option>
        <OPTION value="1">01</OPTION>
        <option value="2">02</option>
        <option value="3">03</option>
        <option value="4">04</option>
        </select> </td>
        
      </tr>
    
     <tr align="center">
  <td></td>
  	  <td><button type="submit" class="btn" name="reg_user">SUBMIT</button></td>

      <td><button type="submit" class="btn" name="cancel">CANCEL  </button></td>
    </tr>
    <tr></tr>

  	</div>
    
    
  </form>
</body>
</html>
