<!DOCTYPE html>
<html lang="es">
<head>
	<title>Help Me!{{ isset($title) ? ' - '.$title : '' }}</title>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
	<!-- Bootstrap -->
	<link href="{{asset('css/bootstrap.min.css')}}" rel="stylesheet" media="screen">
	<link href="{{asset('css/bootstrap-theme.css')}}" rel="stylesheet" media="screen">
	<link href="{{asset('css/custom.css')}}" rel="stylesheet" media="screen">

	<!-- jQuery  -->
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
	<script src="{{asset('js/bootstrap.min.js')}}"></script>
</head>
<body>

	<div class="container">
		<header>
			@include('menubar')
			<h3 class="text-muted"><i class="glyphicon glyphicon-question-sign"></i> HelpMe</h3>
		</header>

        @if(Session::has('message'))
        <div class="alert alert-warning" role="alert">{{Session::get('message')}}</div>
        @endif

		<div class="row marketing">
			<div class="col-md-8">

				@yield('content')

			</div>
			<div class="col-md-4">

				@yield('modulos')

			</div>
		</div>

		<footer>
			<p>&copy; 2014</p>
		</footer>
	</div> <!-- /container -->

	<div id="modalNuevo" class="modal fade">
		<div class="modal-dialog">
			<div class="modal-content">

			</div><!-- /.modal-content -->
		</div><!-- /.modal-dialog -->
	</div><!-- /.modal -->

</body>
</html>