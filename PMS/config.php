<?php

$dbhost="localhost"; //replace with your hostname

$dbuser="root"; //replace with your admin username

$dbpass=""; //password of your admin

$dbname="medbay";

$con=mysqli_connect($dbhost,$dbuser,$dbpass);

if($con){

$db=mysqli_select_db($con,$dbname);
echo"Connected Successfully";

if(!$db){

echo "Could not connect to database".mysqli_error($con);

}

}

else{

echo "could not connect to server";

}

?>