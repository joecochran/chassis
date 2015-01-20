@if(Auth::check())
<header class="ui fixed main menu">
    <div class="container">
        <div class="menu">
            <a class="item {{ set_active('admin') }}" href="{{ url('admin') }}">
                <i class="dashboard icon"></i>
                <span class="menu-text">Dash</span>
            </a>
            <a class="{{ set_active('pages') }} item" href="{{ url('pages') }}">
                <i class="text file outline icon"></i>
                <span class="menu-text">Pages</span>
            </a>
            <a class="{{ set_active('posts') }} item" href="{{ url('posts') }}">
                <i class="rss icon"></i>
                <span class="menu-text">Posts</span>
            </a>
            <a class="{{ set_active('settings') }} item" href="{{ url('settings') }}">
                <i class="settings icon"></i>
                <span class="menu-text">Settings</span>
            </a>
            <a class="{{ set_active('users') }} item" href="{{ url('users') }}">
                <i class="users icon"></i>
                <span class="menu-text">Users</span>
            </a>
            <div class="right menu">
                <div class="ui dropdown item user-menu">
                    <i class="user icon"></i>
                    <span class="menu-text">{{ $currentUser->username }}</span> <i class="dropdown icon"></i>
                    <div class="menu transition">
                        <a class="item" href="{{ url('users/'.$currentUser->id.'/edit') }}"> <i class="settings icon"></i>  Account</a>
                        <a class="item" href="{{ url('logout') }}"><i class="sign out icon"></i>Logout</a>
                    </div>
                </div> 
            </div>
        </div>
    </div>
</header>
@endif
