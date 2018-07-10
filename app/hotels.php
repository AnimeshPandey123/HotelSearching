<?php

namespace App;

use App\User;
use App\room;
use Laravel\Scout\Searchable;
use Illuminate\Database\Eloquent\Model;

class hotels extends Model
{
  protected $fillable=['name','address','phone','featured','numberofrooms','description','rating','price'];


   public function  users()
   {
   	return $this->belongsToMany(User::class)
    ->withTimestamps();
   }
   public function rooms()
   {
    return $this->hasOne(room::class,'hotels_id');
   }
    public function scopeSearch($query, $s)
    {
    	return $query->where([
    		['address','like','%'.$s['address'].'%'],
    		['numberofrooms','>=',$s['room']]
    	]);
    }

   
}
