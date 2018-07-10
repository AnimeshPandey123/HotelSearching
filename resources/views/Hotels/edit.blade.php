@extends('layouts.app')

@section('content')

	<div class="panel panel-primary">
		<div class="panel-heading">
			Edit the Hotel: {{$hotel->name}}
		</div>
		<div class="panel-body">
			<form action="{{route('hotel.update',['id'=>$hotel->id])}}" method="post" enctype="multipart/form-data">
				{{ csrf_field() }}

					<div class="form-group">
						<label for="name">Edit Name</label>
				<input type="text" name="name" class="form-control" value="{{$hotel->name}}">
					</div>
					<div class="form-group">
						<label for="address">Edit Address</label>
						<input type="text" name="address" class="form-control" value="{{$hotel->address}}">
					</div>
						
					<div class="form-group">
						<label for="featured">Featured Image</label>
						<input type="file" name="featured" class="form-control">
						</div>
						<div class="form-group">
							<label for="phone">Edit Phone No.</label>
								<input type="text" name="phone" class="form-control" value="{{$hotel->phone}}">
					</div> 
					<div class="form-group">
						<label for="numberofrooms">No of Rooms</label>
							<input type="text" name="numberofrooms" class="form-control" value="{{$hotel->numberofrooms }}">
					</div>
					<div class="form-group">
						<label for="description">Description</label>
							<textarea type="text" name="description" class="form-control" value="{{$hotel->description}}" >
								
							</textarea> 
					</div>
					
						
					<div class="form-group">
						<div class="text-center">
							<button class="btn btn-success" type="submit" >Update</button>

						</div>

					</div>

			</form>
				
		</div>



	</div>
	
@stop