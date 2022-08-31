<?php

    for($i=1; $i<=15; $i++){
        echo $i ." ";
    }
echo "<br><br>";
    for($j=1; $j<=5; $j++){
        for($k=1; $k<=5; $k++){
            echo $j ," ";
        }
        echo "<br>";
    }
echo "<br><br>";

for($j=1; $j<=5; $j++){
    for($k=1; $k<=5; $k++){
        echo $k ," ";
    }
    echo "<br>";
}
echo "<br><br>";

for($j=5; $j>=1; $j--){
    for($k=5; $k>=1; $k--){
        echo $j ," ";
    }
    echo "<br>";
}
echo "<br><br>";
?>

<?php
    for($i=1; $i<=5; $i++){
        for($j=1; $j<$i; $j++){
            echo "*";
        }
        echo "$i </br>";
    }
?>