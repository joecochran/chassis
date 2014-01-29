@if(Auth::check())
<header class="ui fixed main menu">
    <div class="container">
        <div class="menu">
            <a class="item {{ set_active('admin') }}" href="{{ url('admin') }}">
                <i class="dashboard icon"></i>
                Sitename
            </a>
            <a class="{{ set_active('pages') }} item" href="{{ url('pages') }}">
                <i class="text file outline icon"></i>
                Pages
            </a>
            <a class="{{ set_active('settings') }} item" href="{{ url('settings') }}">
                <i class="settings icon"></i>
                Settings
            </a>
            <a class="{{ set_active('users') }} item" href="{{ url('users') }}">
                <i class="users icon"></i>
                Users
            </a>
            <div class="right menu">
                <div class="ui dropdown item user-menu">
                    <img class="ui avatar image" src="{{ get_gravatar(Auth::user()->email) }}" alt="" />{{ Auth::user()->username }}<i class="dropdown icon"></i>
                    <div class="menu ui transition hidden">
                        <a class="item" href="{{ url('users/'.Auth::user()->id.'/edit') }}">Account</a>
                        <a class="item" href="{{ url('logout') }}">Logout</a>
                    </div>
                </div> 
            </div>
        </div>
    </div>
</header>
@endif
