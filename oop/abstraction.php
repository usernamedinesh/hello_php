<?php
echo "hello";
/*
 *
    i) abstraction : is the process of hiding the class login
    ii) abstraction method does not contain logic
    iii) abstract class is created using abstrct keyword
    iiii) abstract method is defined using abstrct keyword
    iiiii) abstract  class may contains both abstract method and non-abstract method
    iiiiii) cant create object of abstract class
    iiiiiii) access using sub class object
*/
abstract class  Mobile
{
    abstract function SimMeasure();
    function greeting()
    {
        echo "welcome";
    }
}

/* sub class */
class Airtel extends Mobile 
{
    function  SimMeasure()
    {
        echo "measurement is completed";
    }
}

$obj = new Airtel();
$obj->SimMeasure();
$obj->greeting();

?>
