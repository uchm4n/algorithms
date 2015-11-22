<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;

class arrayRotationController extends Controller
{

    public function index()
    {
        
        $arr = 
        [
            [1,2,3,4],
            [5,6,7,8],
            [9,0,1,2],
            [3,4,5,6]
        ];
        $input = $arr;
        $n = count($arr);


        for($x=0; $x<ceil($n/2); $x++){
            
            
            for($y=0; $y<ceil($n/2); $y++){
                //echo $arr[$y][$n-$x-1];
                $tmp=$arr[$x][$y];
                $arr[$x][$y] = $arr[$y][$n-$x-1];
                $arr[$y][$n-$x-1] = $arr[$n-$x-1][$n-$y-1];
                $arr[$n-1-$x][$n-$y-1] = $arr[$n-$y-1][$x];
                $arr[$n-1-$y][$x] = $tmp;

            }
            
        }
        
        
        
        $out = $arr;
        $input = $this->printMatrix($input);
        $out = $this->printMatrix($out);
        
        
        
        
        return view('alg/arr',compact('input','out'));
    }

    //just for display as a table
    public function printMatrix($matrix){
        $out = '';
        $out .= "<table width=\"200\" class=\"table table-bordered\" >";
            foreach($matrix as $row => $rValue){
                $out .= "<tr>";
                foreach($rValue as $col => $cValue){
                    $out .= "<td>".$cValue."</td>";
                }
                $out .= "</tr>";
            }
        $out .= "</table>";
        return $out;
    }
   
}
