@extends('layouts.app')

@section('content')

	<div class="panel panel-primary">
		<div class="panel-heading">
			Create Post
		</div>
		<div class="panel-body">
			<form action="{{route('hotels.store')}}" method="post" enctype="multipart/form-data">
				{{ csrf_field() }}

					<div class="form-group">
						<label for="name">Name of Hotels</label>
						<input type="text" name="name" class="form-control">
					</div>
					<div class="form-group">
						<label for="address">Address</label>
							<input type="text" name="address" class="form-control">
					</div>
						
					<div class="form-group">
						<label for="feature">Featured Image</label>
						<input type="file" name="featured" class="form-control">
					</div>
						<div class="form-group">
						<label for="phone">Phone</label>
							<input type="text" name="phone" class="form-control">
					</div>
					
						<div class="form-group">
						<label for="price">Price</label>
							<input type="text" name="price" class="form-control">
					</div>
					<div class="form-group">
						<label for="rating">Rating</label>
							<input type="text" name="rating" class="form-control" placeholder="Put between 1-5">
					</div>
					<div class="form-group">
						<label for="numberofrooms">No of Rooms</label>
							<input type="text" name="numberofrooms" class="form-control">
					</div>
					
					<div class="form-group">
						<label for="description">Description</label>
							<textarea type="text" name="description" class="form-control" placeholder="Enter information">
								
							</textarea> 
					</div>
					
					
					<div class="form-group">
						<div class="text-center">
							<button class="btn btn-success" type="submit" >Store</button>

						</div>

					

			</form>
				
		</div>



	</div>
	
@stop
