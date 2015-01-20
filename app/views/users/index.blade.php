@extends('layouts.default')

@section('main')
<div class="ui segment pagehead">
    <div class="container">
        <h1 class="ui header">
            <i class="users icon"></i> 
            <div class="content">
                Users
                <p class="sub header">Add, remove and edit users.</p>
            </div>
        </h1>
        <div class="ui divider"></div>
        <a href="{{ url('users/create') }}" class="ui blue small labeled icon button"><i class="add icon"></i> Add User</a> 
    </div>
</div>
<div class="container">
    <div class="ui basic segment">
    @if ($users->count())
        <div class="ui special four doubling cards">
            @foreach($users as $user)
            <div class="card">
                <div class="dimmable image">
                    <div class="ui dimmer">
                        <div class="content">
                            <div class="center">
                                {{ Form::open(array('method' => 'DELETE', 'route' => array('users.destroy', $user->id))) }}
                                    {{ link_to_route('users.edit', 'Edit', array($user->id), array('class' => 'ui inverted mini button')) }}
                                    @if($user->username != Auth::user()->username)
                                    {{ Form::submit('Delete', array('class' => "ui inverted mini button red confirm-delete")) }}
                                    @endif
                                {{ Form::close() }}
                            </div>
                        </div>
                    </div>
                    <img src="{{get_gravatar($user->email,184)}}" />
                </div>
                <div class="content">
                    <div class="header">{{ $user->fullname }}</div>
                    <div class="meta">
                        <a class="group" href="">{{ $user->username }}</a>
                    </div>
                </div>
                <div class="extra">
                    <a>
                        <i class="users icon"></i> {{{ $user->role == 0 ? "administrator" : "editor" }}}</a>
                </div>
            </div>
            @endforeach
        </div>
    @else
    No users defined
    @endif
    </div>
</div>

@include('layouts.inc.delete-modal')
@stop

@section('scripts')
<script>
$('.special.cards .image').dimmer({
  on: 'hover'
});
</script>
@stop
