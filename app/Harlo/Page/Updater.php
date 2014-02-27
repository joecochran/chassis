<?php namespace Harlo\Page;

use Validator;
use Page;
use Input;

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
        }
		$validation = Validator::make($input, Page::$rules);
        if ($validation->fails())
        {
            return $this->listener->pageUpdateFails($validation->messages(), $id);
        }
        $page = Page::find($id);
        $page->update($input);
        return $this->listener->pageCreateUpdateSucceeds();
    }
}
