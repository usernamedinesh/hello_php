<?php
/* function declaration */
function greeting($name) {
    echo "Hello, " . $name;
}
greeting("dinesh");
echo "\n";

/* passing argument */
function addNumbers($num1, $num2) {
  $sum = $num1 + $num2;
  return $sum;
}
echo addNumbers(3, 4);
echo "\n";

/* default argument */
function greet($name = "guest"){
    echo "hello " . $name;
}

greet();
echo "\n";
greet("John");

echo "\n";
?>
