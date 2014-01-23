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
    <div class="page-header">
        <h1>Edit Page</h1>
    </div>
    {{ Form::model($page, array('method' => 'PATCH', 'route' => array('pages.update', $page->id),'class'=>'panel panel-default')) }}
        <div class="panel-body">
            <div class="form-group">
                {{ Form::label('title', 'Title:') }}
                {{ Form::text('title',$page->title,array('class'=>'form-control')) }}
            </div>
            <div class="form-group">
                {{ Form::label('slug', 'URL Slug:') }}
                {{ Form::text('slug',$page->slug,array('class'=>'form-control')) }}
            </div>

            <div class="form-group">
                {{ Form::label('description', 'Description:') }}
                {{ Form::textarea('description',$page->description,array('class'=>'form-control', 'rows'=>4)) }}
            </div>

            <div class="form-group">
                {{ Form::label('content', 'Content:') }}
                {{ Form::textarea('content',$page->content,array('class'=>'ckeditor')) }}
            </div>
        </div>

        <div class="panel-footer">
          {{ Form::submit('Update', array('class' => 'btn btn-info')) }}
          {{ link_to_route('pages.show', 'Cancel', $page->id, array('class' => 'btn')) }}
        </div>
    {{ Form::close() }}
</div>

@stop
