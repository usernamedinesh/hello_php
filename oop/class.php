<?php
/* echo "class\n"; */
/*
 * A class is a collection of methods and properties
*/
class Sample 
{
    public $name = "dinesh";
    public $age = 24;
    function greeting()
    {
        echo "Greeing from function !";
        echo "<br>";
    }
    function acc_non_static_member() {
        echo "my name is : " . $this->name;
    }
    function display() {
        $this->greeting();
    }
}

class StaticClass
{

    static $x = 10;
    static $name = "dinesh";
    static function welcome() 
    {
        echo  "<p> This is welcome static function </p>";
    }
    static function acc_static_member() {
        echo "<br>";
        echo "my name is : " . self::$name;
    }
    static function display() {
        echo "<br>";
        self::welcome();
    }
}

/*
 * Object: instance of an class (allocating the memory to the class members)
 * through the object we can access class members
 * create object using new keyword
*/
$obj = new Sample;
$obj->greeting();
$obj->display();
$obj->acc_non_static_member();
echo "<br>";
echo "age : " . $obj->age;

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
    using self:: keyboard we can access static members
*/
StaticClass::welcome();
echo StaticClass::$x;
StaticClass::acc_static_member();
StaticClass::display();



?>
