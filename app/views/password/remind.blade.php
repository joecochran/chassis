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

<div class="container">

    <div class="row">
        <div class="col-md-offset-4 col-md-4">
    {{ Form::open(['class'=>'panel panel-default login-form']) }}
        <div class="panel-heading">
            <h1 class="panel-title">Need to reset your password?</h1>
        </div>
        <div class="panel-body">
            <div class="form-group">
                {{ Form::label('email', 'Email Address') }}<br>
                {{ Form::email('email', '',['class'=>'form-control', 'required'=>true]) }}
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
