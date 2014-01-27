@extends('layouts.default')

@section('main')
<div class="login-container">
    <div class="row">
        <div class="col-md-offset-4 col-md-4">
            {{ Form::open(array('route' => 'sessions.store', 'class' => "ui form login-form")) }}
                <div class="ui top attached segment">
                    <h1 class="ui medium header ">Login</h1>
                </div>
                <div class="ui attached segment">
                    <div class="field">
                    {{ Form::label('username', 'Username') }}
                    <div class="ui left labeled icon input">
                        {{ Form::text('username', '', array('placeholder'=>'Username')) }}
                        <i class="user icon"></i>
                        <div class="ui corner label"><i class="icon asterisk"></i></div>
                    </div>
                    </div>
                    <div class="field">
                        {{ Form::label('password', 'Password') }}
                        <div class="ui left labeled icon input">
                            {{ Form::password('password', array('placeholder'=>'Password')) }}
                            <i class="lock icon"></i>
                            <div class="ui corner label"><i class="icon asterisk"></i></div>
                        </div>
                    </div>
                </div> 
                <div class="ui bottom attached segment">
                  <p><button class='ui right labeled icon blue button'><i class="sign in icon"></i>Login</button> <small>{{ link_to('password/remind', 'Forgot your password?', array('class'=>'forgot-password-link')) }}</small></p> 
                </div>
            {{ Form::close() }}
        </div>
    </div>
</div>

@stop
