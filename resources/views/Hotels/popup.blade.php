@extends('layouts.app')

@section('content')

	<div class="panel panel-primary">
		<div class="panel-heading">
			Create Post
		</div>
		<div class="panel-body">
			<form action="{{route('hotel.room.store',['id'=>$hotel->id])}}" method="post" enctype="multipart/form-data">
				{{ csrf_field() }}

					<div class="form-group">
						<label for="feature1">Featured Image1</label>
						<input type="file" name="featured1" class="form-control">
					</div>
						
					<div class="form-group">
						<label for="feature2">Featured Image2</label>
						<input type="file" name="featured2" class="form-control">
					</div>
						<div class="form-group">
						<label for="feature3">Featured Image3</label>
						<input type="file" name="featured3" class="form-control">
					</div>
					
						<div class="form-group">
						<label for="feature4">Featured Image4</label>
						<input type="file" name="featured4" class="form-control">
					</div>
					
					
					
					<div class="form-group">
						<div class="text-center">
							<button class="btn btn-success" type="submit" >Store</button>

						</div>

					

			</form>
				
		</div>



	</div>
	
@stop
