<HTML>

<BODY>
<H2>Hello! Testing the woring of PHP - MYSQL Connect.</H2>

<?php 
$username = "root";
$password = "root";
$hostname = "localhost"; 
$database = "sample_db";

//connection to the database
$dbhandle = mysqli_connect($hostname, $username, $password,$database) 
 or die("Unable to connect to MySQL");
echo "Connected to MySQL<br> <br>";
// bit bucket git concept

//select a database to work with
//$selected = mysql_select_db("sample_db",$dbhandle) 
  //or die("Could not select examples");

//execute the SQL query and return records
//$result = mysqli_query($dbhandle,"SELECT * FROM users");
echo "Starting to display result from the select query <br> <br>";

$result = mysqli_query($dbhandle,"INSERT INTO users VALUES ('smit', '1004', '@rt.com')");


//fetch tha data from the database 
while ($row = mysqli_fetch_array($result)) {
   echo "Name:".$row{'user'}."| password:".$row{'pass'}."| Email:".$row{'email'}."<br>";
}
//close the connection
mysqli_close($dbhandle);
?>

</BODY>
	

</HTML>	