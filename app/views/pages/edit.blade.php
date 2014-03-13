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
    <h1 class="ui dividing header">Edit Page</h1>
    <div class="ui grid">
        <div class="four wide column">
            <div class="ui secondary vertical pointing menu">
                <a class="active item">Meta</a>
                <a class="item">SEO</a>
                <a class="item">Content</a>
            </div>
        </div>
        <div class="twelve wide column">
            {{ Form::model($page, array('method' => 'PATCH', 'route' => array('pages.update', $page->id),'class'=>'ui form', 'files' => 'true')) }}
            <div class="ui blue segment" style="margin-top:0;">
                <h3 class="ui header">Meta</h3>
                <div class="field">
                    {{ Form::label('title', 'Title:') }}
                    {{ Form::text('title',$page->title,array('class'=>'form-control')) }}
                </div>
                <div class="field">
                    <label for="slug">URL Slug: {{ info_icon("Page will be located at ".url('slug')) }}</label> 
                    {{ Form::text('slug',$page->slug,array('class'=>'form-control')) }}
                </div>

                <div class="field">
                    <label for="description">Description: {{ info_icon("No more than 160 characters.") }}</label>
                    {{ Form::textarea('description',$page->description,array('class'=>'form-control', 'rows'=>4)) }}
                </div>
            </div>
            <div class="ui blue segment">
                <div class="field">
                    {{ Form::label('content', 'Content:') }}
                    {{ Form::textarea('content',$page->content,array('class'=>'ckeditor')) }}
                </div>
                <div class="ui small buttons">
                    {{ Form::submit('Update', array('class' => 'ui blue button')) }}
                    <a href="{{ url('pages') }}" class='ui red button'>Cancel</a>
                </div>
            </div>
            {{ Form::close() }}
        </div>
    </div>
</div>

@stop
