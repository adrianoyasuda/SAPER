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

                <button type="button" class="btn btn-light" data-toggle="modal" data-target="#ExemploModalCentralizado" >
                  <img src="imgs/share.png" width="18" height="18"> <strong>Compartilhar</strong>
                </button>
            </div>

            <!--Modal --->
            <div class="modal fade" id="ExemploModalCentralizado" tabindex="-1" role="dialog" aria-labelledby="TituloModalCentralizado" aria-hidden="true">
              <div class="modal-dialog modal-dialog-centered" role="document">
                <div class="modal-content">

                    <div class="modal-header">
                        <h5 class="modal-title" id="TituloModalCentralizado">Título do modal</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Fechar">
                          <span aria-hidden="true">&times;</span>
                        </button>
                    </div>

                  <div class="modal-body">
                    <form action="{{ action('MailController@enviar')}}" method="POST">
                        <input type ="hidden" name="_token" value="{{{ csrf_token() }}}">
                        <input type ="hidden" name="postar" value="C">


                        <div class="form-group row">
                            <label class="col-md-4 col-form-label text-md-right">De:</label>

                            <div class="col-md-7">
                                <input id="my_email" class="form-control" name="my_email">
                            </div>
                        </div>

                        <div class="form-group row">
                            <label class="col-md-4 col-form-label text-md-right">Para:</label>

                            <div class="col-md-7">
                                <input id="from_email" type="from_email" class="form-control" name="from_email" >
                            </div>
                        </div>
                  </div>

                  <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Fechar</button>
                    <button type="button" class="btn btn-primary">Enviar</button>
                  </div>
                </form>
                </div>
              </div>


        </div>
        <hr class="style1">
    @endforeach
@endsection
                 