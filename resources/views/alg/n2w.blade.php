@extends('layout') 

@section('contents')

	<div class="row">
		<div class="col-md-12">
			<div class="jumbotron">
				<h2>Convert numbers to words</h2>
			</div>
		</div>
	</div>
	
	<div class="row">
		<div class="col-sm-12">
		    
		    <form class="form-inline" action="{{ url('/n2w/convert') }}" method="POST">
		        {{csrf_field()}}
              <div class="form-group">
                <label class="sr-only" for="exampleInputAmount">Enter Number</label>
                <div class="input-group">
                    
                  <input name="number" type="text" class="form-control" id="exampleInputAmount" placeholder="Number">
                  
                </div>
              </div>
              <button type="submit" class="btn btn-primary">Convert</button>
            </form>
            
            <div><strong>Number in Words:</strong>
                @if(!empty($string)) 
                    <blockquote>
                      <p>{{$string}}</p>
                    </blockquote>
                    
                @endif
            </div>
		</div>
	</div>
	<script type="text/javascript">

        $( document ).ready(function(e) {
            e.preventDefault(); 
            alert('dsfs');
            $("#convertButton").submit(function(e) {
                alert('sdf');
                var url = "/n2w/convert"; 
            
                $.ajax({
                       type: "POST",
                       url: url,
                       data: $("#convertForm").serialize(), 
                       success: function(data)
                       {
                           alert(data); 
                           $( "#result" ).empty().append( data );
                       }
                     });
            
                
            });
        });
        
        
	</script>
	
@endsection