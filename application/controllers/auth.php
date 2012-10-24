<?php

class Auth_Controller extends Controller {
	
	public function action_register() {

		$data = Session::get('oneauth');

		$user = new User();
		$user->username = $data['info']['nickname'];
		$user->name = $data['info']['name'];
		$user->avatar = $data['info']['image'];

		$user->save();

		Event::fire('oneauth.sync', array($user->id));

		Auth::login($user->id);

		return Redirect::to('dashboard');

	}

	public function action_logout(){

		Auth::logout();
		return Redirect::to('/');

	}

}