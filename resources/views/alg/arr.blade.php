@extends('layout') 

@section('contents')

	<div class="row">
		<div class="col-md-12">
			<div class="jumbotron">
				<h2>2D array Rotation</h2>
			</div>
		</div>
	</div>
	
	<div class="row">
		<div class="col-sm-12">
		    <p><h2>Input:</h2></p>
		    <div class="row">{!!($input)!!}</div>
		</div>
		
		<div class="row">
		    <p><h2>Output:</h2></p>
		    <div class="row">
		        {!!($out)!!}
		    </div>
		</div>
		
	</div>
	<br>
@endsection

@section('scripts')
<script type="text/javascript">

        
</script>
@endsection