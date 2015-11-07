<?php
/**
Problem Statement

You're given an array containing integer values. You need to print the fraction of count of positive numbers, negative numbers and zeroes to the total numbers. Print the value of the fractions correct to 3 decimal places.

Input Format

First line contains N, which is the size of the array.
Next line contains N integers A1,A2,A3,⋯,AN, separated by space.

Constraints
1≤N≤100
−100≤Ai≤100
Output Format

Output three values on different lines equal to the fraction of count of positive numbers, negative numbers and zeroes to the total numbers respectively correct to 3 decimal places.

Sample Input

6
-4 3 -9 0 4 1
Sample Output

0.500
0.333
0.167
Explanation

There are 3 positive numbers, 2 negative numbers and 1 zero in the array.
Fraction of the positive numbers, negative numbers and zeroes are 36=0.500, 26=0.333 and 16=0.167 respectively.

Note This challenge introduces precision problems. You can even print output to 4 decimal places and above but only the difference at 3rd decimal digit is noted. That is the reason you'll notice testcases have much higher precision (more decimal places) than required.
Answers with absolute error upto 10−4 will be accepted.
 */

$number = 6;
$str = "-4 3 -9 0 4 1";

function plusMinus($number,$str){
    if($number >= 1 && $number <= 100 ){
        $arr = explode(' ',$str);
        $arrCount = count($arr);
        $negative = 0;
        $positive = 0;
        $zero = 0;
        if($arrCount == $number && $arrCount >= -100 && $arrCount <= 100){
            foreach ($arr as $x){
                if ($x < 0)
                    $negative++;
                elseif ($x == 0)
                    $zero++;
                elseif($x > 0)
                    $positive++;
            }
            $line1 = number_format(($positive / $number),3);
            $line2 = number_format(($negative / $number),3);
            $line3 = number_format(($zero / $number),3);
            return $line1 . "\n" . $line2 ."\n".$line3;
        }
    }

    return false;
}

echo plusMinus($number,$str);
echo PHP_EOL;