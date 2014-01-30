<?php namespace Harlo\User;

use Validator;
use User;
use Hash;

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
            return $this->listener->createUserFails();
		}
        $user = new User;
        $user->fullname = $input['fullname'];
        $user->username = $input['username'];
        $user->email = $input['email'];
        $user->password = Hash::make($input['password']);
        $user->save();
        return $this->listener->createUserSuccess();
    }
}
