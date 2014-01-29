<?php

View::composer('layouts.inc.cms-header', function($view){
    $currentUser = Auth::user();
    $view->with('currentUser', $currentUser); 
});

View::composer('layouts.frontend', function($view) {
    $settings = array();
    $settingsobj = Setting::all();
    foreach ($settingsobj as $setting) {
      $settings[$setting->slug] = "$setting->value";
    }
    $pages = Page::all();
    $view->with('settings',$settings)->with('pages', $pages);
});
