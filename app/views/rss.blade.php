{{ '<?xml version="1.0" encoding="utf-8"?>' }}

<feed xmls="http://www.w3.org/2005/Atom">
    <title></title>
    <link href="{{ url('blog/feed') }}" />
    <updated>{{ Carbon\Carbon::now()->toATOMString() }}</updated>
    <id>tag:{{ URL::to('/') }},{{ date('Y') }}:/blog/feed</id>
@foreach($posts as $post)
    <entry>
        <title>{{{ $post->title }}}</title>
        <link>{{ URL::to('blog/'.$post->slug) }}</link>
        <id>tag:{{ post_tag_uri($post) }}</id>
        <summary>{{{ $post->excerpt }}}</summary>
    </entry>
@endforeach
</feed>
