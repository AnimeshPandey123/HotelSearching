<?php

namespace App;

use App\hotels;
use Illuminate\Database\Eloquent\Model;

class room extends Model
{
	protected $fillable=
	[
		'featured1','featured2','featured3','featured4','hotels_id'
	];
    
    public function hotel()
    {
    	return $this->belongsTo(hotels::class);
    }
}
