<?php
/**
You are given an integer N. Print the factorial of this number.
 N!= N×(N−1)×(N−2)× ⋯ ×3 ×2 ×1
 * Note: Factorials of N>20 can't be stored even in a 64−bit long long variable.
 * Big integers must be used for such calculations. Languages like Java, Python, Ruby etc.
 * can handle big integers but we need to write additional code in C/C++ to handle such large values.
--We recommend solving this challenge using BigIntegers.--
Input Format: Input consists of a single integer N.
Constraints: 1 ≤ N ≤ 100
Output Format: Output the factorial of N.
Sample Input: 25
Sample Output: 15511210043330985984000000
**/
$number = 25;
function extraLongFactorial($n){
    $fact1 = gmp_fact($n); // 5 * 4 * 3 * 2 * 1
    return                                                                                                                                                       gmp_strval($fact1) . "\n";
}

echo extraLongFactorial($number);


/*
 * I could write this function like that
function factorial($x){
    if($x < 2){
        return 1;
    }else{
        return $x * factorial($x -1);
    }
}
and than display with gmp_strval(),but hey
why should I ? we are trying to find easy way.
so since gmp is enabled on server i can use  gmp_fact() function.
 * */
echo PHP_EOL;
