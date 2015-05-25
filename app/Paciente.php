<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class Paciente extends Model {

	//
	protected $table = 'pacientes';

	protected $fillable = ['cedula','pnombre','snombre','papellido','sapellido','fnacimiento','telefono','email','direccion'
	];
}
