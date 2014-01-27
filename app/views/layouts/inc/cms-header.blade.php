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
            <div class="right menu">
                <div class="ui dropdown item user-menu">
                    <?php 
                        $email = trim(Auth::user()->email);
                        $hash = md5($email);
                        $gravatar_url = 'http://www.gravatar.com/avatar/'.$hash.'?s=40';
                    ?>
                    <img class="ui avatar image" src="{{ $gravatar_url }}" alt="" />{{ Auth::user()->username }}<i class="dropdown icon"></i>
                    <div class="menu ui transition hidden">
                        <a class="item" href="">Logout</a>
                    </div>
                </div> 
            </div>
        </div>
    </div>
</header>
