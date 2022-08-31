<table>
    <style>
        table,td{
            border: 1px solid black;
        }
        table{
        border-collapse: collapse;
        }
    </style>
<?php
$conn = mysqli_connect('localhost', 'root', '', 'form');
$fetch = "SELECT user.id, user.fname, user.email, user.address, country.name,
state.statename, city.city_name , user.pin_code, user.epm_code
FROM ((( user 
LEFT JOIN country ON user.country = country.id )
LEFT JOIN state ON user.state = state.id)
LEFT JOIN city ON user.city = city.id)";
$result = $conn ->query($fetch);

echo "<pre>";
print_r($result);

foreach ($result as $key => $value) {
    echo "<td>" .$key."</td>";
    foreach ($value as $key2 => $value2) {
        echo "<td>". $value2 ."</td> ";
    }
    echo "</tr>";
}
// while ($row=mysqli_fetch_array($result)){
        
//     echo " 
//     <td>{$row["id"]}</td>
//     <td>{$row["fname"]}</td>
//     <td>{$row["email"]}</td>
//     <td>{$row["address"]}</td>
//     <td>{$row["name"]}</td>
//     <td>{$row["statename"]}</td>
//     <td>{$row["city_name"]}</td>
//     <td>{$row["pin_code"]}</td>
//     <td>{$row["epm_code"]}</td></tr>";
// // echo "<pre>";
// // print_r($row);
// }

?>