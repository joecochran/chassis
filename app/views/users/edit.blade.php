@extends('layouts.default')

@section('main')
<div class="ui segment pagehead">
    <div class="container">
        <h1 class="ui header">
            <img class="ui avatar image pull-right" src="{{ get_gravatar($user->email) }}" alt="" />
            <div class="content">
                {{ $user->fullname }}
                <div class="sub header">{{{ $user->username }}}</div>
            </div>
        </h1>
    </div>
</div>
<div class="container">
    {{ Form::model($user, array('method' => 'PATCH', 'route' => array('users.update', $user->id),'class'=>'ui form segment')) }}
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
        </div>
        <div class="field">
            {{ Form::label('role', 'Role') }}
            <div class="ui dropdown selection">
                {{ Form::hidden('role', $user->role) }}
                <div class="default text">Role</div>
                <i class="dropdown icon"></i>
                <div class="menu">
                    <div class="item" data-value="0">Administrator</div>
                    <div class="item" data-value="1">Editor</div>
                </div>
            </div>
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
            {{ Form::submit('Update', array('class' => 'ui button')) }}
            <a href="{{ url('users') }}" class='ui red button'>Cancel</a>
        </div>
    {{ Form::close() }}
</div>
@stop

