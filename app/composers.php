<?php

View::composer('layouts.inc.cms-header', function($view){
    $currentUser = Auth::user();
    $settings = Setting::asObj();
    $view->with('currentUser', $currentUser)->with('settings', $settings); 
});

View::composer('layouts.frontend', function($view) {
    $settings = Setting::asObj();
    $pages = Page::all();
    $view->with('settings', $settings)->with('pages', $pages);
});
