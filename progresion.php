<?php

$arr = [1,11,1211,11221,312211];

    
$a=3;$d=8;$n=4;
//arithmetic progression formula
$AP=$a+($n-1)*$d;
    
    

//geometric progression formula
$number = 15;
$d = 9;//ceil(log(2*$number)/log(5))."\n";
$x = 1;
for($i = 1; $i<$d;$i++){
    echo str_repeat('X', $x),"\n";
    $number -= $x;
    $x *= 2;
}
echo str_repeat('X', $number),"\n";

