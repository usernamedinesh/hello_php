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
?>
