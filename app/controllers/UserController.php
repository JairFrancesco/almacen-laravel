<?php

class UserController extends BaseController {

	public function showRegister()
	{
		return View::make('users.register');
	}

	public function register()
	{
		User::create(array(
			'username' => Input::get('username'),
			'password' => sha1(Input::get('password')),
			'name' => Input::get('name'),
			'email' => Input::get('email')
		));
        Session::flash('message', 'El usuario se creó correctamente');
		return Redirect::to('/');
	}

	public function showLogin()
	{
		return View::make('users.login');
	}

	public function login()
	{
		try {
			$user = User::where('username', Input::get('username'))
				->where('password', sha1(Input::get('password')))
				->firstOrFail();
			Session::put('user', $user);
			return Redirect::to('/');
		} catch(Exception $e) {
            Session::flash('message', 'El usuario o contraseña son incorrectos');
            return Redirect::to('/users/login');
		}
	}

	public function logout()
	{
		Session::flush();
		return Redirect::to('/');
	}

}