@extends('layouts.frontend')

@section('meta_description', strip_tags($page->description))

@section('main')
  <h1>{{{ $page->title }}}</h1>
  <article>
  {{ $page->content }}
  </article>
@stop
