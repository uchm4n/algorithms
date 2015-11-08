<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;

class QeenController extends Controller
{

    public function index()
    {
        return view('welcome');
    }

    /**
     * Queen Controller
     */
    public function queen($number=Null)
    {
        $queens = $number;
        
        if($number > 1)$queens = $number;
        else $queens=8;
        if($queens > 25 || $queens < 4) $queens = 8;
        
        
        
        $placements = array($queens);
        
        
        for($i=0; $i<$queens; $i++){
        	$placements[$i] = -1;
        }
        
        
        $placements = $this->placeQueens($placements, 0);
        $out = "";
        //debug($placements);
        for ($i=0; $i < $queens; $i++){
        	$out .= "<div style='clear:left;'>\n";
        	for($j=0; $j < $queens; $j++){
        	    
        		if( ( $i + $j )%2 == 0 ) $out .= "<div class='black'>";
        		else $out .= "<div class='white'>";
        		
        		
        		if ( $placements[$i] == $j ) $out .= "<img src=\"".asset('img/queen.png')."\"/>";
        		else $out .= "&nbsp;";
        		
        		$out .= "</div>\n";
        	}
        	$out .="</div>\n";
        }
        
        
        return view('nQueen/index',['number' => (int)$number,'out' => $out]);
    }
    
    /* როდესაც დედოფლები ერთმანეთს ემუქრებიან დაფაზე*/
    public function isAttacked($board, $x, $y){
        //$key - არის Y კოორდინატი და 
        //$value - არის X კოორდინატი 
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
    	
    	//თუ ყველაფერმა ჩაიარა ესეიგი  X და Y კოორდინატები
    	//არ იკვეთება
    	return false;
    }
    
    /* ყველა დედოფფლის განლაგება*/
    public function allQueensPlaced(array $board){
    	$done = true;
    	for($i=0; $i < count($board); $i++){
    	    
    		if( $board[$i] == -1 ){
    			$done = false;
    		}
    		
    	}
    	return $done;
    }
    
    
    public function placeQueens(array $board, $index){
        
    	if( $index == count($board) && $this->allQueensPlaced($board) ){	
    		return $board;
    	}
    
        //debug($board[$index]);
    	$nextPosition = $board[$index] + 1;
    	$board[$index] = -1;
    	
    
        //ლუპში ვატრიალებთ  შემდეგ პოზიციას.
    	for($i=$nextPosition; $i<count($board); $i++){
    	    
    		if( !$this->isAttacked($board, $index, $i) ){
    		    
    			$board[$index] = $i;
    			//ვიძახწბთ თავის თავს რეკურსიულად +1 index-ით
    			return $this->placeQueens($board, $index+1);
    		}
    		
    	}
    	
    	//რეკურსიულად ვიძახებთ  თავის თავს ამჯერად  index-1 ით
    	$board[$index] = -1;
    	return $this->placeQueens($board, $index-1);
    }
    
}
