<?php
/*
Problem Statement

Your teacher has given you the task to draw the structure of a staircase. Being an expert programmer, you decided to make a program for the same. You are given the height of the staircase. You need to print a staircase as shown in the example.

Input Format

You are given an integer N depicting the height of the staircase.

Constraints
1≤N≤100
Output Format

Draw a staircase of height N in the format given below.

For example:
     #
    ##
   ###
  ####
 #####
######
Staircase of height 6, note that last line has 0 spaces before it.

Sample Input

6
Sample Output
     #
    ##
   ###
  ####
 #####
######
*/
function stair($n){
    if($n >= 1 && $n <= 100){
        for($i=0;$i < $n; $i++){
            $i < 1 ?  : print("\n");
            $hash = '';
            for($j=0;$j < ($n + 1) - ($n - $i); $j++){
                $hash .= '#';
            }
            echo str_pad($hash, $n,' ',STR_PAD_LEFT);
        }
    }
    return false;
}
stair(6);
echo PHP_EOL;
