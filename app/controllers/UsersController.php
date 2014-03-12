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
        $updater = new Chassis\User\Updater($this);
        return $updater->update($id, Input::all());
	}
    public function store()
    {
        $creator = new Chassis\User\Creator($this);
        return $creator->create(Input::all());
    }
	public function destroy($id)
	{
        $user = $this->user->find($id)->delete();
        return Redirect::route('users.index');
	}
}
