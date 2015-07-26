<?php

/*
 * Problem Statement
 * You are given a 2D matrix, a, of dimension MxN and a positive integer R.
 * You have to rotate the matrix R times and print the resultant matrix.
 * Rotation should be in anti-clockwise direction.
 * Rotation of a 4x5 matrix is represented by the following figure. Note that in one rotation,
 * you have to shift elements by one step only (refer sample tests for more clarity).
 */

function matrix(array $arr){

    $n = count($arr);
    for ($i = 0; $i < $n/2; $i++) {
        for ($j = 0; $j < $n -$i - 1; $j++) {
            $tmp =$arr[$i][$j];
            $tmp .= $arr[$i][$j]=$arr[$j][$n-$i-1];
            $tmp .= $arr[$j][$n-$i-1]=$arr[$n-$i-1][$n-$j-1];
            $tmp .= $arr[$n-$i-1][$n-$j-1]=$arr[$n-$j-1][$i];
            $tmp .= $arr[$n-$j-1][$i];
        }



    }
    print_r($tmp);
}

//private function rotateCounterClockwise(a:Array):void {
//    var n:int=a.length;
//    for (var i:int=0; i<n/2; i++) {
//        for (var j:int=i; j<n-i-1; j++) {
//            var tmp:String=a[i][j];
//					a[i][j]=a[j][n-i-1];
//					a[j][n-i-1]=a[n-i-1][n-j-1];
//					a[n-i-1][n-j-1]=a[n-j-1][i];
//					a[n-j-1][i]=tmp;
//		  }
//		}
//}
$arr=[  '4 4 1 ',
        '1 2 3 4 ',
        '5 6 7 8 ',
        '9 10 11 12 ',
        '13 14 15 16'
      ];
foreach ($arr as $k => $a) { ($k > 0) ? $array[] =  array_map('intval',array_filter(explode(' ',$a),'trim')): false ; }
echo matrix($array);
echo PHP_EOL;
