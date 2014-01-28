@extends('layouts.default')


@section('main')
<div class="container">
    <div class="ui feed blue segment">
        <div class="ui header">Recent Updates</div>
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
                    We added some fucking feature your dont care about. <a href="#">Read More</a>
                </div>
            </div>
        </div>
    </div>
</div>
@stop
