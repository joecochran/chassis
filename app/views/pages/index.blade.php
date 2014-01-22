@extends('layouts.default')

@section('main')
<div class="container">
<div class="page-header">
<h1>All Pages</h1>
</div>
<p>{{ link_to_route('pages.create', 'Add new page') }}</p>

@if ($pages->count())
<div class="panel panel-default">
	<table class="table table-striped">
		<thead>
			<tr>
				<th>Title</th>
				<th colspan="2">Description</th>
			</tr>
		</thead>

		<tbody>
			@foreach ($pages as $page)
				<tr>
					<td>{{{ $page->title }}}</td>
					<td>{{{ $page->description }}}</td>
          <td>{{ link_to_route('pages.edit', 'Edit', array($page->id), array('class' => 'btn btn-info pull-right')) }}</td>
          {{-- <td>
                        {{ Form::open(array('method' => 'DELETE', 'route' => array('pages.destroy', $page->id))) }}
                            {{ Form::submit('Delete', array('class' => 'btn btn-danger')) }}
                        {{ Form::close() }}
                    </td> --}}
				</tr>
			@endforeach
		</tbody>
	</table>
</div>
@else
	There are no pages
@endif
</div>
@stop
