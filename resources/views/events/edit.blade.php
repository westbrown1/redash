@extends('layouts.app')

@section('title', 'Edit Events')

@section('content')
<!-- container -->
<div class="container">
	 <a href="{{ route('events.index') }}" class="btn btn-primary" style="margin-top: 15px;">Back</a>
	 <div class="row">
	 	<div class="col-md-6 offset-md-3">	
	 		
	 		<h2 class="text-center">Edit Your Event</h2>	
			{!! Form::model($event, ['route' => ['events.update', $event->id], 'method' => 'PUT', 'files' => true]) !!}
				{{Form::label('title', 'Name of Event:')}}
				{{Form::text('title', null, ['class' => 'form-control', 'required' => ''])}}

				{{Form::label('start_date', 'Start Date:')}}
				{{Form::text('start_date', null, ['class' => 'form-control', 'required' => ''])}}

				{{Form::label('end_date', 'End Date:')}}
				{{Form::text('end_date', null, ['class' => 'form-control', 'required' => ''])}}

				{{Form::submit('Edit event', ['class' => 'btn btn-primary', 'style' => 'margin-top: 15px;'])}}
				
			{!! Form::close() !!}
	 	</div>
	 </div>
</div><!-- /container -->
@stop