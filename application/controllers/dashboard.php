<?php

class Dashboard_Controller extends Controller {
	
	public $restful = true;

	public function get_index() {

		$itens = Todo::where_users_id(Auth::User()->id)->get();

		return View::make('dashboard/list_todos')->with('itens', $itens);

	}

	public function post_index() {

		$input = Input::all();

		$item = new Todo();
		$item->descricao 	= $input['descricao'];
		$data 				= new DateTime($input['data']);
		$item->data 		= date_format($data, 'Y/m/d H:i:s');
		$item->users_id 	= Auth::User()->id;

		$item->save();

		Session::flash('msg', 'Gravado com sucesso');

		return Redirect::to('dashboard');

	}

	public function get_delete($id) {

		$item = Todo::where_id_and_users_id($id, Auth::User()->id)->first();

		if ( !$item ) {

			Session::flash('error', 'Todo não encontrado');


		} else {

			$item->delete();

		}

		return Redirect::to('dashboard');

	}

	public function get_finalizar($id) {

		$item = Todo::where_id_and_users_id($id, Auth::User()->id)->first();

		if ( !$item ) {

			Session::flash('error', 'Todo não encontrado');

		} else {

			$item->finalizado = date('Y/m/d H:i:s');
			$item->save();

		}

		return Redirect::to('dashboard');

	}

	public function get_new() {

		return View::make('dashboard.new');

	}

}