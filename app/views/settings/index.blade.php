@extends('layouts.default')

@section('main')
<div class="ui segment pagehead">
    <div class="container">
        <h1 class="ui header">
            <i class="settings icon"></i> 
            <div class="content">
                Settings
                <p class="sub header">Add, remove and edit sitewide settings.</p>
            </div>
        </h1>
        <div class="ui divider"></div>
        <a href="{{ url('settings/create') }}" class="ui blue small labeled icon button"><i class="add icon"></i> New Setting</a> 
    </div>
</div>
<div class="container">
    <div class="ui basic segment">
        @if ($settings->count())
        <table class="ui table padded sortable segment" valign=top>
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
                    <td class="control-td">
                        
                        {{ Form::open(array('method' => 'DELETE', 'route' => array('settings.destroy', $setting->id))) }}
                            <div class="ui mini  buttons">
                            {{ link_to_route('settings.edit', 'Edit', array($setting->id), array('class' => 'ui button')) }}
                            {{ Form::submit('Delete', array('class' => 'ui button red')) }}
                            </div>
                        {{ Form::close() }}
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
        @else
        No settings defined
        @endif
    </div>
</div>
@stop
