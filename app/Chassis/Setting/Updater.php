<?php namespace Chassis\Setting;

use Validator;
use Setting;
use Redirect;

class Updater {
    protected $listener;

    public function __construct($listener)
    {
        $this->listener = $listener;
    }

    public function update($id, $input)
    {
        $validation = Validator::make($input, Setting::$rules);
        if ($validation->fails())
        {
            // return $this->listener->createSettingFails();
            return Redirect::route('settings.edit', $id)->withInput()->withErrors($validation)->with('message', 'There were validation errors.');
        }
        $setting = Setting::find($id);
        $setting->name = $input['name'];
        $setting->slug = $input['slug'];
        $setting->value = $input['value'];
        $setting->save();
        // return $this->listener->createSettingSuccess();
	    return Redirect::route('settings.index');
    }
}
