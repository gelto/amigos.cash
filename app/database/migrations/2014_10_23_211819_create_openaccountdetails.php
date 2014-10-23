<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateOpenaccountdetails extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('openaccountdetails', function($table)
	    {
	        $table->increments('id');
	        $table->unsignedInteger('openaccount_id');
	        $table->integer('direction');
	        $table->decimal('ammount', 6, 2);
	        $table->string('description');
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
		Schema::drop('openaccountdetails');
	}

}
