@extends('layouts.frontend')


@section('main')
<div class="container">
    <div class="ui stackable grid">
        <div class="four wide column">
            @include('layouts.inc.blog-sidebar')
        </div>
        <div class="twelve wide column">
            @if(isset($category))
            <div class="ui basic segment pagehead">
                <h1 class="ui header">{{ $category->name }}</h1>
            </div>
            @endif
            @foreach ($posts as $post)
            <article class="ui vertical segment">
                <header class="ui basic segment">
                    <h2 class="ui header"><a href="{{ URL::to('blog/'.$post->slug) }}">{{ $post->title }}</a></h2>
                    <div class="ui small segment">
                        <span><i class="folder icon"></i><a href="">{{ $post->category->name }}</a></span>
                        @if($post->tags->count())
                        <span style="margin-left:2em">
                            <i class="icon tags"></i>
                            @foreach($post->tags as $tag)
                            <span><a href="">{{ $tag->name }}</a></span>
                            @endforeach
                        </span>
                        @endif
                        <span style="margin-left:2em">
                            <i class="icon calendar"></i>
                            <time>{{ date('d.m.Y',strtotime($post->created_at)) }}</time>
                        </span>
                    </div>
                    @if(isset($post->banner))
                    <img class="ui image" src="{{ $post->banner }}" alt="" />
                    @endif
                </header>
                <main class="ui basic segment">
                {{ $post->content }}
                </main>
                <footer class="ui basic segment">
                    <i class="icon black link linkedin"></i>
                    <i class="icon black link twitter"></i>
                    <i class="icon black link facebook"></i>
                    <i class="icon black link google plus"></i>
                    <i class="icon black link mail"></i>
                </footer>
            </article>
            @endforeach
            <div class="blog-pager">
                {{ $posts->links() }}
            </div>
        </div>
    </div>
</div>
@stop
