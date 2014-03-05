<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Chassis</title>
    {{ HTML::style('//fonts.googleapis.com/css?family=Source+Sans+Pro:400,700|Open+Sans:300italic,400,300,700') }}
    {{ HTML::style(asset('css/main'.set_min().'.css')) }}

    {{-- Only modernizr at the top --}}
    {{ HTML::script('js/modernizr-2.6.2.min.js') }}
</head>
<body>
    @include('layouts.inc.cms-header')
    <main class="main-content">
        @yield('main')
    </main> 
    @if(Auth::check())
    <footer class="container">
        <div class="ui grid">
            <div class="eight wide column">
                <p><small>copyright &copy; {{ date('Y') }}</small></p> 
            </div>
            <div class="eight wide column">
                <div class="ui icon tiny buttons pull-right">
                    <div class="ui facebook button">
                        <i class="facebook icon"></i>
                    </div>
                    <div class="ui twitter button">
                        <i class="twitter icon"></i>
                    </div>
                    <div class="ui google plus button">
                        <i class="google plus icon"></i>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <div class="ui left help attached icon button">
        <i class="icon question"></i>
    </div>
    @endif
    {{ HTML::script(asset('js/main'.set_min().'.js')) }}
    
    {{-- Checking if a .ckeditor element exists and then loading in the ckeditor.js file because its huge and expensive --}}
    <script type="text/javascript">
        $('.ui.dropdown').dropdown();
        if ($('.ckeditor')[0]) document.write('<script src="{{ asset('js/ckeditor/ckeditor.js') }}">\x3C/script>');
        if ($('.table.sortable')[0]) $('.sortable.table').tablesort();
    </script>
</body>
</html>
