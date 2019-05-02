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
					<img href="/" class="d-inline-block align-top" src="imgs/logo.png" width="50" height="30" alt="">Question</a>

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
			<div class="row mt-5">
				<div class="col-md-3 sidebar">
				    <div class="list-group">
				        <span href="#" class="list-group-item cat-sidebar">
				            <span class="pull-right" id="slide-submenu">
				                <b class="fa fa-times">Categorias</b>
				            </span>
				        </span>

				        <a href="/tads" class="list-group-item texto-menu">
                            <i class="fa fa-folder-open-o">
                                <img src="/imgs/sidebar/ic_tads.png" width="23" height="23"> TADS
                            </i>
                        </a>

				        <a href="/mamb" class="list-group-item texto-menu">
                            <i class="fa fa-folder-open-o">
                                <img src="/imgs/sidebar/ic_mamb.png" width="23" height="23"> Meio Ambiente
                            </i>
                        </a>

				        <a href="/mec" class="list-group-item texto-menu">
                            <i class="fa fa-folder-open-o">
                                <img src="/imgs/sidebar/ic_mec.png" width="23" height="23"> Mecanica
                            </i>
                        </a>

				        <a href="/fis" class="list-group-item texto-menu">
				            <i class="fa fa-folder-open-o">
                                <img src="/imgs/sidebar/ic_fis.png" width="23" height="23"> Fisica
                            </i>
				        </a>

				        <a href="/soc" class="list-group-item texto-menu">
				            <i class="fa fa-bar-chart-o">
                                <img src="/imgs/sidebar/ic_soc.png" width="23" height="23"> Sociais
                            </i>
				            <span class="badge badge-danger">14</span>
				        </a>

				        <a href="/humor" class="list-group-item texto-menu">
                            <img src="/imgs/sidebar/ic_meme.png" width="23" height="23"> Meme
                        </a>

				        <a href="/b" class="list-group-item texto-menu">
                            <img src="/imgs/sidebar/ic_b.png" width="23" height="23"> Diversos
                        </a>
				    </div>
		    	</div>

                <div class="col-md-7" >
                    <div class="scroll-container square scrollbar-dusty-grass square thin">
                        <div class="card-body">
                                @yield('content')
                        </div>
                    </div>
                </div>
		    </div>


		</div>
	</body>
</html>


