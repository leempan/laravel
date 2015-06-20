<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateStoreTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('store', function($table){
        	$table->increments('id');
        	$table->string('name', 100);
        	$table->integer('market_id');
        	$table->timestamps();
        	$table->string('remember_token',62)->default('default');
        });
	}
//id name market_id
	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::dropIfExists('store');
		//
	}

}
