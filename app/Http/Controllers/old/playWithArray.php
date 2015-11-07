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



//Convert string to int really quick!
var_dump(+'1');


//Array reduce Generate table
function reduceToTable($html, $p) {
    $html .= "<TR><TD><a href=\"$p.html\">$p</a></td></tr>\n";
    return $html;
}

$list = Array("page1", "page2", "page3");

$tab = array_reduce($list, "reduceToTable");
echo "<table>".$tab . "</table>\n";









echo PHP_EOL;