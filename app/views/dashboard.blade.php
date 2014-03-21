@extends('layouts.default')


@section('main')
<div class="ui segment cms-pagehead">
    <div class="container">
        <h1 class="ui header">Hello, {{Auth::user()->username}}</h1>
    </div>
</div>
<div class="container">
    <div class="ui secondary segment">
        <p>Using this CMS, you can edit page content and SEO metadata, add and remove CMS User accounts, and modify general Site Settings. If you have any questions or run into any problems, please email {{ HTML::mailto('support@harlointeractive.com') }}.</p>
    </div>
</div>
@stop
