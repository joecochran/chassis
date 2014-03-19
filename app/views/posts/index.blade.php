@extends('layouts.frontend')

@section('alternate')
<link rel="alternate" type="application/atom+xml" title="{{ $settings->sitename }}" href="/blog/feed">
@stop
@section('rightmenu')
<div class="item"><a href="{{ url('blog/feed') }}" target="_blank"><i class="icon orange link rss sign"></i></a></div>
@stop
@section('main')
<div class="container">
    <div class="ui stackable grid">
        <div class="twelve wide column" role="main" itemscope itemprop="mainContentOfPage" itemtype="http://schema.org/Blog">
            @if(isset($category))
            <div class="ui basic segment pagehead">
                <h1 class="ui header">{{ $category->name }}</h1>
            </div>
            @endif
            @if($posts->count())
                @foreach ($posts as $post)
                <article class="ui vertical segment" itemscope itemprop="blogPost" itemtype="http://schema.org/BlogPosting">
                    <div class="ui basic segment">
                        <header>
                            <meta itemprop="inLanguage" content="{{ $settings->lang }}"/>
                            <a href="{{ URL::to('blog/'.$post->slug) }}"><h2 class="ui header" itemprop="headline">{{ $post->title }}</h2></a>
                            <div class="ui small segment">
                                <span><i class="folder icon" title="Category"></i><a href="{{ url('blog/category/'.strtolower($post->category->name)) }}">{{ $post->category->name }}</a></span>
                                @if($post->tags->count())
                                <span style="margin-left:2em">
                                    <i class="icon tags" title="Tags"></i>
                                    @foreach($post->tags as $tag)
                                    <a href="{{ url('blog/tag/'.replace_space($tag->name)) }}" rel="tag"><span itemprop="keywords">{{ $tag->name }}</span></a>
                                    @endforeach
                                </span>
                                @endif
                                <span style="margin-left:2em">
                                    <i class="icon calendar" title="Date"></i>
                                    <time datetime="{{ date('Y-m-d',strtotime($post->created_at)) }}" pubdate>{{ date('l, F jS, Y',strtotime($post->created_at)) }}</time>
                                </span>
                            </div>
                            @if(isset($post->banner))
                            <img itemprop="image" height="320" width="680" class="ui image" src="{{ url('img/'.$post->banner) }}" alt="{{ $post->banner_alt }}" />
                            @endif
                        </header>
                        <div class="articlebody" itemprop="articleBody">
                            {{ $post->content }}
                        </div>
                    </div>
                </article>
                @endforeach
                <div class="blog-pager">
                    {{ $posts->links() }}
                </div>
            @else
                <div class="ui message">
                    <div class="header">We're sorry</div>    
                    <p>No posts found that match your criteria.</p>
                </div>
            @endif
        </div>
        <div class="four wide column">
            @include('layouts.inc.blog-sidebar')
        </div>
    </div>
</div>
@stop
