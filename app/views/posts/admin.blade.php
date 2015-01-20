@extends('layouts.default')

@section('main')
    <div class="ui segment pagehead">
        <div class="container">
            <h1 class="ui header">
                <i class="rss icon"></i> 
                <div class="content">
                    Posts
                    <p class="sub header">Add, remove and edit blog posts.</p>
                </div>
            </h1>
            <div class="ui divider"></div>
            <a href="{{ url('posts/create') }}" class="ui small blue labeled icon button"><i class="add icon"></i> New Post</a> 
        </div>
    </div>

<div class="container">
    <div class="ui basic segment">
            
    @if ($posts->count())
    <table class="ui table padded sortable segment" valign=top>
        <thead>
            <tr>
                <th>Title</th>
                <th>Category</th>
                <th class="descending" colspan=2>Created</th>
            </tr>
        </thead>
        <tbody>
            @foreach($posts as $post)
            <tr class="ui form">
                <td>{{ $post->title }}</td>
                <td>{{ $post->category->name }}</td>
                <td><time class="cms-created-at">{{ date('Y-m-d',strtotime($post->created_at)) }}</time></td>
                <td class="control-td">
                    {{ Form::open(['method' => 'DELETE', 'route' => ['posts.destroy', $post->id]]) }}
                    <div class="ui mini buttons">
                    {{ link_to_route('posts.edit', 'Edit', array($post->id), array('class' => 'ui button')) }}
                    {{ Form::submit('Delete', array('class' => 'confirm-delete ui button red')) }}
                    </div>
                    {{ Form::close() }}
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>

    <div class="blog-pager">
        {{ $posts->links() }}
    </div>
    @else
    No users defined
    @endif
    </div>
</div>
@include('layouts.inc.delete-modal')
@stop
