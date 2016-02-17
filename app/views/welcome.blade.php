@extends('master')
@section('content')
<div class="jumbotron">
	<span style="font-size: 60px;" class="glyphicon glyphicon-question-sign"></span>
	<p class="lead">
		Encuentra la solución a tus preguntas!
	</p>
	<p>
		@if(Session::has('user'))
			<a id="btnListar" class="btn btn-primary btn-lg" href="{{url('questions/myquestions')}}" role="button">Mis preguntas</a>
			<a id="btnEnviar" class="btn btn-primary btn-lg" href="{{url('questions/send')}}" role="button">Enviar pregunta</a>
		@else
			<a id="btnRegistro" class="btn btn-success btn-lg" href="{{url('users/register')}}" role="button">Regístrate</a>
		@endif
	</p>
</div>
@stop