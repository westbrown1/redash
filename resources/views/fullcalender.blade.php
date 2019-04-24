@extends('layout')

@section('style')
<link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fullcalendar/2.2.7/fullcalendar.min.css"/>
@endsection

@section('content')

<nav class="navbar navbar-default">
    <div class="container">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="/">redash</a>
        </div>
        <div id="navbar" class="collapse navbar-collapse">
            <ul class="nav navbar-nav">
                <li><a href="{{ route('dashboards.index') }}">Dashboard</a></li>
                <li><a href="{{ route('events.index') }}">Edit Database Events</a></li>
            </ul>
        </div><!--/.nav-collapse -->
    </div>
</nav>

<div class="container">
<br>
            <div class="panel panel-primary">

             <div class="panel-heading text-center">Event Calendar</div>

              <div class="panel-body">    

                   {!! Form::open(array('route' => ['events.store', $user->id],'method'=>'POST','files'=>'true')) !!}
                    <div class="row">
                       <div class="col-xs-12 col-sm-12 col-md-12">
                          @if (Session::has('success'))
                             <div class="alert alert-success">{{ Session::get('success') }}</div>
                          @elseif (Session::has('warnning'))
                              <div class="alert alert-danger">{{ Session::get('warnning') }}</div>
                          @endif

                      </div>

                      <div class="col-xs-4 col-sm-4 col-md-4">
                        <div class="form-group">
                            {!! Form::label('title','Event Name:') !!}
                            <div class="">
                            {!! Form::text('title', null, ['class' => 'form-control']) !!}
                            {!! $errors->first('title', '<p class="alert alert-danger">:message</p>') !!}
                            </div>
                        </div>
                      </div>

                      <div class="col-xs-3 col-sm-3 col-md-3">
                        <div class="form-group">
                          {!! Form::label('start_date','Start Date:') !!}
                          <div class="">
                          {!! Form::date('start_date', null, ['class' => 'form-control']) !!}
                          {!! $errors->first('start_date', '<p class="alert alert-danger">:message</p>') !!}
                          </div>
                        </div>
                      </div>

                      <div class="col-xs-3 col-sm-3 col-md-3">
                        <div class="form-group">
                          {!! Form::label('end_date','End Date:') !!}
                          <div class="">
                          {!!   Form::date('end_date', null, ['class' => 'form-control']) !!}
                          {!!   $errors->first('end_date', '<p class="alert alert-danger">:message</p>') !!}
                          </div>
                        </div>
                      </div>

                      <div class="col-xs-1 col-sm-1 col-md-1 text-center"> &nbsp;<br/>
                      {!! Form::submit('Add Event',['class'=>'btn btn-primary']) !!}
                      </div>
                    </div>
                   {!! Form::close() !!}

             </div>
            </div>

    <div class="row">
        <div class="col-md-8 col-md-offset-2">
        	<div class="panel panel-default">
                <div class="panel-heading">Full Calendar</div>
                  <div class="panel-body">
                    {!! $calendar->calendar() !!}
                </div>
            </div>
        </div>
    </div>
</div>

@endsection

@section('script')
<script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.9.0/moment.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/fullcalendar/2.2.7/fullcalendar.min.js"></script> 

{!! $calendar->script() !!}
@endsection