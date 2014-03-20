<?php namespace Chassis\Post;

use Validator;
use Post;
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
        }
		$validation = Validator::make($input, Post::$rules);
        if ($validation->fails())
        {
            return Redirect::route('posts.edit', $id)->withInput()->withErrors($validation);
        }
        $post = Post::find($id);
        $post->fill($input)->save();
        return Redirect::route('posts.index');
    }
}
