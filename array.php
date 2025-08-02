<?php
echo "array php\n";
// call index array
$fruits = ["banana", "mango", "apple"];
echo $fruits[1]; // mango
$fruits[2] = "pineapple\n";
/* we can count the number of array */
echo "\n";
echo "the count of fruits is : " , count($fruits);
echo "\n";
echo $fruits[2]; // pineapple

//key value paris  name index (associative array)
$person = [
    "first_name" => "John",
    "last_name" => "Doe",
    "age" => 30,
    10,
    120,
];
// i can print while array  like this  
print_r($person);

echo $person["first_name"]; 
echo "\n";
echo "age : " . $person["age"]; 
echo "\n";

// looping through  an array with foreach is very common 
foreach ($fruits as $fruit) {
    echo "<p>" . $fruit . "</p>";
}

//looping through associative array 
foreach($person as $key => $value) {
    echo "<p><strong>$key:</strong> $value</p>";
}
echo "\n";
?>
