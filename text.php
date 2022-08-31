<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <title>Document</title>
</head>
<?php
echo "Ashish </BR> Kumar <a href='#'>Ashihs</a> </br>";
print "Ashish </BR> Kumar <a href='#'>Ashihs</a>";
// print("$as");
// echo ("AA");
// print_r("AS");

$A = 5;
$B = 6;
$C =($A+ $B);
print_r ("<br>".$C);

var_dump ("Ashish");
var_dump (212121);
var_dump (1212.212 ."<br>");


if($A == "5"){
    echo "True <br>"; 
}
else{
echo "False <br>"; 
}

$k=1;
for($i=5; $i>=1; $i--){
    for($j=5; $j>=$i; $j--){
        echo "* ";
    }
    echo "<br>";
}
?>
<h1 class="AA">Ashish Kumar</h1>
<h2>Himanshu</h2>

<script>
    jQuery(document).ready(function(){
        jQuery('.AA').on('click',function(){
            var Ashish = jQuery(this).text();
            alert(Ashish);
        });
    });
         
        
</script>

</body>
</html>