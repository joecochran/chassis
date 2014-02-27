<?php

class Setting extends Eloquent {
	protected $guarded = array();

    public static $rules = array(
        'name' => 'required',
        'slug' => 'required',
        'value' => 'required'
    );
    
    public $timestamps = false;

    public static function asObj()
    {
        $arr = array();
        foreach (static::all() as $setting) {
            $arr[$setting->slug] = "$setting->value";
        }
        $settings = (object) $arr;
        return $settings;
    }
}
