<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Hotel Manager</title>
	<!-- Styles -->
	<link href="{{ asset('/css/bootstrap.min.css') }}" rel="stylesheet">
	<link href="{{ asset('/css/style.css') }}" rel="stylesheet">
	<!-- Fonts -->
	<link href='//fonts.googleapis.com/css?family=Roboto:400,300' rel='stylesheet' type='text/css'>
	<!-- Icons -->
	<link rel="icon" href="{{ url('/images/favicon.png') }}">
    <link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css">
</head>
<body>
	<nav id="bxshw-black" class="navbar navbar-inverse navbar-fixed-top mh mbg-color-1">
		<div class="container-fluid">
			<div class="navbar-header">
				<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
					<span class="sr-only">Toggle Navigation</span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				</button>
				<a class="navbar-brand logo-1">logo</a>
			</div>

			<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav navbar-left top-middle">
                @if (Auth::guest())
					<li><a href="{{ url('/') }}">Home</a></li>
					<li><a href="#us" class="nav navbar-nav navbar-left">Us</a></li>
                    <li><a href="#promotion" class="nav navbar-nav navbar-left">Promotions</a></li>
                    <li><a href="#contact" class="nav navbar-nav navbar-left">Contact</a></li>
                @endif
                @if (Auth::check())
                	@if (Auth::user()->role_id == 1)
                		@if (Auth::user()->employee->position_id == 1)
                			menu admin
                		@endif
                		@if (Auth::user()->employee->position_id == 2)
                			gerente
                		@endif
                		@if (Auth::user()->employee->position_id == 3)
                			auditorias
                		@endif
                		@if (Auth::user()->employee->position_id == 4)
                			recepcionista
                		@endif
                	@endif
                	@if (Auth::user()->role_id == 2)
                		<li><a href="{{ url('/myReserves') }}">Mis Reservas</a></li>
                	@endif
                @endif
				</ul>
				{{-- <ul class="nav navbar-nav navbar-right"> --}}
				<ul class="nav navbar-nav navbar-right top-middle">
					@if (Auth::guest())
						<li><a href="{{ url('/dashboard') }}">Login</a></li>
						<li><a href="{{ url('/auth/register') }}">Register</a></li>
					@else
						<li class="dropdown">
							<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
								@if (Auth::user()->role_id == 1)
									{{ Auth::user()->employee->first_name }} {{ Auth::user()->employee->last_name }}
								@else
									{{ Auth::user()->client->first_name }} {{ Auth::user()->client->last_name }}
								@endif <span class="caret"></span></a>
							<ul class="dropdown-menu" role="menu">
								<li><a href="{{ url('/auth/logout') }}">Salir</a></li>
							</ul>
						</li>
					@endif
				</ul>
			</div>
		</div>
	</nav>
	<br>
    <br>
    <br>
    <br>
    <br>
    <br>
@yield('content')
	<!-- footer -->
	<footer class="footer mbg-color-3 clr-m3">
    	<div class="container text-center">
    		<div id="contac" class="col-md-4">
    			<h3>Contactanos</h3>
    			<p class="text-rigth">Phone: xx-xxx-xxx</p>
    			<p class="text-rigth">Adrress: Cll 15 Cra 25a # 32 -45 </p>
    		</div>
    		<div id="copy" class="col-md-4">
    			<a class="navbar-brand logo-2 block">logo</a>
    			<p class="text-center">&copy Todos los Derechos Reservados Manizales - Colombia 2015</p>
    		</div>
    		<div id="social" class="col-md-4">
    			<h3 class="block">Redes Sociales</h3>
    			<a href=""><i class="fa fa-facebook-official fa-2x clr-m3"></i></a>
    			<a href=""><i class="fa fa-twitter-square fa-2x clr-m3"></i></a>
    			<a href=""><i class="fa fa-google-plus-square fa-2x clr-m3"></i></a>
    		</div>
    	</div>
    </footer>
	<!-- Scripts -->
	<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
	<script src="//cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.1/js/bootstrap.min.js"></script>
	<script scr="{{ asset('/css/bootstrap.min.js') }}"></script>
	<script scr="{{ asset('/css/jquery.min.js') }}"></script>
	<script scr="{{ asset('/css/jquery-1.11.3.min.js') }}"></script>
	<script>
	$(document).ready(function() {
		$('.btn-alert').click(function(event) {
			if(confirm('Realmente desea elminar este articulo!')) {
				$( "#frmdelete" ).submit();
			}
		});
	});
	</script>
</body>
</html>
