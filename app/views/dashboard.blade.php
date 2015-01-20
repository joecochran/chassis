@extends('layouts.default')


@section('main')
<div class="ui segment pagehead">
    <div class="container">
        <h1 class="ui header">
            <i class="dashboard icon"></i> 
            <div class="content">
                Dashboard
                <p class="sub header">Hello, {{Auth::user()->username}}</p>
            </div>
        </h1>
    </div>
</div>

<div class="container">
    <div class="ui segment">
        <p class="">Using this CMS, you can edit page content and SEO metadata, add and remove CMS User accounts, and modify general Site Settings. If you have any questions or run into any problems, please email {{ HTML::mailto('support@cochran.io') }}.</p>
    </div>
</div>
@stop
