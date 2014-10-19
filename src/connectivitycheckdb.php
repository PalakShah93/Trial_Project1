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
echo "<table>";
$i=0;
 while($rows = mysqli_fetch_array($result))
 {
						$lengths=count($rows);
						
						$counter=0;
						echo "$lengths";
						//for($i=0;$i<$lengths;$i++)
						
							if($i%4==0)
							{
								echo "<tr>";
								$counter=1;
							}
							$source=$rows{'image_src'};
							echo "<td><img src=/$source width='200' height='120' img border='1'><br>"; 
							echo "Name:".$rows{'description'}."<br>"; 
							echo "price:".$rows{'price'}."<br></td>";

	
						if($counter<4)
						{
							$counter++;
						}
						else
						{
						echo "</tr>";
						}
						
				
    
  $i++;
}
echo " </table>"; 
mysqli_close($dbhandle);
}
conntivitycheck();


?>

