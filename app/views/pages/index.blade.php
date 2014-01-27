@extends('layouts.default')

@section('main')
<div class="container">
    <h1 class="ui header">All Pages</h1>
    <p>{{ link_to_route('pages.create', 'Add new page') }}</p>

    @if ($pages->count())
    <table class="ui sortable padded table blue segment">
        <thead>
            <tr>
                <th class="ascending">Title</th>
                <th colspan="2">Description</th>
            </tr>
        </thead>

        <tbody>
            @foreach ($pages as $page)
                <tr>
                    <td>{{{ $page->title }}}</td>
                    <td>{{{ $page->description }}}</td>
          <td>{{ link_to_route('pages.edit', 'Edit', array($page->id), array('class' => 'ui button tiny pull-right')) }}</td>
          {{-- <td>
                        {{ Form::open(array('method' => 'DELETE', 'route' => array('pages.destroy', $page->id))) }}
                            {{ Form::submit('Delete', array('class' => 'btn btn-danger')) }}
                        {{ Form::close() }}
                    </td> --}}
                </tr>
            @endforeach
        </tbody>
    </table>
    @else
        There are no pages
    @endif
</div>
@stop
