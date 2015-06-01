<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePacientesTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('pacientes', function(Blueprint $table)
		{
			$table->increments('id');
			$table->string('cedula',15)->unique();
			$table->string('pnombre',20);
			$table->string('snombre',20);
			$table->string('papellido',20);
			$table->string('sapellido',20);
			$table->date('fnacimiento');
			$table->string('telefono');
			$table->string('email')->unique();
			$table->string('telefono');
			$table->string('direccion',200);
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
		Schema::drop('pacientes');
	}

}
