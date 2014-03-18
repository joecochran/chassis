<?php namespace Chassis\User;

use Validator;
use User;
use Hash;
use Redirect;

class Creator {
    protected $listener;

    public function __construct($listener)
    {
        $this->listener = $listener;
    }

    public function create($input)
    {
		$validation = Validator::make($input, User::$rules);
		if ($validation->fails())
		{
            return Redirect::route('users.create')->withInput()->withErrors($validation)->with('message', 'there were validation errors.');
		}
        $user = new User;
        $user->fullname = $input['fullname'];
        $user->username = $input['username'];
        $user->email = $input['email'];
        $user->password = Hash::make($input['password']);
        $user->save();
	    return Redirect::route('users.index');
    }
}
