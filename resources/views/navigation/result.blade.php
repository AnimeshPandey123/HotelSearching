@extends('layouts.newhome')
@section('content')

 
       <div class="container">
           
                        
     <div class="row">
    @if ($hotels->isEmpty())
    <div class="card">
       <label>There is no such hotels</label>  
    </div>
        @elseif(is_array($hotels) || is_object($hotels))
        
            @foreach($hotels as $hotel)

            <div class="card"> 
            <img src="{{url($hotel->featured)}}" style="width:150px;float:left;height:150px;"><br>
           
         <!--  <button href="{{route('hotel.room',['hotelid'=>$hotel->id])}}" class="btn btn-info" style="font-size:0.9em;float:left;width:150px;"  data-toggle="modal" data-target="#myModal">
                <i class="fa fa-image"></i>&nbsp;
                View Gallery
            </button> -->
            <div style="margin-left:200px;float:left;margin-top:-210px;">    
                <span style="font-size:2em;font-weight:bold;">{{$hotel->name}},</span>
                <span style="font-size:1.5em;margin-left:10px;font-style:italic;">{{$hotel->address}}</span>
                <span class="stars">{{$hotel->rating}}</span><br>
                <a href="{{route('hotels.new.book',['hotelid'=>$hotel->id])}}" class="btn btn-success" style="float:right;box-shadow:0px 0px 10px #b5b5b5;">
                    <i class="fa fa-bookmark"></i>&nbsp;
                    Book Now | <span style="font-size:0.8em;">Rs.{{$hotel->price}}/day</span>
                </a>
                <span style="font-size:1em;">
                    <i class="fa fa-phone"></i>&nbsp;
                    {{$hotel->phone}} 
                </span><br><br><br>
                <span> {{$hotel->description}} </span>
            </div>
        </div>

        @yield('popup')
            
                
    
            @endforeach
        
        
        @else
        <label>There is no such thing</label>
        @endif
                                                   
                              
                    </div>
               
            </div>
@endsection