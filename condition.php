<?php

/* if else  */
$number = 29;
if ($number > 5 ) {
    echo "Them number is larger than 4 \n";
} else {
    echo "Them number is larger than 4 \n";
}

/* switch  */
$fruit = "apple";
switch ($fruit) {
    case "apple" :
        echo "You chose apple.";
        break;
    case "banana" :
        echo "You chose banana.";
        break;
    default :
         echo "invalid choice .";
}

/* match we can use this instead of switch   */
$statusCode = 100;

echo "\n";
$message  = match ($statusCode) {
    200, 300 => "Ok",
    400 => "error",
    default => "Unknown status code ",
};

echo "$message";
{
echo " this is valid ";
}

/* if block wont execute */
if (false) {};
if (0) {};
if (null) {};
/* (===) check both number and types like js */

echo "\n";
?>
