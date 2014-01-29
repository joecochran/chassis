<?php namespace Harlo\Page;

use Validator;
use Page;

class Creator {
    protected $listener;

    public function __construct($listener)
    {
        $this->listener = $listener;
    }

    public function create($input)
    {
		$validation = Validator::make($input, Page::$rules);

		if ($validation->fails())
		{
            return $this->listener->pageCreationFails($validation->messages());
		}
        Page::create($input);
        return $this->listener->pageCreationSucceeds();
    }
}
