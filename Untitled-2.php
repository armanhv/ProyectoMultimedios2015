<?php 
/*$var_1 = 'tours'; 
$var_2 = 'toures'; 

similar_text($var_1, $var_2, $percent); 

echo $percent; 
/*
$string = "holi mundi";

$claves = preg_split("/[\s,]+/", $string);
print_r($claves);
*/
/*

$ar = array(
       array("10", 11, 100, 100, "a"),
       array(   1,  2, "2",   3,   1)
      );
array_multisort($ar[0], SORT_ASC, SORT_STRING,
                $ar[1], SORT_NUMERIC, SORT_DESC);
var_dump($ar);
$a = "asdsa";

$palabras = preg_split(" ", $a);
var_dump($palabras);*/

$a = "ascdad asc, asdas ascsa ";
$claves = preg_split("/[\s,]+/", $a);
print_r($claves);



?>