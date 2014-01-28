@extends('layouts.default')

@section('main')

<div class="container">
    <h1 class="ui header">Edit Setting</h1>
    {{ Form::model($setting, array('method' => 'PATCH', 'route' => array('settings.update', $setting->id),'class'=>'ui form blue segment')) }}
        <div class="field">
            {{ Form::label('name', 'Name') }}
            {{ Form::text('name',$setting->name,array('class'=>'form-control')) }}
        </div>
        <div class="field">
            {{ Form::label('slug', 'Slug') }}
            {{ Form::text('slug',$setting->slug,array('class'=>'form-control')) }}
        </div>
        <div class="field">
            {{ Form::label('value', 'Value') }}
            {{ Form::textarea('value',$setting->value,array('class'=>'form-control', 'rows'=>4)) }}
        </div>
        <div class="ui small buttons">
            {{ Form::submit('Update', array('class' => 'ui blue button')) }}
            <div class="or"></div>
            <a href="{{ url('settings') }}" class='ui red button'>Cancel</a>
        </div>
    {{ Form::close() }}
</div>
@stop
