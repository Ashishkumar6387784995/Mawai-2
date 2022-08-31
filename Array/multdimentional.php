<html>
  <head>
    <style>
      table, td, th {
        border: 1px solid;
      }

      table {
        /* width: 100%; */
        border-collapse: collapse;
      }
    </style>
  </head>
  <body>
  <table>

  <th>ID</th>
  <th>Name</th>
  <th>Sallary</th><tr>
<?php
$emp = [
  [1,"Ashish",400000],
  [2,"Suman", 500000],  
  [3,"Deepak",300000]
];

echo $emp[0][1]."</br>";

for ($row = 0; $row < 3; $row++) {  
  for ($col = 0; $col < 3; $col++) {  
    echo "<td>".$emp[$row][$col]."</td>"."  ";  
  }
  echo "<tr/>";  
}  
'</table>';

echo "<pre>";
print_r($emp);

$x=0;
while ($x<=5) {
  echo "$x </br>";
  if($x==5){
    echo "</br>";
  }
  $x++;
}

$bazar = ['vegetables' => ['potato'=>16, 'cucumber'=>40, 'pumpkin'=>30, 'carrot'=>60], 
          'fruit' => ['apples'=> 150, 'pine-apple'=> '50', 'banana' => 100], 
          'fishes' => ['rohu'=> 220, 'mangur' => 280, 'tenguna'=> 100]
         ];
echo "<pre>";
print_r($bazar);
echo "</pre>";


foreach($bazar as $key => $val){
  echo $key.'<br>';
  foreach($val as $k => $v){
    echo "&nbsp&nbsp&nbsp". $k . ' -> ' .$v . '<br>';
  }
}

?>

</body>
</html>