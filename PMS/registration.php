<html>
<head>
<title>faculty Registration Form</title>
<style type="text/css">
h3{font-family: Calibri; font-size: 22pt; font-style: normal; font-weight: bold; color:SlateBlue;
text-align: center; text-decoration: underline }
table{font-family: Calibri; color:white; font-size: 11pt; font-style: normal;
text-align:; background-color: SlateBlue; border-collapse: collapse; border: 2px solid navy}
table.inner{border: 0px}
</style>
</head>
 
<body>
<h3>FACULTY REGISTRATION FORM</h3>
<form action="form.php" method="POST">
 
<table align="center" cellpadding = "10">
 
<!----- First Name ---------------------------------------------------------->
<tr>
<td>FACULTY NAME</td>
<td><input type="text" name="First_Name" maxlength="30"/>

</td>
</tr>

<tr>
	<td>DEPARTMENT</td>
	<td>
	<select name="DEPARTMENT" id="department">
		<option value="-1">-Select-</option>
		<option value="mca">MCA</option>
		<option value="mca">Btech EC</option>
		<option value="mca">Btech Civil</option>
		<option value="mca">Btech CS</option>
	</select>	
	</td>>
</tr>
 
<!----- registration No ----------------------------------------------------------
<tr>
<td>REGISTER NO</td>
<td><input type="text" name="regno" maxlength="30"/>

</td>
</tr>


<!--------------------------------------------------------------------->
<tr>
	<td>DEPARTMENT</td>
	<td>
	<select name="DEPARTMENT" id="department">
		<option value="-1">-Select-</option>
		<option value="mca">MCA</option>
		<option value="mca">Btech EC</option>
		<option value="mca">Btech Civil</option>
		<option value="mca">Btech CS</option>
	</select>	
	</td>>
</tr>

<!----- SUBJECT------------------------------------------------------->
<tr>
<td>SUBJECT</td>
 
<td>
<select name="SUBJECT" id="subject">
<option value="-1">-sub-</option>
<option value="os">operating system</option>
<option value="df">digital fundamentals</option>
<option value="cn">computer networks</option>
 <option value="dbms">dbms</option>
 <option value="cc">cloud computing</option>
<option value="se">software engineering</option></select></td></tr>
</select>

 
<!----- SEM AND YEAR-------------------------------------------------------->
<tr>
<td>SEMESTER</td>
 
<td>
<select name="SEMESTER" id="semester">
<option value="-1">sem</option>
<option value="1">1</option>
<option value="2">2</option>
<option value="3">3</option>
 <option value="5">5</option>
<option value="6">6</option></select></td></tr>
</select>
 

<tr><td>YEAR</td>
<TD> 
<select name="Year" id="Year">
 <option value="-1">Year:</option>
<option value="2018">2018</option>
<option value="2017">2017</option>
<option value="2016">2016</option>
<option value="2015">2015</option>
<option value="2014">2014</option>
<option value="2013">2013</option>
<option value="2012">2012</option>
<option value="2011">2011</option>
<option value="2010">2010</option>
<option value="2009">2009</option>
<option value="2008">2008</option>
<option value="2007">2007</option>
<option value="2006">2006</option>
<option value="2005">2005</option>
<option value="2004">2004</option>
<option value="2003">2003</option>
<option value="2002">2002</option>
<option value="2001">2001</option>
<option value="2000">2000</option>
</select>
</td>
</tr>

 
<!----- Email Id ---------------------------------------------------------->
<tr>
<td>EMAIL ID</td>
<td><input type="text" name="Email_Id" maxlength="100" /></td>
</tr>
 
<!----- Mobile Number ---------------------------------------------------------->
<tr>
<td>MOBILE NUMBER</td>
<td>
<input type="text" name="Mobile_Number" maxlength="10" />
(10 digit number)
</td>
</tr>
<!----- Submit and Reset ------------------------------------------------->
<tr>
<td colspan="2" align="center">
<input type="submit" value="Submit">
<input type="reset" value="Reset">
</td>
</tr>
</table>
 
</form>
 
</body>