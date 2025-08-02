<?php
$name = "dinesh"; //Global variable
 echo "super global variables\n";
/*
     All super global variable are of array data types and predefine

*/   
function welcome() {
    //To use global varible inside this fuction
    echo "wecome : " . $GLOBALS['name'];
    echo "<br>";
     print_r($GLOBALS);
}
welcome();

/*
$_GET(Get data) also collect data from url 
if login.html :=> method= GET action = super_glob_var.php (not secure)
    $name = $_GET["name"];
    $email = $_GET["email"];
$_POST(send data) (secure) collect data from form
    method = POST
    $name = $_POST["name"];
    $email = $_POST["email"];
    
$_REQUEST also from cookie

    method = POST | GET
    $name = $_REQUEST["name"];
    $email = $_REQUEST["email"];

DIFFERENCE METHOD POST | GET FROM HTML
GET: =transfer data from url, not secure, transer data only around 2kb
POST: transfer trough protocol body, sercure, unlimited amount to data 

*/
?>
