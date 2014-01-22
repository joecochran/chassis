@extends('layouts.default')


{{-- Methinks we can move this to the layout --}}
@section('alerts') 
@parent

@if (Session::has('error'))
    <div class="alert alert-danger fade in alert-dismissable top-alert">
        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
        {{ Session::get('error') }}
    </div>
@elseif (Session::has('status'))
    <div class="alert alert-info fade in alert-dismissable top-alert">
        {{ Session::get('status') }}
    </div>
@endif
@stop

@section('main')
<div class="container">
    <div class="row">
        <div class="col-md-offset-4 col-md-4">
    {{ Form::open(['class'=>'panel panel-default login-form']) }}
        <div class="panel-heading">
            <h1 class="panel-title">Enter your new password.</h1>
        </div>
        <input type="hidden" name="token" value="{{ $token }}" />
        <div class="panel-body">
            <div class="form-group">
                {{ Form::label('email', 'Email Address') }}<br>
                {{ Form::email('email', '', ['class'=>'form-control', 'required'=>true]) }}
            </div>
            
            <div class="form-group">
                {{ Form::label('password', 'Password') }}<br>
                {{ Form::password('password', ['class'=>'form-control', 'required'=>true]) }}
            </div>

            <div class="form-group">
                {{ Form::label('password_confirmation', 'Password Confirmation') }}<br>
                {{ Form::password('password_confirmation', ['class'=>'form-control', 'required'=>true]) }}
            </div>
        </div>

        <div class="panel-footer clearfix">
            {{ Form::submit('Reset',['class'=>'btn btn-primary pull-right']) }}
        </div>
    {{ Form::close() }}

</div>
</div>
</div>

@stop
