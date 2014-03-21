@extends('layouts.default')

@section('main')
    <div class="ui segment cms-pagehead">
        <div class="container">
            <h1 class="ui header">Posts</h1>
        </div>
    </div>
<div class="container">
    @if ($posts->count())
    <table class="ui table padded blue sortable segment" valign=top>
        <thead>
            <tr>
                <th>Title</th>
                <th>Category</th>
                <th>Tags</th>
                <th class="descending" colspan=2>Created</th>
            </tr>
        </thead>
        <tbody>
            @foreach($posts as $post)
            <tr class="ui form">
                <td>{{ $post->title }}</td>
                <td>{{ $post->category->name }}</td>
                <td>@foreach($post->tags as $tag)<div class="ui tiny label">{{ $tag->name }}</div>@endforeach</td>
                <td><time class="cms-created-at">{{ date('Y-m-d',strtotime($post->created_at)) }}</time></td>
                <td>
                    <div class="ui mini buttons control-group pull-right">
                    {{ Form::open(array('method' => 'DELETE', 'route' => array('posts.destroy', $post->id))) }}
                        {{ link_to_route('posts.edit', 'Edit', array($post->id), array('class' => 'ui button')) }}
                        {{ Form::submit('Delete', array('class' => 'confirm-delete ui button red')) }}
                    {{ Form::close() }}
                    </div>
                </td>
            </tr>
            @endforeach
        </tbody>
        <tfoot>
            <tr>
                <td colspan="4">
                    <a href="{{ url('posts/create') }}" class="ui blue tiny labeled icon button"><i class="add icon"></i> New Post</a> 
                </td>
            </tr>
        </tfoot>
    </table>

    <div class="blog-pager">
        {{ $posts->links() }}
    </div>
    @else
    No users defined
    @endif
</div>
@include('layouts.inc.delete-modal')
@stop
