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

 
     

		$result = mysqli_query($dbhandle,"SELECT * FROM products");

		while ($row = mysqli_fetch_array($result)) {
	// image
		$source=$row{'image_src'};
 ?>
 
		<div class="row">
			<div class="col-sm-5 col-md-3">
  
			</div>
	     </div>
  
  <!--
  
  count=0;
  for(int i=0; i<3; i++)
  {
  image code;
  count++;
  }
  
  if( count<3)
  {
 print  image;
  }
  
  else
  {
  print image( side)
  }
  
  -->
<?php
	// code for priniting image and description
		echo "<img src=/$source width='200' height='120' img border='2'  ><br>"; 
		echo "Name:".$row{'description'}."<br>"; 
		echo "price:".$row{'price'}."<br>";
?>
	    <!--
		code for button-->
		<p><a href="" class="btn btn-primary" role="button">
		<span class="glyphicon glyphicon-home"></span> Add to cart</a> |
		<a href="" class="btn btn-default" role="button">View</a></p>

<?php 
  
}
mysqli_close($dbhandle);// closing the connection
}
conntivitycheck();// calling function 
?>

