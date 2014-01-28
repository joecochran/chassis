@extends('layouts.default')

@section('main')
<div class="container">
    <div class="ui basic segment">
        <h1 class="ui header">Edit User</h1>
    </div>
    {{ Form::model($user, array('method' => 'PATCH', 'route' => array('users.update', $user->id),'class'=>'ui form blue segment')) }}
        <div class="field">
            {{ Form::label('fullname', 'Name') }}
            {{ Form::text('fullname',$user->fullname,array('class'=>'form-control')) }}
            <div class="ui divider"></div>
        </div>
        <div class="field">
            {{ Form::label('username', 'Username') }}
            {{ Form::text('username',$user->username,array('class'=>'form-control')) }}
            <div class="ui divider"></div>
        </div>
        <div class="field">
            {{ Form::label('email', 'Email') }}
            {{ Form::text('email',$user->email,array('class'=>'form-control', 'rows'=>4)) }}
            <div class="ui divider"></div>
        </div>
        <div class="field">
            {{ Form::label('password', 'Password') }}
            {{ Form::password('password') }}
        </div>
        <div class="field">
            {{ Form::label('password_confirm', 'Confirm Password') }}
            {{ Form::password('password_confirmation') }}
        </div>
        <div class="ui small buttons">
            {{ Form::submit('Update', array('class' => 'ui blue button')) }}
            <div class="or"></div>
            <a href="{{ url('users') }}" class='ui red button'>Cancel</a>
        </div>
    {{ Form::close() }}
</div>
@stop

