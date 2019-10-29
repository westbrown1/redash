@extends('layouts.app')

@section('title', 'Dashboard')

@section('content')

<!-- container -->
<div class="container">	
		<div class="row">	
		<div class="col-md-4">
			<h2 style="padding-top: 20px;">{{ $user->name }}'s Dashboard</h2>
		</div>		
			<!-- col-md-3 col-md-offset-8 -->
			<div class="col-md-3 offset-md-5">
				 <a href="{{ route('messages.create') }}" class="btn btn-primary" alt="send a message button">Send a Message <span class="glyphicon glyphicon-envelope"></span></a>
			</div><!-- /col-md-3 col-md-offset-8 -->
		</div>
<br><br>
	<div class="row">
		<div class="col-md-3">
			<a href="{{ url('map') }}">Map of Your Current Location</a><br><br>
			<a href="{{ url('example') }}">Wilmington Cluster Map</a>
		</div>
		
	 	<div class="col-md-3 offset-md-6">
	 		<h5>Your Agent is West Brown</h5>
	 		<a href="mailto:lawsonsdad@gmail.com" style="padding-left:40px;"><img src="{{ asset('images/7d02a75dd955c4d676cee1432a589433-bpfull.jpg') }}" height="120px" width="auto"alt="photo of West Brown"></a><br>
	 		<a href="tel:910-200-1391" style="padding-left: 33px;">Cell - 910-200-1391</a><br>
	 		<a href="mailto:lawsonsdad@gmail.com" style="padding-left: 63px;">email West</a>	 		
	 	</div>	 		
	 </div><!-- row -->
<!-- row -->
<div class="row">
	<div class="col-md-12">
		<a href="{{ route('listings.create') }}" class="btn btn-success">Create Listing</a>
	
		<a href="{{ route('listings.index') }}" class="btn btn-primary">CurrentListings</a>
	</div>
	 
</div><!-- /row -->
</div><!-- /container -->

@stop