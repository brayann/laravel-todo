<?php

class Todo extends Eloquent {
	
	public static $rules = array(
		'descricao' 	=>	'required',
		'data'			=> 	'required'
	);

}