            <aside class="ui vertical menu">
                <p>Welcome to Barton's Community Archive</p>
                    <h3 class="header item"><i class="folder icon"></i> Categories</h3>
                    <a href="" class="item">All</a>
                    @foreach($categories as $category)
                    @if($category->posts()->count())
                    <a href="{{ url('blog/category/'.strtolower($category->name)) }}" class="item">{{ $category->name }} <div class="ui label">{{ $category->posts()->count() }}</div></a>
                    @endif
                    @endforeach
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
