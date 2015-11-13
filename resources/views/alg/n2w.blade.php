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
		    
		    <form id="convertForm" class="form-inline" action="{{ url('/n2w/convert') }}" method="POST">
		        {{csrf_field()}}
              <div class="form-group">
                <label class="sr-only" for="exampleInputAmount">Enter Number</label>
                <div class="input-group">
                    
                  <input name="number" type="text" class="form-control" id="exampleInputAmount" placeholder="Number">
                  
                </div>
              </div>
              <button id="convertButton" type="submit" class="btn btn-primary">Convert</button>
            </form>
            
            <div><strong>Number in Words:</strong>
                <blockquote>
                    <p id="result"></p>
                </blockquote>
            </div>
		</div>
	</div>
	
@endsection

@section('scripts')
<script type="text/javascript">

        $(document).ready(function() {
            var $form = $('#convertForm');

            $form.submit(function(e) {
                e.preventDefault();
                var url = "/n2w/convert";

                $.ajax({
                    type: "POST",
                    url: url,
                    data: $form.serialize(),
                    success: function(data) {
                        console.log(data);
                        $("#result").empty().append(data);
                    }
                });

            });
        });
        
</script>
@endsection