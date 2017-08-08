<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class AddForeignKeysToFfFlightsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('ff_flights', function(Blueprint $table)
		{
			$table->foreign('airline_id', 'fk_fs_flights_fs_airlines1')->references('id')->on('ff_airlines')->onUpdate('NO ACTION')->onDelete('NO ACTION');
			$table->foreign('origin', 'fk_fs_flights_fs_airports1')->references('id')->on('ff_airports')->onUpdate('NO ACTION')->onDelete('NO ACTION');
			$table->foreign('destination', 'fk_fs_flights_fs_airports2')->references('id')->on('ff_airports')->onUpdate('NO ACTION')->onDelete('NO ACTION');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('ff_flights', function(Blueprint $table)
		{
			$table->dropForeign('fk_fs_flights_fs_airlines1');
			$table->dropForeign('fk_fs_flights_fs_airports1');
			$table->dropForeign('fk_fs_flights_fs_airports2');
		});
	}

}
