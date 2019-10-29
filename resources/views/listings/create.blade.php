@extends('layouts.app')

@section('title', 'Create Listing')

@section('content')

<!-- container -->
<div class="container">
	<a href="{{ url()->previous() }}" class="btn btn-primary">Back</a>
	 <div class="row">
	 
	 	<div class="col-md-6 col-md-offset-3">
	 		
	 		<h3 class="text-center">Create a Listing</h3>
	 		{!! Form::open(['route' => ['listings.store', $user->id], 'method' => 'post', 'files' => true]) !!}
				{{ csrf_field() }}

				{{ Form::label('commission', 'Commission') }}
				{{ Form::text('commission', null, ['class' => 'form-control']) }}<br>

				{{ Form::label('address', 'Property Address') }}
				{{ Form::text('address', null, ['class' => 'form-control']) }}<br>

				{{ Form::label('city', 'City') }}
				{{ Form::text('city', null, ['class' => 'form-control']) }}<br>

				{{ Form::label('state', 'State') }}
				{{ Form::text('state', null, ['class' => 'form-control']) }}<br>

				{{ Form::label('price', 'Price') }}
				{{ Form::text('price', null, ['class' => 'form-control']) }}<br>

				{{ Form::label('listing_firm', 'Firm') }}
				{{ Form::text('listing_firm', null, ['class' => 'form-control']) }}<br>

				{{ Form::label('sq_feet', 'Square Feet') }}
				{{ Form::text('sq_feet', null, ['class' => 'form-control']) }}<br>

				{{ Form::label('rooms', 'Rooms') }}
				{{ Form::text('rooms', null, ['class' => 'form-control']) }}<br>

				{{ Form::label('bedrooms', 'Bedrooms') }}
				{{ Form::text('bedrooms', null, ['class' => 'form-control']) }}<br>

				{{ Form::label('bathrooms', 'Bathrooms') }}
				{{ Form::text('bathrooms', null, ['class' => 'form-control']) }}<br>

				{{ Form::label('yr_built', 'Year Built') }}
				{{ Form::text('yr_built', null, ['class' => 'form-control']) }}<br>

				{{ Form::label('schools', 'Schools') }}
				{{ Form::text('schools', null, ['class' => 'form-control']) }}<br>				

				{{ Form::label('page', 'Page') }}
				{{ Form::text('page', null, ['class' => 'form-control']) }}<br>

				{{ Form::label('deed_book', 'Deed Book') }}
				{{ Form::text('deed_book', null, ['class' => 'form-control']) }}<br>

				{{ Form::label('parcel_id', 'Parcel ID') }}
				{{ Form::text('parcel_id', null, ['class' => 'form-control']) }}<br>

				{{ Form::label('comments', 'Comments') }}
				{{ Form::text('comments', null, ['class' => 'form-control']) }}<br>

				{{Form::submit('Create Listing', ['class' => 'btn btn-primary btn-block', 'style' => 'margin-top: 15px;'])}}				
	 		{!! Form::close() !!}

	 	</div>
	 </div>
</div><!-- /container -->

@stop