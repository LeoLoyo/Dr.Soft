<div class="col-sm-6"> 


	<div class="form-group">
		{!! Form::text('cedula', null, ['class' => 'form-control floating-label', 'placeholder' => 'Cedula De Identidad:']) !!}
	</div>

	<div class="form-group">
		{!! Form::text('pnombre', null, ['class' => 'form-control floating-label', 'placeholder' => 'Primer Nombre:']) !!}
	</div>
	
	<div class="form-group">
		{!! Form::text('snombre', null, ['class' => 'form-control floating-label', 'placeholder' => 'Segundo Nombre:']) !!}

	</div>

	<div class=" form-group">
		{!! Form::text('papellido', null, ['class' => 'form-control floating-label', 'placeholder' => 'Primer Apellido:']) !!}	
	</div>

	<div class=" form-group">
		{!! Form::text('sapellido', null, ['class' => 'form-control floating-label', 'placeholder' => 'Segundo Apellido:']) !!}	
	</div>

</div>

	<div class="col-sm-6">
		
		<div class=" form-group">
		{!! Form::date('fnacimiento', null, ['class' => 'form-control floating-label', 'placeholder' => 'Fecha de Nacimiento:']) !!}	
		</div>

		<div class=" form-group">
		{!! Form::email('email', null, ['class' => 'form-control floating-label', 'placeholder' => 'Email:']) !!}	
		</div>
	
		<div class=" form-group">
		{!! Form::text('direccion', null, ['class' => 'form-control floating-label', 'placeholder' => 'Direccion:']) !!}	
		</div>
	
		<div class=" form-group">
		{!! Form::text('telefono', null, ['class' => 'form-control floating-label', 'placeholder' => 'Telefono:']) !!}	
		</div>
	
	</div>