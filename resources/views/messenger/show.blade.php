@extends('layouts.app')

@section('content')
<!-- container -->
<div class="container">
	<a href="{{ url()->previous() }}" class="btn btn-primary">Back</a><br><br>
    <div class="col-md-6">
        <h1>{{ $thread->subject }}</h1>
        @each('messenger.partials.messages', $thread->messages, 'message')

        @include('messenger.partials.form-message')
    </div>
</div><!-- /container -->
@stop