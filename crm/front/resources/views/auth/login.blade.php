@extends('layout.base')

@section('content')
<div id="login" class="p-8">

	@if (Session::has('bad'))
	<div class="preview">
		<div class="preview-elements">
			<div class="alert alert-warning alert-dismissible fade show" role="alert">
				<button type="button" class="close" data-dismiss="alert" aria-label="Close">
					<span aria-hidden="true">&times;</span>
				</button>
				<strong>¡Error!</strong> {{Session::get('bad')}}
			</div>
		</div>
	</div>
	@endif

	<div class="form-wrapper md-elevation-8 p-8">

		<div class="logo bg-secondary">
			<span>P</span>
		</div>

		<div class="title mt-4 mb-8">Ingresa a tu cuenta</div>
			
		<form name="loginForm" id="loginForm" method="POST" action="{{ route('login') }}">
			@csrf
			<div class="form-group mb-4">
				<input type="email" class="form-control @error('email') is-invalid @enderror" id="email" name="email" aria-describedby="emailHelp" placeholder="correo@ejemplo.com" value="{{ old('email') }}" required autocomplete="email" autofocus>
				<label for="email">Correo electrónico</label>
				@error('email')
					<span class="invalid-feedback" role="alert">
						<strong>{{ $message }}</strong>
					</span>
				@enderror
			</div>

			<div class="form-group mb-4">
				<input type="password" class="form-control @error('password') is-invalid @enderror" id="password" name="password" placeholder="Contraseña" value="{{ old('password') }}" required autocomplete="current-password">
				<label for="password">Contraseña</label>
				@error('password')
					<span class="invalid-feedback" role="alert">
						<strong>{{ $message }}</strong>
					</span>
				@enderror
			</div>

			<div class="remember-forgot-password row no-gutters align-items-center justify-content-between pt-4">

				<div class="form-check remember-me mb-4">
					<label class="form-check-label">
						<input type="checkbox" class="form-check-input" aria-label="Recuérdame" id="remember_me" name="remember_me" {{ (old('remember_me') == 'on')? 'checked': '' }}/>
						<span class="checkbox-icon"></span>
						<span class="form-check-description">Recuérdame</span>
					</label>
				</div>

				<!-- a href="#" class="forgot-password text-secondary mb-4">Forgot Password?</a -->
			</div>

			<button type="submit" class="submit-button btn btn-block btn-secondary my-4 mx-auto" aria-label="Entrar">
				Entrar
			</button>
		</form>

		<!-- script type="text/javascript" src="{{ asset('js/login.js') }}"></script -->
	</div>
</div>
@endsection
@section('right_bar')
@endsection