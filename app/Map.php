<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Map extends Model
{
 	use Notifiable;

        /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'address', 'lat', 'long',
    ];

   public function user()
    {
    	return $this->belongsTo('App\User');
    }
    
}
