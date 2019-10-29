@extends('layouts.app')

@section('title', 'Index')

@section('content')
<!-- container -->
<div class="container">
	<a href="{{ url()->previous() }}" class="btn btn-primary">Back</a>
	<!-- row -->
	<div class="row">
		 <div class="col-md-12">
		 	<h3 class="text-center">Current Listings</h3>
			 <table class="table table-bordered table-hover">
				<thead class="thead-light">
					<tr>
						<th scope="col">Address</th>
						<th scope="col">City</th>
						<th scope="col">State</th>
						<th scope="col">Listing Firm</th>
						<th scope="col">Pirce</th>
						<th scope="col">Square Feet</th>
						<th scope="col">Rooms</th>
						<th scope="col">Bedrooms</th>
						<th scope="col">Bathrooms</th>
						<th scope="col">Year Built</th>
						<th scope="col">Schools</th>
						<th scope="col">Partial ID</th>
						<th scope="col">Deed Book</th>
						<th scope="col">Page</th>
					</tr>
				</thead>
				<tbody> 
					@foreach($listings as $listing)
				 		@if($user->id == $listing->user_id)

				{{-- <h4 style="margin-left:8px;">My Links</h4> --}}				
			 		
				 			 <tr>		 		
				 				<td>{{ $listing->address }}</td>
				 				<td>{{ $listing->city }}</td>
				 				<td>{{ $listing->state }}</td>
				 				<td>{{ $listing->listing_firm }}</td>
				 				<td>{{ $listing->price }}</td>
				 				<td>{{ $listing->sq_feet }}</td>
				 				<td>{{ $listing->rooms }}</td>
				 				<td>{{ $listing->bedrooms }}</td>
				 				<td>{{ $listing->bathrooms }}</td>
				 				<td>{{ $listing->yr_built }}</td>
				 				<td>{{ $listing->schools }}</td>
				 				<td>{{ $listing->partial_id }}</td>
				 				<td>{{ $listing->deed_book }}</td>
				 				<td>{{ $listing->page }}</td>				 				
							</td>
					 		 </tr> 
				 		@endif
			 		@endforeach
			 				 	
			 	 </tbody> 
		 	</table>
		</div>
	</div>
</div><!-- /container -->
@stop