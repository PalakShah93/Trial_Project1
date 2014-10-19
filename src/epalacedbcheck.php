<?php
//function connectivitycheck()

$username = "root";
$password = "root";
$hostname = "localhost";  
$database = "electronicpalace_db";

$dbhandle = mysqli_connect($hostname,$username,$password,$database) 
or die("Unable to connect to MySQL");
echo "Connected to MySQL<br> <br>";

//$result = mysqli_query($dbhandle,"SELECT * FROM productss");


//$result = mysqli_query($dbhandle,"INSERT INTO productss (product_id, description,price) VALUES('1','palakji','3444')");
//mysqli_execute($result)
$query = "INSERT INTO productss (product_id, description,price) VALUES('1','palakji','3444')";
$result = mysqli_query($dbhandle,$query);

//while ($row = mysqli_execute($result)) {
//echo "Name:".$row{'product_id'}."| password:".$row{'description'}."| Email:".$row{'price'}."<br>";
//}

//while ($row = mysqli_fetch_array($result)) {
 //echo "Name:".$row{'product_id'}."| password:".$row{'description'}."| Email:".$row{'price'}."<br>";
 //}
 
mysqli_close($dbhandle);

?>