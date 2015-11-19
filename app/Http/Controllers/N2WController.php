<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Http\Requests\Convertor;

class N2WController extends Controller
{


    public function index()
    {
        return view('alg/n2w');
    }
    
    
    public function n2w( $number = Null ){
        if($number == NULL){
            $number = \Request::input('number');
        }
                /*$dictionary  = [
            0                   => 'ნული',
            1                   => 'ერთი',
            2                   => 'ორი',
            3                   => 'სამ',
            4                   => 'ოთხი',
            5                   => 'ხუთი',
            6                   => 'ექვსი',
            7                   => 'შვიდი',
            8                   => 'რვა',
            9                   => 'ცხრა',
            10                  => 'ათი',
            11                  => 'თერმეტი',
            12                  => 'თორმეტი',
            13                  => 'ცამეტი',
            14                  => 'თოთხმეტი',
            15                  => 'თხუთმეტი',
            16                  => 'თექვსმეტი',
            17                  => 'ჩვიდმეტი',
            18                  => 'თვრამეტი',
            19                  => 'ცხრამეტი',
            20                  => 'ოცი',
            30                  => 'ოცდაათი',
            40                  => 'ორმოც',
            50                  => 'ორმოცდაათი',
            60                  => 'სამოცი',
            70                  => 'სამოცდაათი',
            80                  => 'ოთხმოცი',
            90                  => 'ოთხმოცდაათი',
            100                 => 'ას',
            1000                => 'ათას',
            1000000             => 'მილიონი',
            1000000000          => 'ბილიონი',
            1000000000000       => 'ტრილიონი',
            1000000000000000    => 'კუადრილიონი',
            1000000000000000000 => 'კვინტილიონი'
        ];*/
        $dictionary  = [
            0                   => 'zero',
            1                   => 'one',
            2                   => 'two',
            3                   => 'three',
            4                   => 'four',
            5                   => 'five',
            6                   => 'six',
            7                   => 'seven',
            8                   => 'eight',
            9                   => 'nine',
            10                  => 'ten',
            11                  => 'eleven',
            12                  => 'twelve',
            13                  => 'thirteen',
            14                  => 'fourteen',
            15                  => 'fifteen',
            16                  => 'sixteen',
            17                  => 'seventeen',
            18                  => 'eighteen',
            19                  => 'nineteen',
            20                  => 'twenty',
            30                  => 'thirty',
            40                  => 'fourty',
            50                  => 'fifty',
            60                  => 'sixty',
            70                  => 'seventy',
            80                  => 'eighty',
            90                  => 'ninety',
            100                 => 'hundred',
            1000                => 'thousand',
            1000000             => 'million',
            1000000000          => 'billion',
            1000000000000       => 'trillion',
            1000000000000000    => 'quadrillion',
            1000000000000000000 => 'quintillion'
        ];
        $hyphen      = '-';
        $conjunction = ' and ';
        $separator   = ', ';
        $negative    = 'negative ';
        $decimal     = ' point ';
        $string = $fraction = null;
        
        if (!is_numeric($number)) {
            return "Insert number !";
        }
        
        if (($number >= 0 && (int) $number < 0) || (int) $number < 0 - PHP_INT_MAX) {
            // overflow
            trigger_error(
                'n2w only accepts numbers between -' . PHP_INT_MAX . ' and ' . PHP_INT_MAX,
                E_USER_WARNING
            );
            return false;
        }
        
        if ($number < 0) {
            return $negative . $this->n2w(abs($number));
        }
        
   
        if (strpos($number, '.') !== false) {
            list($number, $fraction) = explode('.', $number);
        }
        
        switch (true) {
            case $number < 21:
                $string = $dictionary[$number];
                break;
            case $number < 100:
                $tens   = ((int) ($number / 10)) * 10;
                $units  = $number % 10;
                debug($units,$tens);
                $string = $dictionary[$tens];
                if ($units) {
                    $string .= $hyphen . $dictionary[$units];
                }
                break;
            case $number < 1000:
                $hundreds  = $number / 100;
                $remainder = $number % 100;
                $string = $dictionary[$hundreds] . ' ' . $dictionary[100];
                if ($remainder) {
                    $string .= $conjunction . $this->n2w($remainder);
                }
                break;
            default:
                $baseUnit = pow(1000, floor(log($number, 1000)));
                $numBaseUnits = (int) ($number / $baseUnit);
                $remainder = $number % $baseUnit;
                $string = $this->n2w($numBaseUnits) . ' ' . $dictionary[$baseUnit];
                if ($remainder) {
                    $string .= $remainder < 100 ? $conjunction : $separator;
                    $string .= $this->n2w($remainder);
                }
                break;
        }
       
        if (null !== $fraction && is_numeric($fraction)) {
            $string .= $decimal;
            $words = array();
            foreach (str_split((string) $fraction) as $number) {
                $words[] = $dictionary[$number];
            }
            $string .= implode(' ', $words);
        }
       
        return $string;
        
        
    }
    
    

    
}
