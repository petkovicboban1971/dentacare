<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Termini extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up(){

		Schema::create('termini', function(Blueprint $table){

			$table->increments('id');
			$table->string('ime', 255);
			$table->string('email', 255)->unique();
			$table->date('datum');
			$table->time('vreme');	
			$table->text('poruka');
			$table->integer('termini_id')->unsigned();
			$table->foreign('termini_id')->references('id')->on('osoblje')->onDelete('cascade')->onUpdate('cascade');
			$table->nullableTimestamps();
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down(){

		Schema::dropIfExists('termini');
	}

}
