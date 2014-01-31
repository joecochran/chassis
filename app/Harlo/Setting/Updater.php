<?php namespace Harlo\Setting;

use Validator;
use Setting;

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
            return $this->listener->createSettingFails();
        }
        $setting = Setting::find($id);
        $setting->name = $input['name'];
        $setting->slug = $input['slug'];
        $setting->value = $input['value'];
        $setting->save();
        return $this->listener->createSettingSuccess();
    }
}
