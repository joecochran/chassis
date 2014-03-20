<?php namespace Chassis\Page;

use Validator;
use Page;
use Input;
use Redirect;

class Creator {
    protected $listener;

    public function __construct($listener)
    {
        $this->listener = $listener;
    }

    public function create($input)
    {
        if (Input::hasFile('banner'))
        {
            $file = Input::file('banner');
            $name = time() . '-' . $file->getClientOriginalName();
            $file = $file->move(public_path().'/uploads/', $name);
            $input['banner'] = $name;
        }
		$validation = Validator::make($input, Page::$rules);

		if ($validation->fails())
		{
            return Redirect::route('pages.create')->withInput()->withErrors($validation);
		}
        Page::create($input);
        return Redirect::route('pages.index');
    }
}
