<html>
<head>
  <title>Registration system PHP and MySQL</title>
   <?php
   //include CSS Style Sheet
   echo "<link rel='stylesheet' type='text/css' href='reg.css' />";
   ?>
</head>
<body>
  
   <form>
	<table align="center" cellpadding = "10" border="0" bgcolor="pink">
  <tr><th></th><th><div class="header">
    <h2><center><pre>              Sign Up</pre></center></h2>
    </div>
  </th>
</tr>
<div class="input-group">
 <tr>
     <td>
       <label> Reg ID</label></td>
      <td><input type="text"  name="reg id" maxlength="30" disabled="1" /></td>
    </tr>
    </div>

  	
  	<div class="input-group">
      <tr>
        <td>
  	   <label> Full NAME</label></td>
  	  <td><input type="text" placeholder="Enter full name" name="First name" maxlength="30"/></td>
    </tr>
  	</div>
    <br>
    
    <div class="input-group">
      <tr><td>
      <label>Age</label></td>
      <td><input type="number" placeholder="Enter age" name="Age" maxlength="30"/></div></td>
      <td>
       <div class="input-group">
      <label>Gender</label></td>
      <td><input type="radio" name="rd1" value="Male" width="20%">Male
        <input type="radio" name="rd2" value="Male" width="20%">Female </div></td>
    
    </tr>

    <tr><td class="top left"><div class="input-group">
  	  <label>House NAME</label></td>
  	  <td class="top"><input type="text" name="house name" maxlength="30"/></div></td>

      <td class="top"> <div class="input-group">
      <label>Place</label></td>
      <td  class="top right"><input type="text" name="place" maxlength="30"/></td>
      </tr>
      </div>

    <tr><td>
     <div class="input-group">
      
      <label>PIN</label></td>
      <td><input type="text" name="PIN" maxlength="30"/></div></td>

      <td><div class="input-group">
       <label>District</label></td>
      <td><select id="cmdDist" name="Dist">
        <option value="0"> ---SELECT DISTRICT---</option>
        <OPTION value="1">Trivandrum</OPTION>
        <option value="2">Kollam</option>
        <option value="3">Pathanamthitta</option>
        </select> </div></td>      
      </tr>

    <tr><td class="bottom left">
    <div class="input-group">
   <label>Phone</label></td>
      <td class="bottom"><input type="text" name="phone" maxlength="10"/></div></td>

      <td class="bottom"><div class="input-group">
      <label>Email</label></td>
      <td  class="bottom right"><input type="text" name="email" maxlength="20"/></div></td>
    </tr>
  </div>
  

  	<div class="input-group">
      <tr>
       <td> 
  	  <label>Password</label></td>
  	  <td><input type="password" placeholder="Enter Password" name="password_1"></td>
  	</div>
    <td>
  	<div class="input-group">
  <label>Confirm password</label></td>
  	  <td><input type="password" placeholder=" ReEnter Password" name="password_2"></td>
    </tr>
  	</div>
    <div class="input-group">
    <tr><td>
       <label> Enter your Security Question</label></td>
      <td><select id="cmdDist" name="Dist">
        <option value="0"> ---SELECT QUESTION---</option>
        <OPTION value="1">What is your pet name?</OPTION>
        <option value="2">Date of Birth?</option>
        <option value="3">Your first teacher?</option>
        </select> </div>
    <td>
    <div class="input-group">
  <label>Answer</label></td>
      <td><input type="text" placeholder=" Enter your answer" name="answer"></td>
    </tr>
    </div>
    <tr></tr>
  	<div class="input-group">
      <tr>
        <td></td>
  	  <td>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp<button type="submit" class="btn" name="reg_user">Register</button></td>
      <td><button type="submit" class="btn" name="cancel">Cancel</button></td>
    </tr>
  	</div>
    <br>
  	<p>
      <tr><td></td><td>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
  		Already a member? <a href="log.php">Sign in</a>
    </td>
  	</p>
    
  </form>
</body>
</html>