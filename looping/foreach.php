<?php
    $a= ['Ashish', 'Suman', 'Himanshu', 'Tusar', 'Ankita'];
    foreach ($a as $jey => $values) {
        echo "$jey $values </br>";
    }
    //////////////////////////////////////////
   echo "</br>";
    $a= ['Ashish', 'Suman', 'Himanshu', 'Tusar', 'Ankita'];
    foreach ($a as $jey => $values) {
        $jey++;
        echo "$jey $values </br>";
    }
    /////////////////////////////////////////
    echo "</br>";
    $a= ['Name'=>'Ashish', 'Email'=>'485kumaashish@gmail.com', 'Mobile'=>'8114278804', 'Qualification'=>'B.Tech'];
    foreach ($a as $jey => $values) {
        echo "$jey => $values </br>";
    }
    echo "</br>";
    /////////////////////////////////////////

    foreach (['A', 's', 'h', 'i', 's', 'h', ' ', 'K', 'u', 'm', 'a', 'r'] as $elements) {  
        echo "$elements\n";  
    }  
?> 