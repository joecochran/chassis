@extends('layouts.frontend')


@section('main')
<div class="container">
    <div class="ui stackable grid">
        <div class="four wide column">
            <aside class="ui vertical menu">
                <p>Welcome to Barton's Community Archive</p>
                    <h3 class="header item"><i class="folder icon"></i> Categories</h3>
                    <a class="item" href="">All</a>
                    <a class="item" href="">News &amp; Announcements</a>
                    <h3 class="header item"><i class="tag icon"></i> Subjects</h3>
                    <a class="item" href="">Subject 1</a>
                    <a class="item" href="">Subject 2</a>
                    <a class="item" href="">Subject 3</a>
                    <h3 class="header item"><i class="archive icon"></i> Archive</h3>
                    <div class="item">
                        2012
                        <div class="menu">
                            <a class="item" href="">January</a>
                            <a class="item" href="">February</a>
                        </div>
                    </div>
                </nav>
            </aside>
        </div>
        <div class="twelve wide column">
            <?php foreach ($posts as $post): ?>
            <article class="ui vertical segment">
                <header class="ui basic segment">
                    <h2 class="ui header"><a href="{{ URL::to($post->slug) }}">{{ $post->title }}</a></h2>
                    <div>
                        <span>{{ $post->category_id }}</span> | <time>{{ date('d.m.Y',strtotime($post->created_at)) }}</time>
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
            <?php endforeach?>
            <div class="blog-pager">
                <div class="ui secondary pagination menu">
                    <a class="item">
                        <i class="left arrow icon"></i> Previous
                    </a>
                    <a class="item">1</a>
                    <a class="item">2</a>
                    <a class="item">3</a>
                    <a class="item">4</a>
                    <a class="item">5</a>
                    <a class="item">
                        Next <i class="icon right arrow"></i>
                    </a>
                </div>
            </div>
        </div>
    </div>
</div>
@stop
