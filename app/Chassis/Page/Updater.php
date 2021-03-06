<?php namespace Chassis\Page;

use Validator;
use Page;
use Input;
use Redirect;

class Updater {
    protected $listener;

    public function __construct($listener)
    {
        $this->listener = $listener;
    }

    public function update($id, $input)
    {    
        $input = array_except($input, '_method');
        if (Input::hasFile('banner'))
        {
            $file = Input::file('banner');
            $name = time() . '-' . $file->getClientOriginalName();
            $file = $file->move(public_path().'/uploads/', $name);
            $input['banner'] = $name;
        } else {
            $input['banner'] = Page::find($id)->banner;
        }
		$validation = Validator::make($input, Page::$rules);
        if ($validation->fails())
        {
            return Redirect::route('pages.edit', $id)->withInput()->withErrors($validation);
        }
        $page = Page::find($id);
        $page->update($input);
        return Redirect::route('pages.index');
    }
}
