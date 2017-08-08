<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateFfFlightsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('ff_flights', function(Blueprint $table)
		{
			$table->integer('count', true);
			$table->string('id', 36)->unique('id_UNIQUE');
			$table->timestamps();
			$table->softDeletes();
			$table->string('airline_id', 36)->index('fk_fs_flights_fs_airlines1_idx');
			$table->dateTime('arival')->nullable();
			$table->dateTime('depature');
			$table->string('destination', 36)->index('fk_fs_flights_fs_airports2_idx');
			$table->string('origin', 36)->index('fk_fs_flights_fs_airports1_idx');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('ff_flights');
	}

}
