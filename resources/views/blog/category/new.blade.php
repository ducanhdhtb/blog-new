@extends('layouts.app')

@section('content')
		<div class="container">	
			<div class="col-md-3">	
				@if(Session::has('flash'))<span id="id"><u>{{ Session::get('flash') }}@endif</u>
				<form action="new" method="POST" role="form">
					{{ csrf_field()}}
					<legend>Form Add Category</legend>
				
					<div class="form-group">
						<label for="">Category</label>
						<input type="text" class="form-control" id="" placeholder="Input field" name="name">
					</div>								
					<button type="submit" class="btn btn-primary">Submit</button><hr>	
				</form>
				<a href="list" class="btn btn-danger">Back</a>
			</div>
			<div class="col-md-9">	
					<table class="table table-hover" >
			<thead>
			</thead>
			<tbody>
				<tr>
					<td>Id_Category</td>
					<td>Category_name</td>
					<td>Edit Category</td>
					<td>Delete Category</td>
				</tr>
				<?php foreach ($category as  $value) {?>					
				<tr>	
					<td><?php echo $value['id'];	?></td>
					<td><b><?php echo $value['name']; ?></b></td>
					<td><a href="" ><button type="button" class="btn btn-danger">Edit</button></a>	</td>
					<td><a href="delete/{{$value['id']}}"> <button type="button" class="btn btn-success">Delete</button> </a></td>
				</tr>
				 <?php } ?>
			</tbody>
		</table>
				
			</div>
		</div>
@endsection