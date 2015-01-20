@extends('layouts.default')

@section('main')
    <div class="ui segment pagehead">
        <div class="container">
            <h1 class="ui header">
                <i class="text file outline icon"></i> 
                <div class="content">
                    Pages
                    <p class="sub header">Add, remove and edit pages.</p>
                </div>
            </h1>
            @if(Auth::user()->role == 0)
                <div class="ui divider"></div>
                <a href="{{ URL::to('pages/create') }}" class="ui blue small labeled icon button"><i class="add icon"></i>  New page</a>
            @endif
        </div>
    </div>

<div class="container">
    <div class="ui basic segment">
        @if ($pages->count())
        <div class="ui four doubling cards">
            @foreach ($pages as $page)
            <div class="card">
                <div class="content">
                    <div class="header">
                        {{{ $page->title }}}
                    </div>
                    <div class="meta">
                        {{{ '/'.$page->slug }}}
                    </div>
                    <div class="description">
                        {{{ substr($page->description, 0, 170) }}}
                    </div>
                </div>
                <div class="extra">
                    {{ Form::open(array('method' => 'DELETE', 'route' => array('pages.destroy', $page->id), 'class' => '')) }}
                    {{ link_to_route('pages.edit', 'Edit', array($page->id), array('class' => 'module leftbutton ui mini button')) }}
                    @if(Auth::user()->role == 0)
                    {{ Form::submit('Delete', array('class' => 'ui negative mini button confirm-delete')) }}
                    @endif
                    {{ Form::close() }}
                </div>
            </div>
            @endforeach
        </div>
    </div>
    @else
        There are no pages
    @endif
</div>
<div class="ui basic delete modal transition" style="margin-top: -159px;">
    <div class="header">
      Confirm Deletion
    </div>
    <div class="content">
      <div class="left">
        <i class="warning icon"></i>
      </div>
      <div class="right">
        <p>Are you sure you want to delete this page? <strong>This cannot be undone.</strong></p>
      </div>
    </div>
    <div class="actions">
      <div class="two fluid ui buttons">
        <div class="ui red labeled icon button" id="noDelete">
          <i class="remove icon"></i>
          No
        </div>
        <div class="ui green right labeled icon button" id="yesDelete">
          Yes
          <i class="checkmark icon"></i>
        </div>
      </div>
    </div>
  </div>
@stop
