<?php

function set_active($path, $active = 'active')
{
    return Request::is($path) ? $active : '';
}
function set_min()
{
    if(App::environment('production','staging')) {
        return '.min';
    } else {
        return '';
    }
}
