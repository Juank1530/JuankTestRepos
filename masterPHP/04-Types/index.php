<?php
/*
 * Data types
 * Integer or int = 99
 * float double = 3.45
 * String = Text "Hello" 'Hello'
 * Bolean bool = true or flase
 * Null
 * array data colection
 * objets
 */
$number = 100;
$decimal = 27.5;
$text = 'Im a text';
$boolena = true;
$text2 = "Im a number $number";
//Space specila characters 
$text3 = "Im a number \$ $number";
// Always is better use '' and not ""
// Example 'Im a number' . $number

echo gettype($number) . '<br>';
echo gettype($decimal) . '<br>';
echo gettype($boolena) . '<br>';
echo gettype($text) . '<br>';


echo $text2 . '<br>';
echo $text3 . '<br>';

// Debug
$my_name = 'Juank';
$my_name2[] = 'Juank2';
$my_name2[] = 'Juank3';

echo var_dump($my_name2) . '<br>';

var_dump($my_name);