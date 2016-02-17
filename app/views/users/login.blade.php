@extends('master')
@section('content')
<form action="{{url('users/login')}}" method="post" class="form-box" role="form">
	<h2 class="form-signin-heading">Iniciar sesión</h2>

	<label>Usuario</label>
	<input type="text" name="username" class="form-control">

	<br>

	<label>Contraseña</label>
	<input type="password" name="password" class="form-control">

	<br>

	<div class="row">
		<div class="col-md-8">
			<input type="submit" class="btn btn-lg btn-primary btn-block" value="Iniciar sesión">
		</div>
		<div class="col-md-4">
			<a class="btn btn-lg btn-default btn-block" href="welcome">Cancelar</a>
		</div>
	</div>
</form>
@stop