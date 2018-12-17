<?php

$cars = array(7,69,2,221,8974);

$min=0;
$max=0;

$result="";

for($i=0; $i < (count($cars)-1); $i++){
	$min = $min + $cars[$i];
}

for($i=1; $i < (count($cars)); $i++){
	$max = $max + $cars[$i];
}

$result = $min." ".$max;

echo $result;

//return $result;


?>