<?php

class SessionsController extends BaseController {

	public function create()
	{
        return View::make('sessions.create');
	}

	public function store()
	{
        // validate
		$input = Input::all();
        $attempt = Auth::attempt(array(
            'email' => $input['email'],
            'password' => $input['password']
        ));
        if ($attempt) return Redirect::intended('admin')->with(['flash_message'=>'Login Successful', 'message_class'=>'alert-success','message_strong'=>'Welcome!']);
        return Redirect::back()->with(['flash_message'=>'Your username or password is incorrect.','message_class'=>'alert-danger','message_strong'=>'Uh oh!'])->withInput();

	}

	public function destroy()
	{
        Auth::logout();
        return Redirect::route('sessions.create')->with(['flash_message'=>'You have been logged out.', 'message_class'=>'alert-info','message_strong'=>'']);
	}

}
