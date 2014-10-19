<?php
//function connectivitycheck()

$username = "root";
$password = "root";
$hostname = "localhost";  
$database = "sample_db";

$dbhandle = mysqli_connect($hostname,$username,$password,$database) 
or die("Unable to connect to MySQL");
echo "Connected to MySQL<br> <br>";

$result=mysqli_query($dbhandle," SELECT * FROM users");

$user =$_POST['n'];
$pass =$_POST['p'];
$email=$_POST['e'];

//mysql_select_db("root", $dbhandle);
echo"Name:$user </br>"; 
echo "Password:$pass </br>";
echo "Email:$email </br>";
//$sql="INSERT INTO users (user, pass, email)
//VALUES ('$_POST[user]',' $_POST[pass]','$_POST[email]')";


mysqli_close($dbhandle);

?>
//$result = mysqli_query($dbhandle,"INSERT INTO users VALUES ('$user', '$pass', '$email')");

//while ($row = mysqli_fetch_array($result)) {
echo "Name:".$row{'user'}."<br>"; 
echo "Password:".$row{'pass'}."<br>";
}


			