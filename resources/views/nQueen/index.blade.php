@extends('layout') 

@section('contents')

	<div class="row">
		<div class="col-md-12">
			<div class="jumbotron">
				<h2>Here is the formation of n queens problem in PHP</h2>
				<p>Inser parameter in URL : queen/7</p>
			</div>
		</div>
	</div>
	
	<div class="row">
		<div class="col-sm-12">
			<p><strong>Condition:</strong></p>
			<p>N queens puzzle is the problem of placing n queens on the board such that no two queens attach each other.</p>
	
			<p>
				A queen can either move horizontally , vertically or in the diagonal direction. We need to place queens in such a way that
				<br> whatever may be the direction a queen move , no other queen should not be in its path.
				<br> We need to place n queens in a board of nXn board.If you look at this each queen is placed in a different row.
				<br> If two queens are placed in the same row, they are going to attack each other. We can use that characteristics
				<br> in forming 8 queens puzzle. No two queens can be in the same row.
			</p>
		</div>
	</div>
	
	<div class="row">
		<hr>
		
		<div class="col-sm-4 chess ">
			<p><strong>Solution:</strong></p>
			{!!$out!!}
		</div>	
	</div>
	
	<hr>
	
	<div class="row">
		<div class="col-sm-12">
			
			<p><strong>Explanation:</strong></p>
		
			<p>
				Let us say a queen position is defined by (x,y) , then for each of the eight queens cannot be in a single row. <br>
				This can be represented as this. For each of the queens , x must be different. Queen 1 should have x value 1, <br>
				Queen 2 should have x value 2, until Queen n should have x value x. <br>
				We will make a queen to be having fixed row position (x value). And we move it only along the column or change only y values</p>
		
			<p>
				Take the nXn board and take n as 3. Now the board is 3X3. The board can be Queen 1 is given value 3, <br>
				Queen 2 is given value 1, Queen 3 is given value 2 .. It can be represented in a number like 312. <br>
				312 means first queen in 3rd column, 2nd queen in 1st column, 3rd queen in 2nd column. <br>
				But representing in the form of numbers for the position of queens work only for n upto 9. <br>
				Beyond that this method of representing fails to give results.
			</p>
		
			<p>
				Now let us represent the board A board can be of size nXn. A board size is represented by n. <br>
				A board can have n queens. An array of n queens. A fitness value, that stores the number of non attacking pairs of queens. <br>
				More the number of non attacking queens, we are more towards solution. <br>
				We need some methods to make it functional A method to generate the board with queens at random positions <br>
				A method to test the goal state of the board. If no queens are attacking each other we will say the goal is reached.<br>
				How to find out if two queens attack each other? Let us say we have queens at (x1,y1) and (x2,y2) . <br>
				What are the possibilities when two queens attack each other? <br>
				If they are in the same row .. means x1= x2 If they are in same column .. means y1=y2 If <br>
				they are diagonal to each other. When two queens are diagonal means , <br>
				they need to travel equidistant in rows and columns to reach other. I mean abs(x2-x1) = abs(y2-y1). <br>
				The distance must be always positive , hence we need to take the values as positive only. <br>
				Hence absolute values or non negative values of distance. We need a fitness function that calculates <br>
				the fitness value of the board. It just counts the number of non attacking pairs of queens on the board. <br>
				We need another function to display the board<br>
				For better explanation watch this video: <br>
			</p>
		
			
			<p>
				<iframe width="650" height="455" src="https://www.youtube.com/embed/p4_QnaTIxkQ" frameborder="0" allowfullscreen></iframe>
			</p>
	
		</div>
		
		<hr><br>
	</div>

@endsection