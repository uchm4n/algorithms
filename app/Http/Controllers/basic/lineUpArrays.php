<?php

$array = [
    $row1 = ['2131','453','34','213','54'],
    $row2 = ['312','2','423','234','34'],
    $row3 = ['645','789','886','543','312'],
    $row4 = ['456','822','876','867','456'],
    $row5 = ['16','211231231231245','2654','546','826'],
    $row6 = ['5134','962132123137','264563456','357','1787'],
];

function lineUp($array){
    for ($i = 0; $i < count($array); $i++) {
        for ($k = 0; $k < count($array[$i]); $k++) {
            $strLength[] = strlen((string)$array[$i][$k]);
        }
    }
    $maxLength = max($strLength);
    for ($i = 0; $i < count($array); $i++) {
        echo "\n";
        for ($k = 0; $k < count($array[$i]); $k++) {
            echo $array[$i][$k]. "_";
            $stringLength = strlen((string)$array[$i][$k]);
            //var_dump($maxLength);
            //exit;
            $space = $maxLength - $stringLength;
            for ($ii = $space; $ii > 0; $ii--) {
                echo "_";
            }
        }
    }

}

echo lineUp($array);
//Biggest number in those array's
echo PHP_EOL;
