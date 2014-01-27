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
<div class="login-container">
    {{ Form::open(['class'=>'ui form']) }}
        <div class="ui attached top segment">
            <h1 class="ui medium header">Enter your new password.</h1>
        </div>
        <input type="hidden" name="token" value="{{ $token }}" />
        <div class="ui attached segment">
            <div class="field">
                {{ Form::label('email', 'Email Address') }}<br>
                {{ Form::email('email', '', ['class'=>'form-control', 'required'=>true]) }}
            </div>
            
            <div class="field">
                {{ Form::label('password', 'Password') }}<br>
                {{ Form::password('password', ['class'=>'form-control', 'required'=>true]) }}
            </div>

            <div class="field">
                {{ Form::label('password_confirmation', 'Password Confirmation') }}<br>
                {{ Form::password('password_confirmation', ['class'=>'form-control', 'required'=>true]) }}
            </div>
        </div>

        <div class="ui attached segment bottom">
            {{ Form::submit('Reset',['class'=>'ui blue button pull-right']) }}
        </div>
    {{ Form::close() }}
</div>

@stop
