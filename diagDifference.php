<?php
/*
You are given a square matrix of size N×N. Calculate the absolute difference of the sums across the two main diagonals.

Input Format

The first line contains a single integer N. The next N lines contain N integers describing the matrix.

Constraints
1≤N≤100
−100≤A[i]≤100

Output Format

Output a single integer equal to the absolute difference in the sums across the diagonals.

Sample Input

3
11 2 4
4 5 6
10 8 -12
Sample Output

15
Explanation

The first diagonal of the matrix is:

11
    5
        -12
Sum across the first diagonal = 11+5-12= 4

The second diagonal of the matrix is:

        4
    5
10
Sum across the second diagonal = 4+5+10 = 19
Difference: |4-19| =15
*/
$n = 3;
$mat = "
11 2 4
4 5 6
10 8 -12
";

$arr = [3, [11, 2, 4], [4, 5, 6], [10, 8, -12]];


/*while(!feof($fp)){
    $string[] = fgets($fp);
    foreach($string as $s){
        $a = array_map('intval', explode(' ',$s));
    }
    $arr[] = $a;
}

$arr=
array(3) {
  [0]=>
  array(3) {
    [0]=>
    int(11)
    [1]=>
    int(2)
    [2]=>
    int(4)
  }
  [1]=>
  array(3) {
    [0]=>
    int(4)
    [1]=>
    int(5)
    [2]=>
    int(6)
  }
  [2]=>
  array(3) {
    [0]=>
    int(10)
    [1]=>
    int(8)
    [2]=>
    int(-12)
  }
}

*/


function printMatrix($n,$matrix)
{
    $sum1 = 0;
    $sum2 = 0;

    if ($n >= 1 && $n <= 100) {
        for ($i = 0; $i < $n + 1; $i++) {
            for ($j = 0; $j < 1; $j++) {
                $sum1 += $matrix[$i][$i - 1];
            }
            for ($j = 0; $j < 1; $j++) {
                $sum2 += $matrix[$i][$n - $i];
            }
            echo $sum1;
        }
    }

    if (($sum1 >= -100 && $sum1 <= 100) || ($sum2 >= -100 && $sum2 <= 100)) {
        return (abs($sum1 - $sum2));
    }

    return false;
}

echo printMatrix($n,$mat);
echo PHP_EOL;