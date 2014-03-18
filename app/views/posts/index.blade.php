@extends('layouts.frontend')


@section('main')
<div class="container">
    <div class="ui stackable grid">
        <div class="four wide column">
            @include('layouts.inc.blog-sidebar')
        </div>
        <div class="twelve wide column">
            @foreach ($posts as $post)
            <article class="ui vertical segment">
                <header class="ui basic segment">
                    <h2 class="ui header"><a href="{{ URL::to($post->slug) }}">{{ $post->title }}</a></h2>
                    <div>
                        <span>{{ $post->category->name }}</span> | <time>{{ date('d.m.Y',strtotime($post->created_at)) }}</time>
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
