<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta type="description" content="@yield('meta_description', 'temp default')"/>
    <title>{{{ $page->title }}} - Site Title</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    {{-- OG and Card Data here --}}


    {{ HTML::style('//fonts.googleapis.com/css?family=Source+Sans+Pro:400,700|Open+Sans:300italic,400,300,700') }}
    {{ HTML::style(asset('css/main'.set_min().'.css')) }}

    {{-- Only modernizr at the top --}}
    {{ HTML::script('js/modernizr-2.6.2.min.js') }}
</head>
<body>
    <header class="ui menu">
        <nav>
                <li class="item"><strong>Site Title</strong></li>
                @foreach($pages as $pagex)
                <li class="{{ set_active($pagex->slug) }} item">{{ link_to($pagex->slug, $pagex->title) }}</li>
                @endforeach
                @if(Auth::check())
                <li class="item">{{ link_to('admin', 'Admin') }}</li>
                @endif
        </nav>
    </header>

    <main>
        @yield('main')
    </main>

    <footer class="ui secondary segment small">
        <p><small>Copyright &copy; {{ date('Y') }} Sitename all rights reserved.</small></p>
    </footer>
    {{-- Scripts at the bottom --}}
    {{ HTML::script(asset('js/main'.set_min().'.js')) }}


    @if(is_production())
    <script>
        (function(b,o,i,l,e,r){b.GoogleAnalyticsObject=l;b[l]||(b[l]=
        function(){(b[l].q=b[l].q||[]).push(arguments)});b[l].l=+new Date;
        e=o.createElement(i);r=o.getElementsByTagName(i)[0];
        e.src='//www.google-analytics.com/analytics.js';
        r.parentNode.insertBefore(e,r)}(window,document,'script','ga'));
        ga('create','UA-XXXXX-X');ga('send','pageview');
    </script>
    @endif
</body>
</html>
