<?php

/**
* A collection of common functions used by a PHP developer
* Collected by : Vivek 
* Email : vivekv@vivekv.com
* Website: http://www.vivekv.com
*/

/** List of functions
* 1. left($string,$count) - To get the required characters from the left
* 2. right($string,$count) -  To get the required characters from the left
* 
*/










/**
* A function to get the required characters from the left
* 
* @param mixed $str
* @param mixed $length
* @link http://www.dreamincode.net/code/snippet2302.htm
* @return string
* 
* Example: echo left("Hello World", 5); // Hello
* 
*/
function left($string, $count){
    return substr($string, 0, $count);
}
 
 /**
* A function to get the required characters from the right
* 
* @param mixed $str
* @param mixed $length
* @link http://www.dreamincode.net/code/snippet2302.htm
* @return string
* 
* echo right("Hello World", 5); // World
* 
*/

function right($value, $count){
    return substr($value, ($count*-1));
}
 





?>