<?php

namespace App\Http\Controllers;

use App\User;
use App\hotels;
use Illuminate\Http\Request;
use Session;

class UserController extends Controller
{
     public function book(Request $r, $hotelid,$userid)
    {

       $user=User::find($userid);
       $hotel=hotels::find($hotelid);
     //  $ok=$hotel->users();
      // dd($ok);
     //  if(is_object($ok))
    //   {
    //     dd($ok->pivot->user_id);
    //   }
    //   else
    ////   {
     //   dd('no');
    ///   }
     
      

     //  if( $ok->first()->pivot->user_id== $userid )
     //  {
       	//dd("no");
     //   Session::flash('success','You Have already booked this hotel');
     //   return redirect()->back();

     // }
		
       		 $hotel->users()->attach($userid);
           Session::flash('success','You Have succesfully booked this hotel');
       		 return redirect()->back();
       
     		  
      // dd($hotel->users());
     //  return redirect()->back();
    }
    public function newbook($hotelid)
    {
    	$hotel=hotels::find($hotelid);
    	return view('Hotels.book')->with('hotel',$hotel);
    }
    public function index()
    {
      
      return view('hotels.users')->with('users',User::all());
    }
    public function delete($id)
    {
           $user=User::find($id);
        $user->profile->delete();
        $user->delete();
        Session::flash('nope','User deleted');
        return redirect()->back();    
      }
      public function admin($id)
    {
     $user=User::find($id);
     $user->admin=1;
     $user->save();
     Session::flash('success','Successfully users permissions changed');   
     return redirect()->back();
    }
    public function notadmin($id){

        $user=User::find($id);
        $user->admin=0;
        $user->save();
        Session::flash('nope','Succesfully user permissions changed');
        return redirect()->back();
    }
}
