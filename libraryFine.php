<?php
date_default_timezone_set('UTC');

$data = ['6 3 2015','9 3 2015'];

function calculate(array $data)
{

    $datetime1 = date_create(date('m/d/Y', strtotime(str_replace(' ','-',$data[1]))));
    $datetime2 = date_create(date('m/d/Y', strtotime(str_replace(' ','-',$data[0]))));
    $days = $datetime2->format('d') - $datetime1->format('d');
    $month = $datetime2->format('m') - $datetime1->format('m');
    $year = $datetime2->format('y') - $datetime1->format('y');
    $fine=0;


    if(!empty($year) && $year > 0){
        $fine=$year*10000;
    }
    else{
        if(!empty($month) && $month > 0){
            $fine=$month*500;
        }else{
            if(!empty($days) && $days > 0){
                $fine=$days*15;
            }
        }
    }


    return $fine;
}


echo calculate($data);

echo PHP_EOL;