<?php
echo "cookie & session super global variable\n";
/*
 * 1. statefull protocol 
    remember previous data
    eg: ftp, tcp/ip

 * 2. stateless protocol (so use cookie)
    can't remember previous data
    eg: http, htpps
  
*/ 

/*  ===========COOKIE=============
 * cookie : is a small amount of data that we can store in brower(destoyed when close browser)(not sucure)
  set cookie: setcookie("name" "value"); 
  get cookie: $_COOKIE["name"]; 

/*  ===========SESSION=============
 *  session: is a huge amount of data store in a server (file)
 
 * create an session*
   session_start();
   $_SESSION["nam"] = "value";

 * accessing an session*
   session_start();
   echo $_SESSION["nam"];

 * deleting an session*
   session_start();
   session_unset();   // remove session data from session file
   session_destroy(); // remove the session file permanently
// after session is created the server will send the session_id to browser  and the browser save it as a cookie 
  
*/ 
?>
