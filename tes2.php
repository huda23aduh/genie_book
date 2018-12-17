<?php

//ok

$my_list = array(3,4,6,10,11,15);
$alisa_list = array(1,5,8,12,14,19);

$foo = array(); // $foo is still here


print_r($my_list);
echo "<br>";
print_r($alisa_list);
echo "<br>";
echo "================<br>";
sort_all($my_list, $alisa_list); // call the function

// print_r($my_list);
// echo "<br>";
// print_r($alisa_list);




function sort_all($my_list, $alisa_list) {
	$array1 = $my_list;
	$array2 = $alisa_list;
    $array3 = [];

	// Determines how many items we have in each array
	$array1_count = count($array1);
	$array2_count = count($array2);

	// While we still have at least one item in one of the arrays
	while ($array1_count || $array2_count)
	{
	    $array1_empty = $array1 == [];
	    $array2_empty = $array2 == [];

	    if (!$array1_empty && !$array2_empty)
	    {
	        if (current($array1) < current($array2))
	        {
	            $array3[] = array_shift($array1);
	            $array1_count--;
	        }
	        else
	        {
	            $array3[] = array_shift($array2);
	            $array2_count--;
	        }
	    }
	    elseif (!$array1_empty)
	    {
	        $array3[] = array_shift($array1);
	        $array1_count--;
	    }
	    elseif (!$array2_empty)
	    {
	        $array3[] = array_shift($array2);
	        $array2_count--;
	    }
	}
	print_r($array3);

}




?>