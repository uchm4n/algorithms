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
function printMatrix(array $matrix)
{
    $sum1 = 0;
    $sum2 = 0;
    if ($matrix[0] >= 1 && $matrix[0] <= 100) {
        for ($i = 0; $i < $matrix[0] + 1; $i++) {
            for ($j = 0; $j < 1; $j++) {

                $sum1 += $matrix[$i][$i - 1];
            }
            for ($j = 0; $j < 1; $j++) {
                $sum2 += $matrix[$i][$matrix[0] - $i];
            }
        }
    }

    if (($sum1 >= -100 && $sum1 <= 100) || ($sum2 >= -100 && $sum2 <= 100)) {
        return (abs($sum1 - $sum2));
    }

    return false;
}

echo printMatrix([3, [11, 2, 4], [4, 5, 6], [10, 8, -12]]);
echo PHP_EOL;