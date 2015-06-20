<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class UpdateStoreTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('store', function($table)
		{
   			 $table->bigInteger('cellphone');
   			 $table->string('email', 100)->unique();
   			 $table->string('password', 64);

		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('users', function($table)
		{
    		$table->dropColumn('cellphone');
    		$table->dropColumn('email');
    		$table->dropColumn('password');
		});
	}

}
