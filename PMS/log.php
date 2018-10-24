<html>

<head>
 <?php
   //include CSS Style Sheet
   echo"<link rel='stylesheet' type='text/css' href='log.css' />";
   ?>
  
</head>

<body>

<h2>Sign In</h2>

<form>
<table align="center" cellpadding = "10" border="0"></table>
 <div class="container">
  <tr><td>
    <label for="uname"><b>Username</b></label>
    <input type="text" placeholder="Enter Username" name="uname" required></td></tr>
    <br>
    <br>

    <tr><td>
    <label for="psw"><b>Password</b></label>
    
    <input type="password" placeholder="Enter Password" name="psw" required></td></tr>
    <br><br>
        
    <button type="submit">Login</button>&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
    
    <label>
      <input type="checkbox" checked="checked" name="remember"> Remember me
    </label>
  </div>

  <div class="container" style="background-color:#f1f1f1">
    
    <span class="psw">Forgot <a href="#">password?</a></span>
    <br><br>
    <span class="psw">Do not have an account?  <a href="reg.php">Sign Up</a></span>
  </div>
</form>
</body>
</html>