<?php namespace Chassis\Setting;

use Validator;
use Setting;
use Redirect;

class Creator {
    protected $listener;

    public function __construct($listener)
    {
        $this->listener = $listener;
    }

    public function create($input)
    {
        $validation = Validator::make($input, Setting::$rules);
        if ($validation->fails())
        {
            return Redirect::route('settings.create')->withInput()->withErrors($validation)->with('message', 'there were validation errors.');
        }
        $setting = new Setting;
        $setting->name = $input['name'];
        $setting->slug = $input['slug'];
        $setting->value = $input['value'];
        $setting->save();
	    return Redirect::route('settings.index');
    }
}
