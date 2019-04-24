@extends('layouts.app')

@section('content')
<!-- container -->
<div class="container">
	<a href="{{ url()->previous() }}" class="btn btn-primary">Back</a>
    @include('messenger.partials.flash')
    
	<!-- row -->
	<div class="row">	    
		<!-- col-md-3 -->
		<div class="col-md-2 offset-md-4">
			 @each('messenger.partials.thread', $threads, 'thread', 'messenger.partials.no-threads')
		</div><!-- /col-md-3 -->
	</div><!-- /row -->
</div><!-- /container -->
@stop