@extends('master')
@section('content')
<form action="{{url('users/register')}}" method="post" class="form-box" role="form">
	<h2 class="form-signin-heading">Registro</h2>

	<label>Usuario</label>
	<input type="text" name="username" class="form-control" placeholder="usuario">

	<br>

	<label>Contraseña</label>
	<input type="password" name="password" class="form-control">

	<br>

	<label>Nombre</label>
	<input type="text" name="name" class="form-control" placeholder="Nombre">

	<br>

	<label>Correo electrónico</label>
	<input type="text" name="email" class="form-control" placeholder="user@domain.com">

	<br>

	<div class="row">
		<div class="col-md-8">
			<input type="submit" class="btn btn-lg btn-primary btn-block" value="Registrar">
		</div>
		<div class="col-md-4">
			<a class="btn btn-lg btn-default btn-block" href="welcome">Cancelar</a>
		</div>
	</div>
</form>
@stop