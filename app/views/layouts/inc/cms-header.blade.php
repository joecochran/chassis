@if(Auth::check())
<header class="ui fixed inverted main menu">
    <div class="container">
        <div class="menu">
            <span class="item hidden"></span>
            <a class="item {{ set_active('admin') }}" href="{{ url('admin') }}">
                <i class="dashboard orange icon"></i>
                Sitename
            </a>
            <a class="{{ set_active('pages') }} item" href="{{ url('pages') }}">
                <i class="text file outline orange icon"></i>
                Pages
            </a>
            <a class="{{ set_active('posts') }} item" href="{{ url('posts') }}">
                <i class="rss orange icon"></i>
                Posts
            </a>
            <a class="{{ set_active('settings') }} item" href="{{ url('settings') }}">
                <i class="settings orange icon"></i>
                Settings
            </a>
            <a class="{{ set_active('users') }} item" href="{{ url('users') }}">
                <i class="users orange icon"></i>
                Users
            </a>
            <div class="right menu">
                <div class="ui dropdown item user-menu">
                    <img class="ui avatar image" src="{{ get_gravatar($currentUser->email) }}" alt="" />{{ $currentUser->username }}<i class="dropdown icon"></i>
                    <div class="menu ui transition hidden">
                        <a class="item" href="{{ url('users/'.$currentUser->id.'/edit') }}">Account</a>
                        <a class="item" href="{{ url('logout') }}">Logout</a>
                    </div>
                </div> 
            </div>
        </div>
    </div>
</header>
@endif
