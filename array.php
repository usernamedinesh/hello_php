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
*
* arra_merge(arg1 , arg2, ...) : merge all values of arguments
*
* array_unique($var) : remove all dublicate
*
* seaching or finding element in array
* in_array(element , $var) // return true if exist 
* array_search(element , $var) // return index(position) if found  
*
* for seaching key 
    array_key_exists(key , $var)  // return true if exist 
*/

/*
     array_push():  adding element at last  
     array_unshift():  adding element at first  
* push and unshift  : return the total no of element(count) after adding
     array_pop() :   removing element at last  
     array_shift()  :  removing element at first  
* pop and shift  : return the deleted element


$arr = [10,20,30] // 3 element
echo array_push($arr, 40) // return 4 
echo array_unshift($arr, 40) // return 4 
echo array_unshift($arr, [10.1, 10.2]) // return 4  ( we cana do this to)

echo array_pop($arr); // return 30 (removed element);
echo array_shift($arr); // return 10 (removed element);

empty aray and pushing
$al = [] // declaring empty array
$al [] = 10;
$al [] = 20;
$al [] = 30;

or dynamicarrly
for($i = 91; $i <= 100; i++) {
  $al[] = $i;
}

array_splice
$arr [10,20,30,40];
$an = array_splice($arr, 2); //an =  10, 20 , 30 & arr = 40
array_splice($arr, 2, 0); //  arr = nothing remove from arr
array_splice($arr, 2, 1); //  remove 1 element from the index 2  = 10,20,40
array_splice($arr, 2, 0, 50); //  remove 1 element from the index 2  = 10,20,50,40

*/

?>
