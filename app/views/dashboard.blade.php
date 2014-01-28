@extends('layouts.default')


@section('main')
<div class="container">
    <h1 class="ui header">Recent Updates</h1>
    <div class="ui feed blue segment">
        <div class="event">
            <div class="label">
                <img src="http://placekitten.com/100/100">
            </div>
            <div class="content">
                <div class="date">
                Just moments ago
                </div>
                <div class="summary">
                    <a>Joe Cochran</a> posted:
                </div>
                <div class="extra text">
                    Welcome to Chassis!  <a href="#">Read More</a>
                </div>
            </div>
        </div>
    </div>
</div>
@stop
