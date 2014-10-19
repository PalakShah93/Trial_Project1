<?php
function call()
{
 $result = mysqli_query($dbhandle,"SELECT * FROM products");


//fetch tha data from the database 
while ($row = mysqli_fetch_array($result)) {
   //echo "Name:".$row{'description'}."| price:".$row{'price'}."| img_loc:".$row{'image_src'}."<br>";
   //echo "<img src=\"$row{'image_src'}\" style=\"width:304px;height:228px\" >";

 $source=$row{'image_src'};
 // echo "$source";
  echo "<img src=/$source width='200' height='120' img border='2'  ><br>"; 
   echo "Name:".$row{'description'}."<br>"; 
	echo "price:".$row{'price'}."<br>";
	
  
    
  

}
}
?>