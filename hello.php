<?php echo "start \n" ?>
<?php

//constant is key value pairs using define keywoard
define("SUB","PHPBRO");
define("NAME","NODEJS");
echo SUB;
echo NAME;
const LANG = "javscript";
const H = "yeah";

/* workes here  */
printf("\nhelo printf"); 
echo "hello world\n";

//variable start with $
$age = 18; // integer 
$x1 = 19;
/* we can redealre variable */
$x1 = "string" ;
$name = "foo"; //string
$isLogged = true; // boolean true : 1 but false is not 0 it is empty(we got error)

//string concatenation use (.) operator 
echo "My name is " . $name . " , my age is " . $age . " year old ";
echo "\n";
//double quote required variable interpolation
echo "My name is $name , and i am $age years old\n"

?>

<?php echo "end " ?>
