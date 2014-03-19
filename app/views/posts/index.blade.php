@extends('layouts.frontend')


@section('main')
<div class="container">
    <div class="ui stackable grid">
        <div class="four wide column">
            @include('layouts.inc.blog-sidebar')
        </div>
        <div class="twelve wide column" role="main" itemscope itemprop="mainContentOfPage" itemtype="http://schema.org/Blog">
            @if(isset($category))
            <div class="ui basic segment pagehead">
                <h1 class="ui header">{{ $category->name }}</h1>
            </div>
            @endif
            @foreach ($posts as $post)
            <article class="ui vertical segment" itemscope itemprop="blogPost" itemtype="http://schema.org/BlogPosting">
                <header class="ui basic segment">
                    <meta itemprop="inLanguage" content="{{ $settings->lang }}"/>
                    <a href="{{ URL::to('blog/'.$post->slug) }}"><h2 class="ui header" itemprop="headline">{{ $post->title }}</h2></a>
                    <div class="ui small segment">
                        <span><i class="folder icon" title="Category"></i><a href="">{{ $post->category->name }}</a></span>
                        @if($post->tags->count())
                        <span style="margin-left:2em">
                            <i class="icon tags" title="Tags"></i>
                            @foreach($post->tags as $tag)
                            <a href="" rel="tag"><span itemprop="keywords">{{ $tag->name }}</span></a>
                            @endforeach
                        </span>
                        @endif
                        <span style="margin-left:2em">
                            <i class="icon calendar" title="Date"></i>
                            <time datetime="{{ date('Y-m-d',strtotime($post->created_at)) }}" pubdate>{{ date('l, F jS, Y',strtotime($post->created_at)) }}</time>
                        </span>
                    </div>
                    @if(isset($post->banner))
                    <img itemprop="image" class="ui image" src="{{ url('img/'.$post->banner) }}" alt="$post->banner_alt" />
                    @endif
                </header>
                <div class="ui basic segment" itemprop="articleBody">
                {{ $post->content }}
                </div>
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
