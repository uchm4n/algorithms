<?php

/*
Problem Statement
You are given an array of integers of size N. You need to print the sum of the elements of the array.

Note: A signed 32-bit integer value uses 1st bit to represent the sign of the number and remaining 31 bits to represent
the magnitude. The range of the 32-bit integer is −2^31 to 2^31−1 or [−2147483648,2147483647]. When we add several integer
values, the resulting sum might exceed this range. You might need to use long long int in C/C++ or long data type in
Java to store such sums.
 * */

$arr = [1000000001, 1000000002, 1000000003, 1000000004, 1000000005];

//echo $a = dechex(1000000001);
//echo '+';
//echo $b = dechex(1000000005);
//echo '=';
//echo hexdec($a+$b);
//carry = 0
//for i = 31 to 0
//sum[i] = a[i] ^ b[i] ^ carry
//  carry = (a[i] & b[i]) | (a[i] & carry) | (b[i] & carry)
//next i

function bit($arr){
    foreach ($arr as $a) {
        $bArray[] = decbin($a) . "\n";
    }

    $arInt = array_map('binary',$bArray);
    var_dump($arInt);
}



echo bit($arr);











echo PHP_EOL;