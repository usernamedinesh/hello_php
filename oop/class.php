<?php
/* echo "class\n"; */
/*
 * A class is a collection of methods and properties
*/
class Sample 
{
    public $name = "dinesh";
    function greeting()
    {
        echo "Greeing from function !";
    }
}

class StaticClass
{

    static $x = 10;
    static function welcome() 
    {
        echo  "<p> This is welcome static function </p>";
    }
}

/*
 * Object: instance of an class (allocating the memory to the class members)
 * through the object we can access class members
 * create object using new keyword
*/
$obj = new Sample;
$obj->greeting();
echo "<br>";
echo $obj->name;

/*
 * TWO TYPE MEMBER
   1. static 
     declared using static keyword, access using class name,
     get memory allocated at the time of class loading,

   2. non-static
        by default it is non-static, access using object, 
        get memory allocated at the time of object creation
 
*/

/*
 * SCOPE RESOLUTION OPERATOR (::)
   using this can access static members  and constant of class
*/
StaticClass::welcome();
echo StaticClass::$x;



?>
