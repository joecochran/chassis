@extends('layouts.default')

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
        <div class="ui top attached segment">
            <h1 class="ui medium header">Need to reset your password?</h1>
        </div>
        <div class="ui attached segment">
            <div class="field">
                {{ Form::label('email', 'Email Address') }}<br>
                {{ Form::email('email', '',['class'=>'form-control', 'required'=>true]) }}
            </div>
        </div>
        <div class="ui bottom attached segment">
            {{ Form::submit('Reset',['class'=>'ui button blue small pull-right']) }}
        </div>
    {{ Form::close() }}

</div>
@stop
