<?php

class Create_Users_Table {

	/**
	 * Make changes to the database.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('users', function ($table)
		{
			$table->increments('id');
			
			$table->string('username', 50);
			$table->string('password', 128);
			$table->string('name', 100);
			$table->text('avatar');
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
		Schema::drop('users');
	}

}