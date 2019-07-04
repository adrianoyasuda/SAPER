@extends('layouts.layout')

@section('content')

    @foreach($questions as $dados)
        <div class="container bg-light rounded" >
            <h5>{{$dados->title}}</h5>

            @if($dados->img_url == null)

            @else
                <center><img src="{{$dados->img_url}}" width="400pc"></center>
            @endif
            <p><strong>Descrição: </strong></p>
            <p> {{$dados->description}}</p>

            <div align="right">
                <button type="button" class="btn btn-light"><img src="imgs/up.png" width="18" height="18"></button>
                    <a><strong>{{$dados->points}}</strong></a>
                <button type="button" class="btn btn-light"><img src="imgs/down.png" width="18" height="18"></button>

                <a class="btn btn btn-light" href=""><img src="imgs/Answer.png" width="20" height="20"><strong>Responder</strong></a>

                <!-- Button trigger modal -->
                    <button type="button" class="btn btn-outline-sucess btn-black-mod" data-toggle="modal" data-target="#aaa">
                      <img src="imgs/share.png" width="18" height="18"> <strong>Compartilhar</strong>
                    </button>

            </div>
                       
            <!-- Modal Body -->
<!--             <div class="modal fade" id="aaa" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
              <div class="modal-dialog modal-dialog-centered" role="document">
                <div class="modal-content">
                <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLongTitle">Envio de E-mail</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                          <span aria-hidden="true">&times;</span>
                        </button>
                </div>
                <div class="modal-body">

                    <form action="{{ action('MailController@enviar')}}" method="POST">

                        <input type ="hidden" name="_token" value="{{{ csrf_token() }}}">
                        <input type ="hidden" name="postar" value="C">

                        <div class="form-group row">
                            <label class="col-md-4 col-form-label text-md-right">De: </label>

                            <div class="col-md-7">
                                <input id="email" type="titulo" class="form-control" name="email" >
                            </div>
                        </div>

                        <div class="form-group row">
                            <label class="col-md-4 col-form-label text-md-right">Para: </label>

                            <div class="col-md-7">
                                <input id="from" type="titulo" class="form-control" name="from" >
                            </div>
                        </div>

                         <input id="from" type="titulo" class="form-control" name="from" >
                        <input id="from" type="titulo" class="form-control" name="from" >
                        <input id="from" type="titulo" class="form-control" name="from" >
                        <input id="from" type="titulo" class="form-control" name="from" >

                        @auth
                            <input id="userid" type="hidden" class="form-control" name="userid" value="{{ Auth::user()->id }}" >
                        @endauth

                        @guest

                        @endguest

                        <br>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Fechar</button>
                            <button type="submit" class="btn btn-primary">Enviar</button>
                          </div>
                    </form>
                  </div>
                </div>
              </div>
            </div> -->


        </div>
        <hr class="style1">
    @endforeach
@endsection


<!-- <img src="imgs/share.png" width="18" height="18"> -->