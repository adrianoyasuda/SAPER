<!DOCTYPE html>
<html>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

	<link rel="stylesheet" type="text/css" href="../../css/estilo.css">

	<head>
		<title>@yield('title', 'LaraCast')</title>
		<meta charset="utf-8">

	</head>


		<nav class="navbar navbar-expand-lg navbar-light bg-light">
			<a class="navbar-brand btn btn-light" href="/"><img class="d-inline-block align-top" src="https://i.imgur.com/1iaA9Ua.png" width="50" height="30" alt="">Question</a>

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
		</nav>

	<body>
	@yield('content')

	</body>
</html>


