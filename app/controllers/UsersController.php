<?php

class UsersController extends BaseController {
    
    protected $user;

    public function __construct(User $user)
    {
        $this->user = $user;
        $this->beforeFilter('auth');
    }

    public function index()
    {
        $users = $this->user->all();
        return View::make('users.index', compact('users'));
    }
    public function edit($id)
    {
        $user = $this->user->find($id);
        return View::make('users.edit', compact('user'));
    }
    public function create()
    {
        return View::make('users.create');
    }
	public function update($id)
	{
        // stolen from flirt, lets do it better:
		$input = array_except(Input::all(), ['_method', '_token']);
        if(strlen($input['password']) < 1) {
            unset($input['password']);
        }
        $rolemin = Auth::user()->role;
        //this should be moved out.
        $rules = array(
            'fullname' => 'required',
            'username' => 'required|alpha_num|min:3|max:32',
            'email' => 'required|email',
            'password' => 'confirmed',
        );
		$validation = Validator::make($input, $rules);
		if ($validation->passes())
		{
            $user = User::find($id);
            $user->fullname = $input['fullname'];
            $user->username = $input['username'];
            $user->email = $input['email'];
            if( isset($input['password'] )) {
                $user->password = Hash::make($input['password']);
            }
            $user->save();
			Redirect::route('users.edit', $id);
		}
		return Redirect::route('users.edit', $id)->withInput()->withErrors($validation)->with('message', 'There were validation errors.');
	}
    public function store()
    {
		$input = array_except(Input::all(), ['_method', '_token']);
        $rules = array(
            'fullname' => 'required',
            'username' => 'required|alpha_num|min:3|max:32',
            'email' => 'required|email',
            'password' => 'required|confirmed',
        );
		$validation = Validator::make($input, $rules);
		if ($validation->passes())
		{
            $user = new User;
            $user->fullname = $input['fullname'];
            $user->username = $input['username'];
            $user->email = $input['email'];
            $user->password = Hash::make($input['password']);
            $user->save();
			return Redirect::route('users.index');
		}
		return Redirect::route('users.create')->withInput()->withErrors($validation)->with('message', 'There were validation errors.');
    }
	public function destroy($id)
	{
        $user = $this->user->find($id)->delete();
        return Redirect::route('users.index');
	}
}
