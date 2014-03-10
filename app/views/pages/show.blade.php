@extends('layouts.frontend')

@section('meta_description', strip_tags($page->description))

@section('main')
<div class="container">
    <article class="ui basic segment">
        <h1>{{{ $page->title }}}</h1>
        {{ $page->content }}
    </article>
</div>
@stop
