@extends('layouts.default')

@section('main')
<div class="container">
    <div class="row">
        <div class="col-md-offset-4 col-md-4">
            {{ Form::open(array('route' => 'sessions.store', 'class' => "panel panel-default login-form")) }}
                <div class="panel-heading">
                    <h1 class="panel-title">Login</h1>
                </div>
                <div class="panel-body">
                    <div class="form-group">
                    {{ Form::label('email', 'Email') }}
                    {{ Form::email('email','', array('class'=>'form-control')) }}
                    </div>
                    <div class="form-group">
                    {{ Form::label('password', 'Password') }}
                    {{ Form::password('password', array('class'=>'form-control')) }}
                    </div>
                </div> 
                <div class="panel-footer clearfix">
                  <p>{{ link_to('password/remind', 'Forgot your password?') }} {{ Form::submit('Submit',array('class'=>'btn btn-primary pull-right')) }}</p> 
                </div>
            {{ Form::close() }}
        </div>
    </div>
</div>

@stop
