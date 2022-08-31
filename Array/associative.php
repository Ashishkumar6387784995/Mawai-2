<?php    
$salary=array("Ashish"=>"550000","Suman"=>"250000","Himanshu"=>"200000");  
echo "Ashish salary: ".$salary["Ashish"]."<br/>";  
echo "Suman salary: ".$salary["Suman"]."<br/>";  
echo "Himanshu salary: ".$salary["Himanshu"]."<br/>";  
echo "</br>"; 
echo "</br>";

foreach ($salary as $key => $value) {
    echo "$key Salary: $value </br>";

}

echo "<pre>";
print_r($salary); 
echo "</br>"; 
echo "</br>";
?>   
<?php    
$salary["Ashish"]="550000";  
$salary["Suman"]="250000";  
$salary["Himanshu"]="200000";   
echo "Ashish salary: ".$salary["Ashish"]."<br/>";  
echo "Suman salary: ".$salary["Suman"]."<br/>";  
echo "Himanshu salary: ".$salary["Himanshu"]."<br/>";   
echo "</br>"; 
echo "</br>";
?>    

<?php    
$salary=array("Ashish"=>"550000","Suman"=>"250000","Himanshu"=>"200000");  
foreach($salary as $k => $v) {  
echo "Key: ".$k." Value: ".$v."<br/>";  
}   
echo "</br>"; 
echo "</br>";
?> 