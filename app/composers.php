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
View::composer('posts.index', function($view){
    $page = Page::whereSlug('blog')->first();
    $totalPosts = Post::all()->count();
    $posts = Post::with('category')->with('tags')->paginate(5);
    $tags = Tag::with('posts')->get();
    $categories = Category::with('posts')->get();
    $view->with(array('page'=>$page, 'totalPosts'=>$totalPosts, 'posts'=>$posts, 'categories'=>$categories, 'tags'=>$tags));
});
