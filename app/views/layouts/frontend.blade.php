<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta type="description" content="@yield('meta_description', 'temp default')"/>
  <title>{{{ $page->title }}} - Site Title</title>
</head>
<body>
<header>
<p><strong><a href="{{ URL::to('/') }}">Site Title</strong><hr></p>
<nav>
<ul>
@foreach($pages as $pagex)
<li class="{{ set_active($pagex->slug) }}">{{ link_to($pagex->slug, $pagex->title) }}</li>
@endforeach
@if(Auth::check())
<li>{{ link_to('admin', 'Admin') }}</li>
@endif
</ul>
<hr />

</nav>
</header>
<main>
    @yield('main')
</main>
<footer>
    <p><hr><small>Copyright &copy; {{ date('Y') }} Sitename all rights reserved.</small></p>
</footer>
</body>
</html>
