<?php namespace Chassis\Post;

use Validator;
use Post;
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
		$validation = Validator::make($input, Post::$rules);

		if ($validation->fails())
		{
            return Redirect::route('posts.create')->withInput()->withErrors($validation);
		}
        Post::create($input);
        return Redirect::route('posts.index');
    }
}
