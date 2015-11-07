<?php
date_default_timezone_set('UTC');

$data = ['2 7 1014','1 1 1015'];
//$data = ['9 3 2015','6 3 2015'];

function calculate(array $data)
{

    $datetime1 = date_create(date('m/d/Y', strtotime(str_replace(' ','-',$data[1]))));
    $datetime2 = date_create(date('m/d/Y', strtotime(str_replace(' ','-',$data[0]))));
    echo $days = $datetime2->format('d') - $datetime1->format('d') . " \n";
    echo $month = $datetime2->format('m') - $datetime1->format('m') . " \n";
    echo $year = $datetime2->format('y') - $datetime1->format('y') . " \n";
    echo "----";
    $fine=0;


    /*if($year > 0){ return $fine=$year*10000; }
    elseif($year < 0){ return $fine=0; }
    elseif($year == 0){
        if($month > 0){ return $fine=$month*500; }
        elseif($month < 0){ return $fine=0; }
        elseif($month == 0){
            if($days > 0){ return $fine=$days*15; }
            elseif($days <= 0){ return $fine=0; }
        }

    }*/

    switch(true){
        case ($year > 0):
            return $fine=$year*10000;
        case ($year < 0):
            return $fine=0;
        case ($year == 0):
            switch(true){
                case ($month > 0):
                    return $fine=$month*500;
                case ($month < 0):
                    return $fine=0;
                case ($month == 0):
                    if($days > 0){ return $fine=$days*15; }
                    elseif($days <= 0){ return $fine=0; }
            }
        default: break;
    }


    return $fine;
}


echo calculate($data);

echo PHP_EOL;