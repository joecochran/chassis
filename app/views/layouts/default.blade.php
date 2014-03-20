<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Chassis</title>
    {{ HTML::style(asset('css/main'.set_min().'.css')) }}

    {{-- Only modernizr at the top --}}
    {{ HTML::script('js/modernizr-2.6.2.min.js') }}
    <style type="text/css">
    </style>
</head>
<body>
    @include('layouts.inc.cms-header')
    <main class="main-content">
        @yield('main')
    </main> 
    @if(Auth::check())
    <footer class="site-footer container">
        <div class="ui grid">
            <div class="eight wide column">
                <div><small><a href="#" class="license-link">License</a></small></div> 
            </div>
            <div class="eight wide column">
            </div>
        </div>
    </footer>
    <div class="ui small modal" id="licensemodal">
        <i class="close icon"></i>
        <div class="header">License</div>
        <div class="content">
            <pre>
Copyright (c) 2014, Joe Cochran
All rights reserved.

Redistribution and use in source and binary forms, with or without modification, are permitted provided that the following conditions are met:

1. Redistributions of source code must retain the above copyright notice, this list of conditions and the following disclaimer.

2. Redistributions in binary form must reproduce the above copyright notice, this list of conditions and the following disclaimer in the documentation and/or other materials provided with the distribution.

THIS SOFTWARE IS PROVIDED BY THE COPYRIGHT HOLDERS AND CONTRIBUTORS "AS IS" AND ANY EXPRESS OR IMPLIED WARRANTIES, INCLUDING, BUT NOT LIMITED TO, THE IMPLIED WARRANTIES OF MERCHANTABILITY AND FITNESS FOR A PARTICULAR PURPOSE ARE DISCLAIMED. IN NO EVENT SHALL THE COPYRIGHT HOLDER OR CONTRIBUTORS BE LIABLE FOR ANY DIRECT, INDIRECT, INCIDENTAL, SPECIAL, EXEMPLARY, OR CONSEQUENTIAL DAMAGES (INCLUDING, BUT NOT LIMITED TO, PROCUREMENT OF SUBSTITUTE GOODS OR SERVICES; LOSS OF USE, DATA, OR PROFITS; OR BUSINESS INTERRUPTION) HOWEVER CAUSED AND ON ANY THEORY OF LIABILITY, WHETHER IN CONTRACT, STRICT LIABILITY, OR TORT (INCLUDING NEGLIGENCE OR OTHERWISE) ARISING IN ANY WAY OUT OF THE USE OF THIS SOFTWARE, EVEN IF ADVISED OF THE POSSIBILITY OF SUCH DAMAGE.
            </pre>
        </div>
    </div>
    @endif
    {{ HTML::script(asset('js/main'.set_min().'.js')) }}
    
    {{-- Checking if a .ckeditor element exists and then loading in the ckeditor.js file because its huge and expensive --}}
    <script type="text/javascript">
        $('.ui.dropdown').dropdown();
        if ($('.ckeditor')[0]) document.write('<script src="{{ asset('js/ckeditor/ckeditor.js') }}">\x3C/script>');
        if ($('.table.sortable')[0]) $('.sortable.table').tablesort();
        $('#licensemodal').modal('attach events', '.license-link', 'show');
    </script>
</body>
</html>
