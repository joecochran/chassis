@extends('layouts.default')

@section('alerts')
@parent

@if ($errors->any())
	<ul>
		{{ implode('', $errors->all('<li class="error">:message</li>')) }}
	</ul>
@endif
@stop

@section('main')
<div class="container">
    <h1>Create Setting</h1>
    {{ Form::open(array('route' => 'settings.store', 'class' => 'ui form blue segment')) }}
        <div class="field">
            {{ Form::label('name', 'Name') }}
            {{ Form::text('name','',array('class'=>'form-control')) }}
        </div>
        <div class="field">
            {{ Form::label('slug', 'Slug') }}
            {{ Form::text('slug','',array('class'=>'form-control')) }}
        </div>
        <div class="field">
            {{ Form::label('value', 'Value') }}
            {{ Form::textarea('value','',array('class'=>'form-control', 'rows'=>4)) }}
        </div>
        {{ Form::submit('Submit', array('class' => 'ui blue button')) }}
    {{ Form::close() }}
</div>
@stop


