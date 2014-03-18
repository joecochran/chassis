<?php

class Category extends Eloquent {
    protected $table = 'categories';
    public function posts()
    {
        return $this->hasMany('Post');
    }
}
