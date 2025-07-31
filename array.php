<?php
echo "array php\n";
$fruits = ["banana", "mango", "apple"];
echo $fruits[1]; // mango
$fruits[2] = "pineapple\n";
echo "\n";
echo $fruits[2]; // pineapple

//key value paris 
$person = [
    "first_name" => "John",
    "last_name" => "Doe",
    "age" => 30
];
echo $person["first_name"]; 
echo "\n";
echo "age : " . $person["age"]; 
echo "\n";
?>
