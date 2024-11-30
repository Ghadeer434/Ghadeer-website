<?php
$dbLocalhost=mysqli_connect("localhost","root","ghadeer@123")or 
die("Could nmysqli_select_dbot connect: " . mysqli_connect_error());

mysqli_select_db($dbLocalhost,"CSCI426_Projectt")or die("Could not find database: " . mysqli_connect_error());
echo "<h1> Connected to Database</h1>";  

?>