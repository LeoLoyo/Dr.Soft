@extends('app')
@section('content')
<h1>hellow</h1>
@endsection
<!--

	<h1>registrados</h1>
	<table class="table table-bordered table-striped">
		<thead>
			<tr>
				<th>#</th>
				<th>cedula</th>
				<th>Primer Nombre</th>
				<th>Segundo Nombre</th>
				<th>Primer Apellido</th>
				<th>Segundo Apellido</th>
				<th>Fecha de Nacimiento</th>
				<th>Email</th>
				<th>Direccion</th>
				<th>telefono</th>
			</tr>
		</thead>
		<tbody>

			@foreach($paciente as $paciente)
				<tr>
					<td>{{ $paciente->id }}</td>	
					<td>{{ $paciente->pnombre }}</td>	
					<td>{{ $paciente->snombre }}</td>	
					<td>{{ $paciente->papellido }}</td>	
					<td>{{ $paciente->sapellido }}</td>	
					<td>{{ $paciente->fnacimiento }}</td>	
					<td>{{ $paciente->email }}</td>	
					<td>{{ $paciente->direccion }}</td>	
					<td>{{ $paciente->telefono }}</td>	
				</tr>	
			@endforeach	

		</tbody>


	</table>
	{!! $paciente->render() !!}

@endsection
-->
