@extends('layouts.default')

@section('main')
<div class="container">
    <div class="ui basic segment">
        <h1 class="ui header">Create User</h1>
    </div>
    {{ Form::open( array('route' => 'users.store', 'class'=>'ui form blue segment')) }}
        <div class="field">
            {{ Form::label('fullname', 'Name') }}
            {{ Form::text('fullname','',array('class'=>'form-control', 'placeholder'=>'Full Name')) }}
            <div class="ui divider"></div>
        </div>
        <div class="field">
            {{ Form::label('username', 'Username') }}
            {{ Form::text('username','',array('class'=>'form-control', 'placeholder'=>'Username')) }}
            <div class="ui divider"></div>
        </div>
        <div class="field">
            {{ Form::label('email', 'Email') }}
            {{ Form::email('email','',array('class'=>'form-control', 'placeholder'=>'Email address')) }}
            <div class="ui divider"></div>
        </div>
        <div class="field">
            {{ Form::label('password', 'Password' ) }}
            {{ Form::password('password', array('placeholder'=>'Password')) }}
        </div>
        <div class="field">
            {{ Form::label('password_confirm', 'Confirm Password') }}
            {{ Form::password('password_confirmation', array('placeholder'=>'Confirm Password')) }}
        </div>
            {{ Form::submit('Update', array('class' => 'ui blue button small')) }}
    {{ Form::close() }}
</div>
@stop

