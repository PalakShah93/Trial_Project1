<?php
echo "<table>";
$counter=0;
for($i=0;$i<20;$i++)
{

if($i%4==0){
echo "<tr>";
$counter=1;
}
echo "<td>$i</td>";
if($counter<4){
$counter++;
}
else
{
echo "</tr>";
}
}
echo " </table>";            
	
	
?>