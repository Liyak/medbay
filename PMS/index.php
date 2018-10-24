<?php

function OpenCon()
 {
 $dbhost="localhost";
 $dbuser="root";
 $dbpass="";
 $db="pms";
 
 
 $conn=new mysqli($dbhost,$dbuser,$dbpass,$db) or die("Connect failed: %s\n".$conn->error);
 return $conn;
 }
 
function CloseCon($conn)
 {
 $conn->close();
 }

/*include 'C:\xampp\htdocs\PMS\db_connection.php';*/
 
$conn=OpenCon();
 
echo"Connected Successfully";
 
/*CloseCon($conn);*/
 
?>