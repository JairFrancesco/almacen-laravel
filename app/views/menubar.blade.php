<ul class="nav nav-pills pull-right">
	<li><a href="{{url('/')}}"><i class="glyphicon glyphicon-home"></i></a></li>
	<li><a href="{{url('/about')}}">Acerca de...</a></li>
	@if(Session::has('user'))
	<li class="dropdown active">
		<a class="dropdown-toggle" data-toggle="dropdown" href="#">
			<span class="glyphicon glyphicon-user"></span>
			{{Session::get('user')->username}} <span class="caret"></span>
		</a>
		<ul class="dropdown-menu" role="menu">
            <li><a href="{{url('/questions/myquestions')}}">Mis Preguntas</a></li>
            <li class="divider"></li>
            <li><a href="{{url('/users/logout')}}">Cerrar Sesión</a></li>
		</ul>
	</li>
	@else
	<li><a href="{{url('/users/register')}}">Regístrese</a></li>
	<li><a href="{{url('/users/login')}}">Iniciar Sesión</a></li>
	@endif
</ul>