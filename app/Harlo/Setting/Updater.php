
<?php namespace Harlo\User;

use Validator;
use Setting;

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
		$validation = Validator::make($input, $rules);
		if ($validation->fails())
		{
            return $this->listener->updateUserFails($validation->messages(), $id);
		}
        $user = User::find($id);
        $user->fullname = $input['fullname'];
        $user->username = $input['username'];
        $user->email = $input['email'];
        if( isset($input['password'] )) {
            $user->password = Hash::make($input['password']);
        }
        $user->save();
        return $this->listener->updateUserSuccess();
    }
}
