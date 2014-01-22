<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Riku CMS</title>
    <link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.0.3/css/bootstrap.min.css" />
    <link rel="stylesheet" href="{{ asset('css/bootstrap-theme.min.css') }}" />
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
    </style>
</head>
<body>
    <header>
        <nav class="navbar navbar-default navbar-fixed-top" role="navigation">
            <div class="container">
                <!-- Brand and toggle get grouped for better mobile display -->
          <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
              <span class="sr-only">Toggle navigation</span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="/admin">Riku CMS</a>
          </div>
          @if(Auth::check())
          <!-- Collect the nav links, forms, and other content for toggling -->
          <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
            <ul class="nav navbar-nav">
              <li class="{{ set_active('pages') }}"><a href="/pages">Pages</a></li>
            </ul>
            <ul class="nav navbar-nav navbar-right">
              <li class="dropdown">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="glyphicon glyphicon-user"></i> {{ Auth::user()->username }} <b class="caret"></b></a>
                <ul class="dropdown-menu">
                  <li><a href="{{ URL::to('logout') }}">Logout</a></li>
                </ul>
              </li>
            </ul>
          </div><!-- /.navbar-collapse -->
          @endif
          </div>
        </nav> 
    </header>
    <div class="container">
    @section('alerts')
        @if(Session::get('flash_message'))
        <div class="alert fade in alert-dismissable top-alert {{ Session::get('message_class') }}">
            <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
            <strong>{{ Session::get('message_strong') }}</strong> {{ Session::get('flash_message') }}
        </div>
        @endif
    @show
    </div>
    <main ng-app>
        @yield('main')
    </main> 
    <footer>
    
    </footer>
    <script src="//ajax.googleapis.com/ajax/libs/angularjs/1.2.9/angular.min.js"></script>
    <script src="//ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
    <script src="//netdna.bootstrapcdn.com/bootstrap/3.0.3/js/bootstrap.min.js"></script>
    <script type="text/javascript" src="{{ asset('js/ckeditor/ckeditor.js') }}"></script>
    <script type="text/javascript">
    $(window).load(function(){
        setTimeout(function(){ $('.top-alert').alert('close') }, 3000);
    });
    </script>
</body>
</html>
