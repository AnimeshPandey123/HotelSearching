<?php

namespace App\Http\Controllers;

use Session;
use App\User;
use App\room;
use App\hotels;
use Illuminate\Http\Request;

class HotelsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('search');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('hotels.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request,[
            'name'=>'required',
            'featured'=>'required|image',
            'address'=>'required',
            'phone'=>'required',
            'numberofrooms'=>'required',
            'description'=>'required',
            'price'=>'required',
            'rating'=>'required'
        ]);
      $featured=$request->featured;

        $featured_new_name='/' . $request->file('featured')->getClientOriginalName();

        $featured->move('uploads',$featured_new_name);
        $hotels=hotels::create([
            'name'=>$request->name,
            'address'=>$request->address,
            'featured'=>'uploads'.$featured_new_name,
            'phone'=>$request->phone,
            'numberofrooms'=>$request->numberofrooms,
            'description'=>$request->description,
            'rating'=>$request->rating,
            'price'=>$request->price

        ]);
        Session::flash('success','your hotel is created');
        
        return redirect()->route('hotels.create');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\hotels  $hotels
     * @return \Illuminate\Http\Response
     */
    public function show()
    {
       
        return view('hotels.show')->with('hotels',hotels::all());
    }
      public function book(User $user,hotels $hotels)
    {
       
        $users->hotels()->attach($id);
        return redirect()->back();
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\hotels  $hotels
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $hotel=hotels::find($id);
       return view('hotels.edit')->with('hotel',$hotel);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\hotels  $hotels
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, hotels $hotels)
    {
         $this->validate($request,[
            'name'=>'required',
            'address'=>'required',
            'phone'=>'required',
            'numberofrooms'=>'required',
            'description'=>'required'
        ]);
     
         if($request->hasFile('featured'))
         {
              $featured=$request->featured;

             $featured_new_name='/' . $request->file('featured')->getClientOriginalName();

               $featured->move('uploads',$featured_new_name);
               $hotels->featured='uploads'.$featured_new_name;
         }
         $hotels->name=$request->name;
         $hotels->address=$request->address;
         $hotels->phone=$request->phone;
         $hotels->numberofrooms=$request->numberofrooms;
         $hotels->description=$request->description;
         $hotels->save();
         
         Session::flash('success','The hotels was updated');
         return redirect()->back();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\hotels  $hotels
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    { 
        $hotels=hotels::find($id);
        $hotels->delete();
        Session::flash('nope','This hotel was deleted');
        return redirect()->back();
    }
     public function search(Request $request)
    {
         $r = $request->validate([
        'address' => 'required',
        'room' => 'required',
             ]);
             //  $s=$request->hotels;
         $s = array('address' => $request->address, 'room'=> $request->room);
        
       
      /*  $result=hotels::Search($request)->get();*/
      //dd($s);
             $result = hotels::search($s)->get();
         //    $new=$result[0]->rooms;
             //dd($new);
           // dd($new->featured1);
             //dd($result);
            return view('navigation.result')->with('hotels',$result)
                                            ;
      // dd($result);
  
      
   }
   public function room(Request $request,$id)
   {
    $hotels=hotels::find($id)->get();
    $hot=hotels::find($id);

    $h=$hot->rooms;
   // dd($h[0]->featured1);
    return view('includes.popup')->with('hotel',$h)
                                ->with('hotels',$hotels);
   }
   public function roomstore(Request $request,$id)
   {
   //dd(room::all());
     $this->validate($request,[
            'featured1'=>'required|image',
            'featured2'=>'required|image',
            'featured3'=>'required|image',
            'featured4'=>'required|image',
            
        ]);
       
      $featured1=$request->featured1;
      $featured2=$request->featured2;
      $featured3=$request->featured3;
      $featured4=$request->featured4;

     $featured_new_name_1='/' . $request->file('featured1')->getClientOriginalName();
     $featured_new_name_2='/' . $request->file('featured2')->getClientOriginalName();
     $featured_new_name_3='/' . $request->file('featured3')->getClientOriginalName(); 
     $featured_new_name_4='/' . $request->file('featured4')->getClientOriginalName();

        $featured1->move('uploads',$featured_new_name_1);
        $featured2->move('uploads',$featured_new_name_2);
        $featured3->move('uploads',$featured_new_name_3);
        $featured4->move('uploads',$featured_new_name_4);
         $hotels=hotels::find($id);


        $room=room::create([
            'featured1'=>'uploads'.$featured_new_name_1,
            'featured2'=>'uploads'.$featured_new_name_2,
            'featured3'=>'uploads'.$featured_new_name_3,
            'featured4'=>'uploads'.$featured_new_name_4,
            'hotels_id'=>$hotels->id,
            

        ]);

        Session::flash('success','your room is created');

    return redirect()->back();
   }
   public function ok($id)
   {
      // $h=Hotels::find($id);
       //dd($h->rooms->featured1);
        return view('Hotels.popup')->with('hotel',Hotels::find($id));
   }
}
