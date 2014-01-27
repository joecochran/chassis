<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Riku CMS</title>
    {{ HTML::style('//fonts.googleapis.com/css?family=Source+Sans+Pro:400,700|Open+Sans:300italic,400,300,700') }}
    {{ HTML::style(asset('css/main'.set_min().'.css')) }}

    {{-- Only modernizr at the top --}}
    {{ HTML::script('js/modernizr-2.6.2.min.js') }}
    <style type="text/css">
        body {
        padding-top:50px; 
        }
        .nav-tabs {
            margin-bottom:1em;
        }
        .top-alert {
            position:absolute;
            right: 0;
            top:20px;
            max-width:33%;
            z-index:999;
        }
        .login-form {
            margin-top:20px;
        }
        .container {
            position:relative;
        }
        .jumbotron {
            position:relative;
            overflow:hidden;
        }
    </style>
</head>
<body>
    <header>
    @include('layouts.inc.cms-header')
    </header>
    <main>
        @yield('main')
    </main> 
    <footer>
    
    </footer>
    {{ HTML::script(asset('js/main'.set_min().'.js')) }}
    {{-- <script src="//ajax.googleapis.com/ajax/libs/angularjs/1.2.9/angular.min.js"></script> --}}
    <script type="text/javascript" src="{{ asset('js/ckeditor/ckeditor.js') }}"></script>
</body>
</html>
