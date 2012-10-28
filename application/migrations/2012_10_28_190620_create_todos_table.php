<?php

class Create_Todos_Table {

	/**
	 * Make changes to the database.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('todos', function ($table)
		{
			$table->increments('id');
			
			$table->string('descricao', 50);

			$table->integer('users_id');
			$table->index('users_id');
			//$table->foreign('users_id')->references('id')->on('users');

			$table->timestamp('finalizado');
			$table->timestamp('data');

			$table->timestamps();
			
		});
	}

	/**
	 * Revert the changes to the database.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('todos');
	}

}