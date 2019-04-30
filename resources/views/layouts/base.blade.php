<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<title>INFORMATICA CORSODEP</title>
	<link rel="shortcut icon" href="{{ asset('img/favicon.ico')}}">
	<link rel="stylesheet" type="text/css" href="{{ asset('css/bootstrap.min.css')}}">
	<link rel="stylesheet" type="text/css" href="{{ asset('css/style.css')}}">
	
</head>
<body>
	<header>
		<img class="img-resposnsive" src="{{asset('img/banner.jpg')}}" style="height: 40%; width: 100%">
	</header>
	<nav class="navbar navbar-expand-lg navbar-dark bg-dark navbar">
  <a class="navbar-brand" href=""><span class=""></span></a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav">
      <li class="nav-item active">
        <a class="nav-link" href="#"><b>INFORMATICA</b> <span class="sr-only">(current)</span></a>
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
<script src="{{asset('js/jquery.min.js')}}"></script>
<script src="{{ asset('js/bootstrap.min.js')}}"></script>
</body>
</html>