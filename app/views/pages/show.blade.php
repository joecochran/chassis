@extends('layouts.frontend')

@section('meta_description', strip_tags($page->description))

@section('main')
<div class="banner">
    <img src="http://placehold.it/1680x500" class="banner-image" alt="" />
</div>

<article class="ui segment">
<h1>{{{ $page->title }}}</h1>
{{ $page->content }}
</article>
@stop
