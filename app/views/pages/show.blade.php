@extends('layouts.frontend')

@section('meta_description', strip_tags($page->description))

@section('main')
@if($page->banner)
<div class="banner">
    <img src="{{ URL::to('uploads').'/'.$page->banner }}" class="banner-image" alt="" />
</div>
@endif
<div class="container">
    <article class="ui basic segment">
        <h1>{{{ $page->title }}}</h1>
        {{ $page->content }}
    </article>
</div>
@stop
