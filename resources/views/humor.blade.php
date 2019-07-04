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

                <button type="button" class="btn btn-light" data-toggle="modal" data-target="#exampleModal" >
                  <img src="imgs/share.png" width="18" height="18"> <strong>Compartilhar</strong>
                </button>
            </div>
        </div>
        <hr class="style1">
    @endforeach

    
@endsection
