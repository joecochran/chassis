            <aside class="ui fluid vertical secondary menu blog-sidebar">
                <p>Welcome to Barton's Community Archive</p>
                <h3 class="header item"><i class="folder orange icon"></i> Categories</h3>
                <a href="{{ url('blog') }}" class="item">All <div class="ui small label">{{ $totalPosts }}</div></a>
                @foreach($categories as $category)
                @if($category->posts()->count())
                <a href="{{ url('blog/category/'.strtolower($category->name)) }}" class="item{{ set_active('blog/category/'.strtolower($category->name)) }}">{{ $category->name }} <div class="ui small label">{{ $category->posts()->count() }}</div></a>
                @endif
                @endforeach
                <h3 class="header item"><i class="tag orange icon"></i> Tags</h3>
                @foreach ($tags as $tag)
                @if($tag->posts->count())
                <a class="item {{ set_active('blog/tag/'.replace_space($tag->name)) }}" href="{{ url('blog/tag/'.replace_space($tag->name)) }}">{{ $tag->name }} <div class="ui small label">{{ $tag->posts->count() }}</div></a>
                @endif
                @endforeach
                <h3 class="header item"><i class="archive orange icon"></i> Archive</h3>
                @foreach($archive as $year => $months)
                <div class="item">
                    <a href="{{ url('blog/archive/'.$year) }}">{{ $year }}</a>
                    <div class="menu">
                        @foreach(array_unique($months) as $month) 
                        <a class="item" href="{{ url('blog/archive/'.$year.'/'.$month) }}">{{ date("F", mktime(0, 0, 0, $month, 10)) }}</a>
                        @endforeach
                    </div>
                </div>
                {{-- <a class="item" href="{{ url('blog/archive/'.$month) }}"><?=$title?></a>--}}
                @endforeach
            </aside>
