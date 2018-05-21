@extends('layouts.app')
		
@section('content')
		<div class="container">	
			<div class="col-md-3">	
				@if(Session::has('flash1'))<span id="id"><u>{{ Session::get('flash1') }}@endif</u>
				<form action="<?php echo $category['id']; ?>" method="POST" role="form">
					{{ csrf_field()}}
					<legend>Form Add Category</legend>
				
					<div class="form-group">
						<label for="">Category</label>
						<input type="text" class="form-control" id="" placeholder="<?php echo $category['name']; ?>" name="name">
					</div>								
					<button type="submit" class="btn btn-primary">Accept repair</button><hr>	
				</form>
			</div>
				<a href="#" class="btn btn-danger">Back</a>
			</div>
				

		</div>
@endsection