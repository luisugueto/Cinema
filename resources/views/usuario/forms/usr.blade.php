<div class="form-group">
			{!!Form::label('Nombre:')!!}
			{!!Form::text('name', null, ['class'=>'form-control', 'placeholder'=>'Por favor ingrese el nombre de usuario'])!!}
		</div>
		<div class="form-group">
			{!!Form::label('Correo:')!!}
			{!!Form::text('email', null, ['class'=>'form-control', 'placeholder'=>'Por favor ingrese su correo'])!!}
		</div>
		<div class="form-group">
			{!!Form::label('Password:')!!}
			{!!Form::password('password', ['class'=>'form-control', 'placeholder'=>'Por favor ingrese su password'])!!}
		</div>