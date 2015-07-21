<?php
/*
 * Play with array_filter and anonymous function */
$x = ['dog','cat','parrot','something','text','gator','drtttttttttttttttttttttetwrdtweeeeeeeeeeeeeeeeeeeeeee','reeeeeeeeeeeeeeeeeeeeeeeeeeeeeee'];
//returns big string value in array
$z = array_filter($x,function($i){
    return strlen($i) >= 10;
});
//print_r($z);
//---------------------------------------------

//multiply on 2
$func = function ($x) {
    return ($x * 2);
};

//print_r(array_map($func,range(1,10)));
//---------------------------------------------













echo PHP_EOL;