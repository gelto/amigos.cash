<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateOpenaccounts extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('openaccounts', function($table)
	    {
	        $table->increments('id');
	        $table->unsignedInteger('user_idA');
	        $table->unsignedInteger('user_idB');
	        $table->decimal('balance', 6, 2);
	        $table->string('status');
	        $table->timestamps();
	    });
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('openaccounts');
	}

}
