<?php

View::composer('layouts.inc.cms-header', function($view){
    $currentUser = Auth::user();
    $view->with('currentUser', $currentUser); 
});

View::composer('layouts.frontend', function($view) {
    $settings = Setting::asObj();
    $pages = Page::all();
    $view->with('settings',$settings)->with('pages', $pages);
});
