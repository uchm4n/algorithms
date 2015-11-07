<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;

class HomeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('welcome');
    }

    /**
     * Queen Controller
     */
    public function queen($number=Null)
    {
        
        
        if($number > 1 || $number === NULL){
        	$queens = $number;
        }else{
        	$queens=8;
        }
        if($queens > 25 || $queens < 4){
        	$queens = 8;
        }
        
        $placements = array($queens);
        
        for($i=0;$i<$queens;$i++){
        	$placements[$i]=-1;
        }
        
        $placements = $this->placeQueens($placements, 0);
        $out = "";
        for ($i=0;$i<$queens;$i++){
            
        	$out .= "<div style='clear:left;'>\n";
        	for($j=0;$j<$queens;$j++){
        		if(($i+$j)%2==0){
        			$out .= "<div class='black'>";
        		}else{
        			$out .= "<div class='white'>";
        		}
        		if ($placements[$i]==$j){
        			$out .= "<img src=\"img/queen.png\"/>";
        		}else{
        			$out .= "&nbsp;";
        		}
        		$out .= "</div>\n";
        	}
        	$out .="</div>\n";
        }
        //dd($out);

        
        
        return view('nQueen/index',['number' => (int)$number,'out' => $out]);
    }
    
    /* როდესაც დედოფლები ერთმანეთს ემუქრებიან დაფაზე*/
    public function isAttacked($board, $x, $y){
    	foreach($board as $key => $value){
    		if($value != -1){
    			if ($key==$x){
    				return true;
    			}else if($value==$y){
    				return true;
    			}else if(($key-$x) / ($value-$y) == 1){
    				return true;
    			}else if(($key-$x) / ($value-$y) == -1){
    				return true;
    			}
    		}
    	}
    	return false;
    }
    
    /* ყველა დედოფფლის განლაგება*/
    public function allQueensPlaced($board){
    	$done = true;
    	for($i=0;$i<sizeof($board);$i++){
    		if($board[$i]==-1){
    			$done = false;
    		}
    	}
    	return $done;
    }
    
    
    public function placeQueens($board, $index){
    
    	if($index==sizeof($board) && $this->allQueensPlaced($board)){	
    		return $board;
    	}
    
    	$nextPosition = $board[$index] + 1;
    	$board[$index] = -1;
    
    //ლუპში ვატრიალებთ  შემდეგ პოზიციას.
    //იმ შემთხვევაში თუ  isAttacked true-არაა 
    //მაშინ ვაკეთებთ რეკურსიას მანამ სანამ არ განულდება $board
    	for($i=$nextPosition; $i<sizeof($board);$i++){
    		if(!$this->isAttacked($board, $index, $i)){
    			$board[$index]=$i;
    			return $this->placeQueens($board, $index+1);
    		}
    	}
    	$board[$index] = -1;
    	return $this->placeQueens($board, $index-1);
    }
        
    
    
}
