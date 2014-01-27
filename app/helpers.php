<?php

/**
 * return 'active' if on current page
 *
 */
function set_active($path, $active = 'active')
{
    return Request::is($path) ? $active : '';
}

/**
 * return '.min' if not development
 *
 */
function set_min()
{
    if(App::environment('development')) return '';
    return '.min';
}

/**
 * return true if production
 *
 */
function is_production() 
{
    return App::environment('production');
}
