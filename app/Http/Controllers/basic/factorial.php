<?php


function factorial($x){
    if($x < 2){
        return 1;
    }else{
        return $x * factorial($x -1);
    }
}

//PHP does not support big numbers by default, after this 171 will be INF number
echo factorial(170);
echo PHP_EOL;