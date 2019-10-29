<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Listing;
use App\User;
use Auth;

class ListingController extends Controller
{
    public function __construct() {
        $this->middleware('auth');
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $user = Auth::user();
        
        $listings = Listing::all();

        return view('listings.index')->withListings($listings)->withUser($user);
//
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $user = Auth::user();
        return view('listings.create')->withUser($user);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $listings = Listing::all();
        $listing = New Listing;
         
   $request->user()->listings()->create([
    'user_id'   => auth()->id(),
    'commission' => request('commission'),
    'address' => request('address'),
    'city' => request('city'),
    'state' => request('state'),
    'price' => request('price'),
    'sq_feet' => request('sq_feet'),
    'rooms' => request('rooms'),
    'bedrooms' => request('bedrooms'),
    'bathrooms' => request('bathrooms'),
    'yr_built' => request('yr_built'),
    'listing_firm' => request('listing_firm'),
    'deed_book' => request('deed_book'),
    'page' => request('page'),
    'parcel_id' => request('parcel_id'),
    'schools' => request('schools'),
    'comments' => request('comments'),    

]);

        return redirect()->route('listings.index')->withListings($listings);
        
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
