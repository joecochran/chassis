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
  <div class="page-header"><h1>Create Page</h1></div>

{{ Form::open(array('route' => 'pages.store', 'class' => 'panel panel-default')) }}
<div class="panel-body">
        <div class="form-group">
            {{ Form::label('title', 'Title:') }}
            {{ Form::text('title', '', array('class'=>'form-control')) }}
        </div>

        <div class="form-group">
            {{ Form::label('description', 'Description:') }}
            {{ Form::textarea('description', '', array('class'=>'form-control','rows'=>4)) }}
        </div>

        <div class="form-group">
            {{ Form::label('content', 'Content:') }}
            {{ Form::textarea('content', '', array('class'=>'ckeditor')) }}
        </div>

  </div>
  <div class="panel-footer">
    {{ Form::submit('Submit', array('class' => 'btn btn-info')) }}
  </div>
{{ Form::close() }}


</div>
@stop


