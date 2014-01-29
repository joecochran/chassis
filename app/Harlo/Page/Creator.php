<?php namespace Harlo\Project;

class Creator {
    protected $listener;
    public function __construct($listener)
    {
        $this->listener = $listener;
    }
    public function create()
    {
		$validation = Validator::make($input, Page::$rules);

		if ($validation->fails())
		{
            $this->listener->pageCreationFails($validation->messages());
            return Redirect::route('pages.create')
                ->withInput()
                ->withErrors($validation)
                ->with('message', 'There were validation errors.');
		}
        $this->page->create($input);
    }
}
