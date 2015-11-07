<?php

/*
Problem Statement
You are given an array of integers of size N. You need to print the sum of the elements of the array.

Note: A signed 32-bit integer value uses 1st bit to represent the sign of the number and remaining 31 bits to represent
the magnitude. The range of the 32-bit integer is −2^31 to 2^31−1 or [−2147483648,2147483647]. When we add several integer
values, the resulting sum might exceed this range. You might need to use long long int in C/C++ or long data type in
Java to store such sums.
 * */

$x = [  1000000001,
        1000000002,
        1000000003,
        1000000004,
        1000000005];

//echo array_sum(bcmod($x));
//$sum = 0;
/*foreach ($x as $k => $v ) {
    //bcadd($x[$k] + $x[$k+1]);

    for ($i = 0; $i < count($x); $i++) {

    }

    if($v==isset($x[$k+1])){
        //$sum[] = gmp_add($x[$k], $x[$k+1]);
    }

}*/

//----------------
//$continents = array("America", "Africa", "Europe", "Asia", "Antarctica");
//
//$item1 = current($continents);
//$item2 = next($continents);
//$item3 = next($continents);
//$item4 = end($continents);
//$item5 = prev($continents);
//
//echo "$item1, $item2, $item3, $item4, $item5\n";
//
//reset($continents);
//
while(list($idx, $val) = each($x)) {
    //echo "Index: $idx, Value: $val\n";

    if($x[$idx+1] == $x[$idx]){
        var_dump($x[$idx+1]);
    }

}
//----------------------



//echo gmp_strval($sum) . "\n";







echo PHP_EOL;