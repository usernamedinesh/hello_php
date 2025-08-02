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

// accesing only value
foreach($person as $value) {
    echo "<p><strong> $value</p>";
}
echo "\n";

/* note  */
/* using foreach loop we cna iter both index and associate and object  */
/* using for loop only iterate index array */

/* METHOD */
/*
count : total number of element  of array
echo count($var);
only sort array values 
sort: sorting in asceding(a to z order and return true 
rsort: sorting in desceing(z to a) order and return true (issue because lowercae and uppercase is diff)
natcasesort : sort in descding( aA is treat as same )
natcasesort($var) 
sort($var) 
rsort($var) 


ksort($var) : sorting key
krsort($var) : sorting key in reverse order 

* array_combine(arr1, arr2) : arr1 => key | arr2 = value 
* only pass two args and both arg1 and arg2 have same no of emenet

*/
?>
