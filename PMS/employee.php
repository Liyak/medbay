<html>
<head>
	<title>

		</title>
	<?php

   //include CSS Style Sheet
   echo"<link rel='stylesheet' type='text/css' href='employee.css'/>";
   include "index.php"; 
   ?>
  /* <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Add Issue</title>
  <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
  <link rel="stylesheet" href="/resources/demos/style.css">
  <script src="https://code.jquery.com/jquery-1.12.4.js"></script>
  <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
  <script>

/*$(function () {
            $("#datepicker").datepicker({ dateFormat: "yy-mm-dd", changeMonth: true, changeYear: true });
        });
  </script>*/
   // Fetching variables of the form which travels in URL

</head>

<body>
<?php
if(isset($_POST['submit'])){
$name = $_POST['Name'];
$address=$_POST['address'];
$phone=$_POST['phone'];
$designation=$_POST['Designation'];
$DateOfJoin=$_POST['DateOfJoin'];
$email = $_POST['email'];
$password = $_POST['psw'];

if($name !=''||$email !=''){
//Insert Query of SQL
$query = mysqli_query($con,"insert into employee(Name,Address,Phone,Designation,DateOfJoin,Email,Password) values ('$name', '$address', '$phone', '$designation','$DateOfJoin','$email','$password')");

echo "<br/><br/><span>Data Inserted successfully...!!</span>";
}
else{
echo "<p>Insertion Failed <br/> Some Fields are Blank....!!</p>";
}
}

  ?>
<form action="employee.php"  method="post" style="max-width:500px;margin:auto">
  <div>
  <h2> Employee Registration Form</h2>
            <label for="fname">First Name</label><br>
            <div class="input-container">
              <i class="fa fa-user icon"></i>
              <input class="input-field" type="text" placeholder="Name" name="Name">
             </div>
            <label for="address">Address</label><br>
            <div class="input-container">
              <i class="fa fa-user icon"></i>
              <input class="input-field" <textarea name="address" maxlength="30" placeholder="address" rows="5" cols="40">
            </div>
            <label for="phone">Phone</label><br>
            <div class="input-container">
              <i class="fa fa-user icon"></i>
              <input class="input-field" type="text" placeholder="Phone" name="phone">
            </div>
            <label for="desig">Designation</label><br>
             <div class="input-container">
              <i class="fa fa-user icon"></i>
              <input class="input-field" type="text" placeholder="Designation" name="Designation">
            </div>
            <label for="desig">Date of Join</label><br>
            <div class="input-container">
              <i class="fa fa-user icon"></i>
               <input class="input-field" type="date" name="DateOfJoin">
             </div>
            <label for="desig">Email/Username</label><br>
            <div class="input-container">
              <i class="fa fa-envelope icon"></i>
              <input class="input-field" type="text" placeholder="Email/Username" name="email">
            </div>
            <label for="desig">Password</label><br>
            <div class="input-container">
              <i class="fa fa-key icon"></i>
              <input class="input-field" type="password" placeholder="Password" name="psw">
            </div>

  <button type="submit" class="btn">Register</button>
</div>
</form>
</body>
</html>