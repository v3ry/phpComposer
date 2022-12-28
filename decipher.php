<?php
$val1 = "0@sn9sirppa@#?ia'jgtvryko1";
$val2 = "q8e?wsellecif@#?sel@#?setuotpazdsy0*b9+mw@x1vj";
$val3 = "aopi?sgnirts@#?sedhtg+p9l!";
$keyNum1 = round(strlen($val1)/2,0,PHP_ROUND_HALF_DOWN)-1;
$stringTronk1 = substr($val1, 6,$keyNum1);
$explode1 = str_replace(["@","#","?"]," ",$stringTronk1);

$keyNum2 = round(strlen($val2)/2,0,PHP_ROUND_HALF_DOWN)-1;
$stringTronk2 = substr($val2, 6,$keyNum2);
$explode2 = str_replace(["@","#","?"]," ",$stringTronk2);

$keyNum3 = round(strlen($val3)/2,0,PHP_ROUND_HALF_DOWN)-1;
$stringTronk3 = substr($val3, 6,$keyNum3);
$explode3 = str_replace(["@","#","?"]," ",$stringTronk3);

echo(strrev($explode1) . '<br>');
echo(strrev($explode2) . '<br>');
echo(strrev($explode3) . '<br>');
?>