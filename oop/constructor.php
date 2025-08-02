<?php
/* constructor()
 * A special type of function. which get called automatically at the time of object creation
   __construct() : is predefined constructor
    
    destructor()
special function . get called automatically at the time class exectution completed
   __destruct() : is predefined destructor

*/

class Sample
{
    function __construct() {
        echo "constructor initialized";
        echo "<br>";
    }

    function __destruct() {
        echo "<br>";
        echo "destructor initialized";
    }
    function hello() {
        echo "hello";
    }
}

$obj = new Sample;
$obj->hello();

?>
