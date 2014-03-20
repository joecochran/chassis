<?php

class Category extends Eloquent {
    protected $table = 'categories';
    public function posts()
    {
        return $this->hasMany('Post');
    }
    public static function categoryArray()
    {
        $data = Category::all();
        $categories = array();
        foreach ($data as $value) {
            $categories[$value->id] = $value->name;
        }
        return $categories;
    }
}
