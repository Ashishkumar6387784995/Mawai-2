<?php  
    echo "<h1 style='text-align: center; color: green'>Nestedif Condition</h1>";
    $age = 13; 
    $nationality = "Indian";  
    if ($nationality == "Indian")  
    {  
        if ($age >= 18) {
            echo "Eligible to give vote";  
        }  
        else {    
            echo "Not eligible to give vote";  
        }  
    }
?>