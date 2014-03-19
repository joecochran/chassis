            <aside class="ui fluid vertical menu">
                <p>Welcome to Barton's Community Archive</p>
                    <h3 class="header item"><i class="folder icon"></i> Categories</h3>
                    <a href="{{ url('blog') }}" class="item{{ set_active('blog') }}">All <div class="ui small label">{{ $totalPosts }}</div></a>
                    @foreach($categories as $category)
                    @if($category->posts()->count())
                    <a href="{{ url('blog/category/'.strtolower($category->name)) }}" class="item{{ set_active('blog/category/'.strtolower($category->name)) }}">{{ $category->name }} <div class="ui small label">{{ $category->posts()->count() }}</div></a>
                    @endif
                    @endforeach
                    <h3 class="header item"><i class="tag icon"></i> Tags</h3>
                    @foreach ($tags as $tag)
                    @if($tag->posts->count())
                    <a class="item {{ set_active('blog/tag/'.replace_space($tag->name)) }}" href="{{ url('blog/tag/'.replace_space($tag->name)) }}">{{ $tag->name }} <div class="ui small label">{{ $tag->posts->count() }}</div></a>
                    @endif
                    @endforeach
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
