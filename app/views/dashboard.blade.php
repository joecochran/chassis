@extends('layouts.default')


@section('main')
<div class="ui header segment">
    <h1 class="ui header">Hello, {{Auth::user()->username}}</h1>
    <p class="sub header">Using this CMS, you can edit page content and SEO metadata, add and remove CMS User accounts, and modify general Site Settings. If you have any questions or run into any problems, please email {{ HTML::mailto('support@cochran.io') }}.</p>
</div>
@stop
