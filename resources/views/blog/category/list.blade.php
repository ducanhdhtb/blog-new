@extends('layouts.app')

@section('content')
		<div class="container">		
			<table class="table table-hover" >
			<thead>
				<tr>
					<th>Category List</th>
					<th>@if(Session::has('flash'))<span id="id">{{ Session::get('flash') }}@endif	</span></th>
					<th></th>
					<th></th>
					<th><a href="new" style="border:1px solid black;padding:10px 8px;cursor: pointer;background: #2ab27b;color:white; ">Add Category</a></th>
				</tr>
			</thead>
			<tbody>
				<tr>
					<td>Select</td>
					<td>Id_Category</td>
					<td>Category_name</td>
					<td>Edit Category</td>
					<td>Delete Category</td>
					<td>Lock Category</td>
				</tr>
				<?php foreach ($category as  $value) {?>					
				<tr>	
					<td><input type="checkbox" name=""></td>
					<td><?php echo $value['id'];	?></td>
					<td><b><?php echo $value['name']; ?></b></td>
					<td><a href="edit/{{$value['id']}}" ><button type="button" class="btn btn-danger">Edit</button></a>	</td>
					<td><a href="delete/{{$value['id']}}"> <button type="button" class="btn btn-success">Delete</button> </a></td>
					<td>
						<select style="padding:5px;background: red;color:white;border-radius:5px;border:red" name="" id="input" required="required">
							<option value="">Normal</option>
							<option value="">lock</option>
						</select>
					</td>
				</tr>
				 <?php } ?>
			</tbody>
		</table>
		</div>
@endsection
