<?php

class Setting extends Eloquent {
	protected $guarded = array();

    public static $rules = array(
        'name' => 'required',
        'slug' => 'required',
        'value' => 'required'
    );
    
    public $timestamps = false;
}
