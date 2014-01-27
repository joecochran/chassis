<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Hello</title>
    
    {{-- Need a clever helper to swap this with min on production --}}
    <link href='http://fonts.googleapis.com/css?family=Source+Sans+Pro:400,700|Open+Sans:300italic,400,300,700' rel='stylesheet' type='text/css'>
    {{ HTML::style(asset('css/main'.set_min().'.css')) }}
</head>
<body>
    <h1 class="ui header">Hello, world!</h1>
    <h2 class="ui header">
      <i class="settings icon"></i>
        <div class="content">
            Account Settings
                <div class="sub header">Manage your account settings and set e-mail preferences.</div>
                  </div>
                  </h2>
    {{-- Need a clever helper to swap this with min on production --}}
    {{ HTML::script(asset('js/main'.set_min().'.js')) }}
</body>
</html>
