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
            <div class="ui secondary vertical pointing menu sticky" id="affixed-menu">
                <a class="active item" href="#meta">Meta</a>
                <a class="item" href="#opengraph">OpenGraph</a>
                <a class="item" href="#twitter-cards">Twitter Card</a>
                <a class="item" href="#content">Content</a>
                <div class="item"><div class="ui clearing divider"></div>
                    <div class="ui fluid mini green icon button" id="addSectionButton">
                        <i class="plus icon"></i>
                        Add Section
                    </div>
                </div>
            </div>
        </div>
        <div class="twelve wide column">
            {{ Form::model($page, array('method' => 'PATCH', 'route' => array('pages.update', $page->id),'class'=>'ui form', 'files' => 'true')) }}
            <div id="meta" class="ui blue segment" style="margin-top:0;">
                <h3 class="ui header">Meta</h3>
                {{ segment_collapse() }}
                <div class="collapsable">
                    <div class="field">
                        {{ Form::label('title', 'Page Title:') }}
                        {{ Form::text('title',$page->title,array('class'=>'form-control')) }}
                    </div>
                    <div class="field">
                        <label for="slug">URL Slug: {{ info_icon("Page will be located at ".url('slug')) }}</label> 
                        {{ Form::text('slug',$page->slug,array('class'=>'form-control')) }}
                    </div>
                    <div class="field">
                        {{ Form::label('canonical', 'Canonical URL:') }}
                        {{ Form::text('canonical',$page->canonical,array('class'=>'form-control')) }}
                    </div>

                    <div class="field">
                        <label for="description">Description: {{ info_icon("No more than 160 characters.") }}</label>
                        {{ Form::textarea('description',$page->description,array('class'=>'form-control', 'rows'=>4)) }}
                    </div>
                </div>
            </div>
            <div class="ui blue segment" id="opengraph">
                <h3 class="ui header">
                    OpenGraph
                </h3>
                {{ segment_collapse() }}
                <div class="collapsable">
                    <p class="muted">Each of these will fall back to a meta default if blank.</p>
                    <div class="field">
                        {{ override_checkbox('og_title_override', 'og_title', 'title') }}
                        <label for="og_title">OG:Title: {{ info_icon("Defaults to Page title") }}</label> 
                        {{ Form::text('og_title',isset($page->og_title) ? $page->og_title : $page->title,array('class'=>'form-control', 'disabled'=>'disabled')) }}
                    </div>
                    <div class="field">
                        {{ override_checkbox('og_url_override', 'og_url', 'canonical') }}
                        <label for="og_url">OG:URL: {{ info_icon("Defaults to Canonical URL") }}</label> 
                        {{ Form::text('og_url',isset($page->og_url) ? $page->og_url : $page->canonical,array('class'=>'form-control', 'disabled' => 'disabled')) }}
                    </div>
                    <div class="field">
                        {{ override_checkbox('og_description_override', 'og_description', 'description') }}
                        <label for="og_description" style="float:left">OG:Description: {{ info_icon("Defaults to Description") }} </label> 
                        {{ Form::textarea('og_description',isset($page->og_description) ? $page->og_description : $page->description,array('class'=>'form-control', 'disabled'=>'disabled')) }}
                    </div>
                </div>
            </div>
            <div class="ui blue segment" id="twitter-cards">
                <h3 class="ui header">
                    Twitter Cards
                </h3>
                {{ segment_collapse() }}
                <div class="collapsable">
                    <p class="muted">Each of these will fall back to a meta default if blank.</p>
                    <div class="field">
                        {{ override_checkbox('twitter_title_override', 'twitter_title', 'title') }}
                        <label for="twitter_title">Twitter:Title: {{ info_icon("No more than 70 characters. Defaults to page title") }}</label> 
                        {{ Form::text('twitter_title',isset($page->twitter_title) ? $page->twitter_title : $page->title,array('class'=>'form-control', 'disabled'=>'disabled')) }}
                    </div>
                    <div class="field">
                        {{ override_checkbox('twitter_description_override', 'twitter_description', 'description') }}
                        <label for="twitter_description" style="float:left">Twitter:Description: {{ info_icon("No more than 200 characters. Defaults to description") }} </label> 
                        {{ Form::textarea('twitter_description',isset($page->twitter_description) ? $page->twitter_description : $page->description,array('class'=>'form-control', 'disabled'=>'disabled')) }}
                    </div>
                </div>
            </div>
            <div class="ui blue segment">
                <h3 class="ui header">
                    Page Content
                </h3>
                {{ segment_collapse() }}
                <div class="collapsable">
                    <div class="field">
                        {{ Form::label('content', 'Content:') }}
                        {{ Form::textarea('content',$page->content,array('class'=>'ckeditor')) }}
                    </div>
                </div>
            </div>
            <div class="ui vertical segment">
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
