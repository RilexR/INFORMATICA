<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>INFORMATICA CORSODEP</title>
	<link rel="shortcut icon" href="{{ asset('img/favicon.ico')}}">
	<link rel="stylesheet" type="text/css" href="{{ asset('css/bootstrap.min.css')}}">
	<!-- <link rel="stylesheet" type="text/css" href="{{ asset('css/style.css')}}"> -->
	<script src="{{asset('js/jquery.min.js')}}"></script>
	<script src="{{ asset('js/bootstrap.min.js')}}"></script>
	
</head>
<body>
	<header>
		<img class="img-resposnsive" src="{{asset('img/banner.jpg')}}" style="height: 40%; width: 100%">
	</header>
		<nav class="navbar navbar-expand-lg navbar-dark bg-dark navbar">
	  <div class="collapse navbar-collapse">
	    <ul class="navbar-nav">
	      <li class="nav-item active">
	        <a class="nav-link" href=""><b>INFORMATICA</b></a>
	      </li>
	      <li class="nav-item active">
	        <a class="nav-link" href="{{ route('login')}}"><b>Login</b></a>
	      </li>
	      <li class="nav-item active">
	        <a class="nav-link" href="{{ route('register')}}"><b>Registro</b></a>
	        </div>
	      </li>
	    </ul>
	  </div>
	</nav>
	@section('content')
<footer class="footer">
	<div class="container">
		<marquee behavior="" direction="">hola</marquee>
	</div>	
</footer>
</body>
</html>