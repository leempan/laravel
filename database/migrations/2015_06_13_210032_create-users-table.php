<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUsersTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('users', function($table){
		/*$table->string('cellphone', 100)->unique();
        $table->string('name', 20);       
        $table->string('password', 64);
        $table->timestamps('createAt');
        $table->primary('cellphone');*/
        $table->unique('email');
        });
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::dropIfExits('users');
	}

}
