@extends('layouts.app')
@section('content')
	<div class="panel panel-primary">
		<div class="panel-heading">
			Search Hotels
		</div>
		<div class="panel-body">
			<form action="{{route('hotels.search')}}" method="post">
				{{ csrf_field() }}

					<div class="form-group">
						<label >Name</label>
						<input type="text" name="hotels" class="form-control" >
					</div>
						
					
					<div class="form-group">
						<div class="text-center">
							<button class="btn btn-success" type="submit" >Search</button>

						</div>

					</div>

			</form>
				
		</div>



	</div>
@stop