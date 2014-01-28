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
    <h1 class="ui header">Edit Page</h1>
    {{ Form::model($page, array('method' => 'PATCH', 'route' => array('pages.update', $page->id),'class'=>'ui form blue segment')) }}
        <div class="field">
            {{ Form::label('title', 'Title:') }}
            {{ Form::text('title',$page->title,array('class'=>'form-control')) }}
        </div>
        <div class="field">
            {{ Form::label('slug', 'URL Slug:') }}
            {{ Form::text('slug',$page->slug,array('class'=>'form-control')) }}
        </div>

        <div class="field">
            {{ Form::label('description', 'Description:') }}
            {{ Form::textarea('description',$page->description,array('class'=>'form-control', 'rows'=>4)) }}
        </div>

        <div class="field">
            {{ Form::label('content', 'Content:') }}
            {{ Form::textarea('content',$page->content,array('class'=>'ckeditor')) }}
        </div>
        <div class="ui small buttons">
            {{ Form::submit('Update', array('class' => 'ui blue button')) }}
            <div class="or"></div>
            <a href="{{ url('pages') }}" class='ui red button'>Cancel</a>
        </div>
    {{ Form::close() }}
</div>

@stop
