<?php

//ok

$str="{[]()}";
$str_1="{[(])}";

$cc = checking($str_1);

var_dump($cc);


function checking($braces) {

	if (!is_string($braces))
        throw new InvalidArgumentException('Not a string');

    if (trim($braces, '(){}[]') !== '')
        throw new InvalidArgumentException('Invalid string'); 

    $stack = array();

    for ($i = 0; $i < strlen($braces); $i++) {
        if ($braces[$i] === ')' || $braces[$i] === ']' || $braces[$i] === '}') {
            $last = array_pop($stack);
            if ($braces[$i] === ')' && $last !== '(' || $braces[$i] === '}' && $last !== '{' || $braces[$i] === ']' && $last !== '[')
                return false;
        } else
            $stack[] = $braces[$i];
    }
    return !$stack;

}



?>