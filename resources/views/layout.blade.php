<!DOCTYPE html>
<html>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

	<link rel="stylesheet" type="text/css" href="../../css/estilo.css">

	<head>
		<title>@yield('title', 'IF Question')</title>
		<meta charset="utf-8">
	</head>


		<nav class="navbar navbar-expand-lg navbar-light bg-light">

			<div class="container">
				<a class="navbar-brand btn btn-light" href="/">
					<img class="d-inline-block align-top" src="imgs/logo.png" width="50" height="30" alt="">Question</a>

				<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"aria-label="Toggle navigation">
					<span class="navbar-toggler-icon"></span>
				</button>

				<div class="collapse navbar-collapse" id="navbarSupportedContent">
					<ul class="navbar-nav mr-auto">
						<li class="nav-item active">
							<a class="nav-link" href="/">Home <span class="sr-only">(current)</span></a>
						</li>
						
				        <li class="nav-item">
				        	<a class="nav-link" href="/contact">Contact us</a>
				        </li>

				        <li class="nav-item">
			        		<a class="nav-link" href="/about">About us</a>
				        </li>
					</ul>

					<form class="form-inline my-2 my-lg-0">
						<input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
						<button class="btn btn-dark my-2 my-sm-0" type="submit">Search</button>
					</form>
				</div>
			</div>
		</nav>

	<body>
		<div class="container">
			<div class="row">
				<div class="col-sm-4 col-md-3 sidebar">
				    <div class="list-group">
				        <span href="#" class="list-group-item active">
				            <span class="pull-right" id="slide-submenu">
				                <b class="fa fa-times">Submenu</b>
				            </span>
				        </span>
				        <a href="/tads" class="list-group-item texto-menu">TADS</a>
				        <a href="/mamb" class="list-group-item texto-menu">Meio Ambiente</a>
				        <a href="/mec" class="list-group-item texto-menu">Mecanica</a>

				        <a href="/fis" class="list-group-item texto-menu">
				            <i class="fa fa-folder-open-o">Fisica</i>
				            <span class="badge">14</span>
				        </a>

				        <a href="/soc" class="list-group-item texto-menu">
				            <i class="fa fa-bar-chart-o">Sociais</i>
				            <span class="badge badge-danger">14</span>
				        </a>

				        <a href="/humor" class="list-group-item texto-menu">Humor</a>
				        <a href="/divers" class="list-group-item texto-menu">Diversos</a>
				    </div>
		    	</div>
		    </div>

			<div class="justify-content-end">
				@yield('content')
			</div>
		</div>
	</body>
</html>


