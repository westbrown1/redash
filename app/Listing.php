<?php

namespace App;

use Illuminate\Database\Eloquent\Model;


class Listing extends Model
{

 /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'user_id', 'address', 'city', 'state', 'commission', 'rooms', 'bedrooms', 'bathrooms',
        'comments', 'parcel_id', 'deed_book', 'page', 'sq_feet', 'schools', 'listing_firm', 'price', 'yr_built'
    ];

    public function users()
    {
        return $this->belongsTo(User::class);
    }    

}
