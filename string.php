<?php
echo "string\n";
/*
 * 4-ways to declare a string
      $str1 = 'single quote';
      $str2 = "double quote";
      $str3 = "double quote";
      $str4 = "double quote";
*/
$name = "Dinesh";
$heredocString = <<<EOT
This is a multiline string
using heredoc syntax.
Variables like $name are interpolated.
EOT;

$nowdocString = <<<'ABC'
This is a multiline string
using nowdoc syntax.
Variables like $name are NOT interpolated.
ABC;

echo $heredocString;
echo $nowdocString;
/*
 * METHOD
 * echo strlen($var) return legth including spaces
 * echo strtoupper($var) uppercase 
 * echo strtolower($var) lowercase
 * echo ucwords($var) starting letter of every words will capital not works if all are capital

 * if all wors are caiptral then we convert it to lower then use ucwors
 * ucwords(strtolower($var));
 * ucfirst($var)  : only first letter will be capital
 *
 * EXPLODE(string to array) and IMPLODE (arr to string)
 * $str1 = "1#2#3#";
 * $arr = explode("#", $str1);  :=>1, 2 ,3 
 * $arr = [10,20,30]; 
 * $str1 =  implode("#", $arr);  10#20#30# 
 *
 * $email = "borod@gmail.com";
 * echo strpos($email, "@"); //return position of first occurence
 * echo stripos($email, "@"); //return position of first occucence case insensetive (a and A is same)
 *
 * echo substr($email, 3) // it wll skip first 3 postion and return all string
 * echo substr($email, 0, 5) // it wll return only 0 to 5 string
 
 * echo sub_suffle($email, 0, 5) // get random
 * echo strip_tags($var) // remove html tgas from $var
 * echo trim($var) // remove html tgas from $var
 *
 * password_hash($pass, PASSWORD_DEFAULT); // hash the pass
 *
 * password_verify($pass, $hash_pass); // return true if match
 *
*/
?>
