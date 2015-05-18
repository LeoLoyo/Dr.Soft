@extends('app')

@section('content')
<div class="container-fluid">
	<div class="row">
		<div class="col-md-8 col-md-offset-2">
			<div class="panel panel-default">
				<div class="panel-heading">Login</div>
				<div class="panel-body">
					@if (count($errors) > 0)
						<div class="alert alert-danger text-center">
Las credenciales ingresadas no coinciden con nuestra base de datos
						</div>
					@endif
					{!! Form::open(['url' => 'auth/login', 'role' => 'form', 'class' => 'form-horizontal']) !!}

						<div class="form-group">
						{!! Form::label('email', 'Correo Electronico',['class' => 'col-md-4 control-label']) !!}
							<div class="col-md-6">
								{!! Form::email('email', old('email'), ['class' => 'form-control']) !!}
			
							</div>
						</div>

						<div class="form-group">
							<label class="col-md-4 control-label">Clave</label>
							<div class="col-md-6">
								<input type="password" class="form-control" name="password">
							</div>
						</div>

						<div class="form-group">
							<div class="col-md-6 col-md-offset-4">
								<div class="checkbox">
									<label>
										<input type="checkbox" name="remember"> Recuérdame
									</label>
								</div>
							</div>
						</div>

						<div class="form-group">
							<div class="col-md-6 col-md-offset-4">
								<button type="submit" class="btn btn-primary">Ingresar</button>

								<a class="btn btn-link" href="{!! url('/password/email') !!}">¿Olvidaste tu Clave?</a>
							</div>
						</div>
					{!! Form::close() !!}
				</div>
			</div>
		</div>
	</div>
</div>
@endsection
