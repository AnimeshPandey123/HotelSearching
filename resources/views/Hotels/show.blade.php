@extends('layouts.app')
@section('content')
<div class="panel panel-primary">
 			<div class="panel-heading">
 				Hotels
 			</div>
 			<div class="panel-body">
 			<table class="table table-hover">	
 			<thead>
 			<th>
 				Image
 			</th>
 			<th>
 				Hotel Names
 			</th>
 			<th>
 				Address
 			</th>
 			<th>
 				Room
 			</th>
 			<th>
 				Edit
 			</th>

 			<th>
 				Delete
 			</th>
 		</thead>
 			<tbody>
 				@if(count($hotels)>0)
 				
 				@foreach($hotels as $hotel)
 				<tr>
 					<td>
 					<img src="{{url($hotel->featured)}}" alt="ok" height="70px" width="90px">
 				</td>
 				<td>{{$hotel->name}}</td>
 				<td>
						{{$hotel->address}}
 				</td>
 				<td>
 					
						
							<a href="{{route('hotel.room.ok',['id'=>$hotel->id])}}" name="room" class="btn btn-success">
								Room
							</a>
					
 				</td>
 				<td>
 				 <a href="{{route('hotels.edit',['id'=>$hotel->id])}}" class="btn btn-xs btn-info" > Edit </a> 
 			</td>
 			<td>
 				<a  class="btn btn-xs btn-danger" href="{{route('hotels.delete',['id'=>$hotel->id])}}"> Trash </a>
 			</td>
 				</tr>
 				

 				@endforeach
 			@else
 			<tr>
 					<th colspan="5" class="text-center">
 						No post
 						</th>
 					
 				</tr>
 				@endif
 			</tbody>


 			</table>	
 			</div>
 			
 		</div>
 		

@stop