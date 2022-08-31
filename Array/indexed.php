<?php  
$size=array("Big","Medium","Short");  
echo "Size: $size[0], $size[1] and $size[2]";
echo "</br>"; 
echo "</br>"; 

echo "Size: ";
foreach($size as $Value){
  echo "$Value, ";
}
echo "</br>";
echo "</br>";
?> 

<?php  
// $size1[0]="Big";  
$size1[1]="Medium";  
$size1[2]="Short";  
echo "Size1: $size1[1] and $size1[2]";  
echo "</br>";
echo "</br>";
?>

<?php  
$size2=array("Big","Medium","Short");  
foreach( $size2 as $s )  
{  
  echo "Size2 is: $s<br />";  
}  
echo "</br>";
echo "</br>";
?> 

<?php  
$size3=array("Big","Medium","Short");  
echo count($size3);  
?>  