<?php namespace Chassis\User;

use Validator;
use User;
use Hash;
use Redirect;

class Updater {
    protected $listener;

    public function __construct($listener)
    {
        $this->listener = $listener;
    }

    public function update($id, $input)
    {
		$input = array_except($input, ['_method', '_token']);
        if(strlen($input['password']) < 1) {
            unset($input['password']);
            unset($input['password_confirmation']);
        }
        $rules = array(
            'fullname' => 'required',
            'username' => 'required|alpha_num|min:3|max:32',
            'email' => 'required|email',
            'password' => 'confirmed',
        );
        // dd($input);
		$validation = Validator::make($input, $rules);
		if ($validation->fails())
		{
            return Redirect::route('users.edit', $id)->withInput()->withErrors($validation)->with('message', 'There were validation errors.');
		}
        $user = User::find($id);
        $user->fullname = $input['fullname'];
        $user->username = $input['username'];
        $user->email = $input['email'];
        if( isset($input['password'] )) {
            $user->password = Hash::make($input['password']);
        }
        $user->save();
	    return Redirect::route('users.index');
    }
}
