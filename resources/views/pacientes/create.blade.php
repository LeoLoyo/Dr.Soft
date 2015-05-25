@extends('app') 
@section('content')
	<h1>Resgistrar Paciente</h1>
	
	{!! Form::open(['route'=> 'pacientes.store']) !!}
	
		@include('pacientes.partials.form')
	<div class="col-sm-6 form-group">
	 {!! Form::button('Guardar',['type' => 'submit', 'class' => 'btn btn-primary']) !!}
	</div>
	{!! Form::close() !!}

@endsection