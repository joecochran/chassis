@extends('layouts.default')

@section('main')
<div class="container">
    <div class="ui basic segment">
        <h1 class="ui header">Users</h1>
        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
    </div>
    @if ($users->count())
    <table class="ui table padded blue sortable segment" valign=top>
        <thead>
            <tr>
                <th>Name</th>
                <th>Username</th>
                <th colspan=2>Email</th>
            </tr>
        </thead>
        <tbody>
            @foreach($users as $user)
            <tr class="ui form">
                <td>{{ $user->fullname }}</td>
                <td>{{ $user->username }}</td>
                <td>{{ $user->email }}</td>
                <td>
                    
                    <div class="ui tiny buttons control-group pull-right">
                    {{ Form::open(array('method' => 'DELETE', 'route' => array('users.destroy', $user->id))) }}
                        {{ link_to_route('users.edit', 'Edit', array($user->id), array('class' => 'ui button')) }}
                        <div class="or"></div>
                        {{ Form::submit('Delete', array('class' => 'ui button red')) }}
                    {{ Form::close() }}
                    </div>
                </td>
            </tr>
            @endforeach
        </tbody>
        <tfoot>
            <tr>
                <td colspan="4">
                    <a href="{{ url('users/create') }}" class="ui blue tiny labeled icon button"><i class="add icon"></i> Add User</a> 
                </td>
            </tr>
        </tfoot>
    </table>
    @else
    No users defined
    @endif
</div>
@stop
