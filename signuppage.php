<?php
$username = "root";
$password = "root";
$hostname = "localhost";  
$database = "sample_db";

$dbhandle = mysqli_connect($hostname, $username, $password,$database) 
 or die("Unable to connect to MySQL");
 echo "Connected to MySQL<br> <br>";
//mysqli_close($dbhandle);




$user =$_POST['n'];
$pass =$_POST['p'];
$email=$_POST['e'];
//echo "$user";
$sql="INSERT INTO users VALUES ('$user','$pass','$email')";

$res=mysqli_query($dbhandle,$sql);

mysqli_close($dbhandle);
				
?>