<?php

/**
 * return 'active' if on current page
 *
 */
function set_active($path, $active = ' active')
{
    return Request::is($path) ? $active : '';
}

/**
 * return true if production
 *
 */
function is_production() 
{
    return App::environment('production');
}

/**
 * return '.min' if not development
 *
 */
function set_min()
{
    if(is_production()) return '.min';
}

function get_gravatar($email)
{
    $hash = md5(strtolower(trim($email)));
    return "//www.gravatar.com/avatar/$hash";
}
function ui_popup($icon, $message, $variation = null, $position = null)
{
    return '<i class="popup '.$icon.'" data-content="'.$message.'" data-variation="'.$variation.'" data-position="'.$position.'"></i>';
}
function info_icon($message)
{
    return '<i class="popup info icon" data-content="'.$message.'" data-variation="small" data-position="right center"></i>';
}
function override_checkbox($id, $override, $default) {
    return '<div class="inline field">'."\n"
        . '<div class="ui toggle override checkbox">'."\n"
        . '<input type="checkbox" class="override_checkbox" id="'.$id.'" data-override="'.$override.'" data-default="'.$default.'">'."\n"
        . '<label for="'.$id.'">Override?</label>'."\n"
        . '</div>'."\n"
        . '</div>'."\n";
}
function segment_collapse() {
    return '<div class="segment-collapse"><i class="collapse icon large link"></i><i class="expand icon hidden large link"></i></div>';
}
function replace_space($string) {
    return strtolower(str_replace(' ', '-', $string));
}
function replace_dash($string) {
    return strtolower(str_replace('-', ' ', $string));
}
function post_tag_uri($post)
{
    $parsedUrl = parse_url(URL::to('blog/'.$post->slug));
    $output[] = $parsedUrl['host'].',';
    $output[] = $post->created_at->format('Y-m-d').':';
    $output[] = $parsedUrl['path'];
    return implode('', $output);
}
