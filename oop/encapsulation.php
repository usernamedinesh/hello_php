<?php
/*
 * Encapsulation is the process of wrapping up of class logic(to protect class logic)
 * by using private access specifier
*/
class Father 
{
    private function money() {
        
        /* echo "<br>"; */
        echo "i have money\n";
    }
    function mother () {
        $this->money();
    }
    function getD() {

        echo "i have gun\n";
    }
    function vehicle() {
        echo "\n";
        echo "i have vehicle\n";
    }
}

class clild extends Father {
    function hi() {
        /* echo "<br>"; */
        echo "\n";
        echo "from child\n";
        parent::getD(); // i can do this too
        Father::getD(); // i can do this too
    }
}

$obj = new clild;
$obj->vehicle();
$obj->mother();
/* $obj->money(); */ // cant do it 
$obj->hi();

?>
