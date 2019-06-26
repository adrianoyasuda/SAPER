<!DOCTYPE html>
<html>
	<head>
		<title>@yield('title', 'SAPER')</title>

		<meta charset="utf-8">
	    <meta name="viewport" content="width=device-width, initial-scale=1.0">

	    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
		<link rel="stylesheet" type="text/css" href="./css/estilo.css">

	    <script src="{{ asset('js/app.js') }}" defer></script>


        <!----Imgur---->
        <script src="{{ asset('js/imgur.js') }}" defer></script>
        <script src="{{ asset('js/upload.js') }}" defer></script>
        <link href="./css/imgur.css" rel="stylesheet" media="screen">

	</head>


		<nav class="navbar navbar-expand-lg navbar-light bg-light">

			<div class="container">
				<a class="navbar-brand" href="{{ url('/') }}">
					<img href="/" class="d-inline-block align-top" src="imgs/logo.png" width="50" height="30" alt="">SAPER
				</a>

				<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"aria-label="Toggle navigation">
					<span class="navbar-toggler-icon"></span>
				</button>

				<div class="collapse navbar-collapse" id="navbarSupportedContent">

					<ul class="navbar-nav ml-auto">
                        <!-- Authentication Links -->
                        @guest
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                            </li>
                            @if (Route::has('register'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                                </li>
                            @endif
                        @else

                            <!-- Button trigger modal -->
                            <div class="container">
                                <button type="button" class="btn btn-outline-sucess btn-black-mod" data-toggle="modal" data-target="#exampleModal">
                                  <img src="imgs/upload.png" width="25" height="25"> <strong>Post</strong>
                                </button>
                            </div>
                            <!-- Modal -->
                            <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                              <div class="modal-dialog" role="document">
                                <div class="modal-content">
                                  <div class="modal-header">
                                    <h5 class="modal-title" id="exampleModalLabel">Titulo</h5>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                      <span aria-hidden="true">&times;</span>
                                    </button>
                                  </div>
                                  <div class="modal-body">

                                        <div class="dropzone"></div>
                                        <!-- <img src="https://i.imgur.com/7fk4lhy.jpg"> -->

                                  </div>
                                  <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Fechar</button>
                                    <button type="button" class="btn btn-primary">Postar</button>
                                  </div>
                                </div>
                              </div>
                            </div>

                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->name }} <span class="caret"></span>
                                </a>

                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        @csrf
                                    </form>
                                </div>
                            </li>
                        @endguest
                    </ul>
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


