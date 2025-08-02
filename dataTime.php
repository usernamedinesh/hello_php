<?php
/*
 
*/
echo "\n<br>";
echo date("l"); // Saterday
echo "\n<br>";
echo date("D"); // Sat
echo "\n<br>";
echo date("F"); // Augest
echo "\n<br>";
echo date("M"); // Aug(mounth)
echo "\n<br>";
echo date("d"); // 02(day)
echo "\n<br>";
echo date("m"); // 08(mounth)
echo "\n<br>";
echo date("l d-m-Y\n");  // y = 25, Y = 2025
echo "\n<br>";


/* Time */
/*
 * hour
  00, 11 -> h, g
  00, 25 -> H, G 

    minutes  -> i 
    second   -> s 
    AM or PM -> A
    am or pm -> a
*/
echo date_default_timezone_get();
echo date("h:i:s A");

echo "\n<br>";

date_default_timezone_set("Asia/Kolkata");
echo date("h:i:s A");

echo "\n<br>";
echo time(); //current time in no of second
echo "<br>converting :  \n<br>";
echo date("Y-m-d  h:i:s A", time());
?>
