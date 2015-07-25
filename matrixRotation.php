<?php

/*
 * Problem Statement
 * You are given a 2D matrix, a, of dimension MxN and a positive integer R.
 * You have to rotate the matrix R times and print the resultant matrix.
 * Rotation should be in anti-clockwise direction.
 * Rotation of a 4x5 matrix is represented by the following figure. Note that in one rotation,
 * you have to shift elements by one step only (refer sample tests for more clarity).
 */

function matrix(array $arr,$row,$col,$r){

    for ($c = 0; $c < $col; $c++) {
        for ($r = 0; $r < $row; $r++) {
            if($row - $c == $r){
                echo "----- \n";
            }
            echo $arr[$row - $c][$r]. ' ';
        }
    }

}

$arr=[  '4 4 1 ',
        '1 2 3 4 ',
        '5 6 7 8 ',
        '9 10 11 12 ',
        '13 14 15 16'
      ];
foreach ($arr as $a) { $array[] = array_map('intval',explode(' ', $a)); }


//var_dump($array[0][2]);
//echo matrix($array,$array[0][0],$array[0][1],$array[0][2]);


//$a = array(array(1,2,3,4),array(5,6,7,8),array(9,0,1,2),array(3,4,5,6));
$a = [  ['1', '2', '3', '4'],['5', '6', '7', '8'],['9', '10', '11', '12'],['13', '14', '15', '16']];
$b = array(); //result

/*while(count($a)>0)
{

    if (count($a[0])==0)
    {
        $ar = array_shift($a);
    }
}*/
$b = call_user_func_array('array_map',array(-1 => null) + array_reverse($a));
var_dump($b);
echo PHP_EOL;
