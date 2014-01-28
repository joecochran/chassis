@extends('layouts.default')

@section('main')
<div class="container">
    <h1 class="ui header">All Settings</h1>
    <a href="{{ url('settings/create') }}" class="ui blue tiny labeled icon button"><i class="add icon"></i> Add Page</a> 
    @if ($settings->count())
    <table class="ui table padded blue sortable segment" valign=top>
        <thead>
            <tr>
                <th>Name</th>
                <th>Slug</th>
                <th colspan=2>Value</th>
            </tr>
        </thead>
        <tbody>
            @foreach($settings as $setting)
            <tr class="ui form">
                <td>{{ $setting->name }}</td>
                <td>{{ $setting->slug }}</td>
                <td>{{ $setting->value }}</td>
                <td>
                    
                    <div class="ui tiny buttons control-group pull-right">
                    {{ Form::open(array('method' => 'DELETE', 'route' => array('settings.destroy', $setting->id))) }}
                        {{ link_to_route('settings.edit', 'Edit', array($setting->id), array('class' => 'ui button')) }}
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
                    <a href="{{ url('pages/create') }}" class="ui blue tiny labeled icon button"><i class="add icon"></i> Add Page</a> 
                </td>
            </tr>
        </tfoot>
    </table>
    @else
    No settings defined
    @endif
</div>
@stop
