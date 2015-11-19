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
        $out = call_user_func_array(
            'array_map',array(-1 => null) + array_map('array_reverse', $arr)
        ); 
        
        
        
        
        $arr = $this->printMatrix($arr);
        $out = $this->printMatrix($out);
        
        
        
        
        return view('alg/arr',compact('arr','out'));
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
