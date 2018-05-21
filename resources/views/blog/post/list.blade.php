@extends('../layouts.app')

@section('content')
	<div class="container">		
			<table class="table table-hover" >
			<thead>
				<tr>
					<th>Slogan</th>
					<th>@if(Session::has('flash3'))<span id="id">{{ Session::get('flash3') }}@endif	</span></th>
					<th></th>
					<th><u>@if(Session::has('flash4'))<span id="id">{{ Session::get('flash4') }}@endif</u></th>
					<th><a href="post/new" style="display: block;">Add a new post</a></th>
				</tr>
			</thead>
			<tbody>
				<tr>
					<td width="50px">Id</td>
					<td width="50px">Title</td>
					<td width="200px">Summary</td>
					<td>Content</td>
					<td>Status</td>				
					<td>Edit Post</td>
					<td>Delete post</td>
				</tr>
				<?php 
					foreach ($post as $value) {?>
				<tr>	
					<td width="50px"><?php echo $value['id'] ?></td>
					<td width="50px"><?php echo $value['title'] ?> </td>
					<td width="200px"> <?php echo  substr($value['summary'], 0, 100)?></td>
					<td> <?php echo  substr($value['content'], 0, 300)?> </td>					
					<td>
						<a href="view/<?php echo $value['id'];?>/<?php echo str_slug($value['title'])?>">Detail...</a>
					</td>
					<td><a href="edit/<?php echo $value['id'];  ?>" ><button type="button" class="btn btn-danger">Edit</button></a>	</td>
					<td><a href="delete/<?php echo $value['id'];  ?>"> <button type="button" class="btn btn-success">Delete</button> </a></td>
					
				</tr>
				<?php 
					}
				 ?>
				</tbody>
		</table>
		</div>
@endsection