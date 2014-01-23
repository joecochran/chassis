<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta type="description" content="{{{ $page->description }}}"/>
  <title>{{{ $page->title }}} - Site Title</title>
</head>
<body>
<header>
<p><strong><a href="{{ URL::to('/') }}">Site Title</strong><hr></p>
<nav>
<ul>
@foreach($pages as $pagex)
<li>{{ link_to($pagex->slug, $pagex->title) }}</li>
@endforeach
</ul>
<hr />

</nav>
</header>
<main>
  <h1>{{{ $page->title }}}</h1>
  <article>
  {{ $page->content }}
  </article>
</main>
<footer>
    <p><hr><small>Copyright &copy; {{ date('Y') }} Sitename all rights reserved.</small></p>
</footer>
</body>
</html>
