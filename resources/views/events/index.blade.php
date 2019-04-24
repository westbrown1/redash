@extends('layouts.app')

@section('title', 'Events')

@section('content')

	<div class="container">
		<a href="{{ url()->previous() }}" class="btn btn-primary" style="margin-top: 15px;">Back</a>

		<div class="row">
			<div class="col-md-12">
				<h3 class="text-center">Edit Events</h3>
				<table class="table">
					 <tbody>
			 					 						 
					 	@foreach($events as $event)
					 		@if($user->id == $event->user_id)

					 			 <tr>
					 				<td><h4>{{ $event->title }}</h4>
					 				</td>
					 				<td><a href="{{ route('events.edit', $event->id) }}" class="btn btn-sm btn-warning">Edit Event</a></td>
						 			<td><a href="{{ route('events.destroy', $event->id) }}" class="btn btn-sm btn-danger">Delete Event</a></td>
									</td>
						 		 </tr>

					 		@endif
			 			@endforeach	
			 				
				 	 </tbody> 
		 		</table>  
			</div>
		</div>
	</div>
@stop