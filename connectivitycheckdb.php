<?php
function conntivitycheck()
{
$username = "root";
$password = "root";
$hostname = "localhost";  
$database = "sample_db";

$dbhandle = mysqli_connect($hostname, $username, $password,$database) 
 or die("Unable to connect to MySQL");
 echo "Connected to MySQL<br> <br>";
mysqli_close($dbhandle);
}
conntivitycheck();


?>
