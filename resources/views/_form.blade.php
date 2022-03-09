<form id="sacForm" name="sacForm" action="{{ route('atencion.new') }}" method="POST" enctype="multipart/form-data">
	@csrf
	<input type="hidden" name="tipo_form" value="{{ $tipo_form }}">
	<p>{{ $mensaje }}</p>
	<div class="row">
		<div class="col-12 col-md-6">
			<div class="form-group">
				<label for="nombre">Nombre (s) *</label>
				<input type="text" class="form-control" name="nombre" id="nombre" placeholder="e.g. Juan" required>
			</div>
		</div>
		<div class="col-12 col-md-6">
			<div class="form-group">
				<label for="apellido">Apellidos *</label>
				<input type="text" class="form-control" name="apellido" id="apellido" placeholder="e.g. Pérez Gómez" required>
			</div>
		</div>
		<div class="col-12 col-md-6">
			<div class="form-group">
				<label for="email">Correo electrónico *</label>
				<input type="email" class="form-control" name="email" id="email" placeholder="e.g. ejemplo@proveedor.com" required>
			</div>
		</div>
		<div class="col-12 col-md-6">
			<div class="form-group">
				<label for="tel">Teléfono *</label>
				<input type="tel" class="form-control" name="tel" id="tel" placeholder="e.g. 7221234567" required>
			</div>
		</div>
	</div>
	
	{{ $slot }}
	<div class="row">
		<div class="col-12">
			<div class="input-checkbox input-checkbox--switch">
				<input id="checkbox-switch" type="checkbox" name="agree" id="agree" required/>
				<label for="checkbox-switch"></label>
			</div>
			<span>Al utilizar este formulario, acepto el almacenamiento <br class="d-sm-none d-md-none d-lg-none d-xl-none d-inline">y el manejo de mis datos en este sitio web.</span>
		</div>

		<div class="col-12">
			<center>
	
				<button type="submit" class="btn btn--primary">Enviar</button>
			</center>
	
		</div>
	</div>
		
</form>