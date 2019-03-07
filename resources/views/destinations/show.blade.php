@extends('layouts.app')

@section('content')
<!--C LA VRAI VUE D UNE D ESTINATION - LE READ-->
<!--VUE D'une destination-->
<div class="container">
    <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
      <ol class="carousel-indicators">
        <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
        <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
        <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
      </ol>
      <div class="carousel-inner">
        <div class="carousel-item active">        
          <img src="{{url('uploads/'.$destination->filename)}}" class="d-block w-100" alt="{{$destination->filename}}">
        </div>
        <div class="carousel-item">
          <img src="{{url('uploads/'.$destination->filename_un)}}" class="d-block w-100" alt="{{url('uploads/'.$destination->filename_un)}}">
        </div>
        <div class="carousel-item">
          <img src="{{url('uploads/'.$destination->filename_deux)}}" class="d-block w-100" alt="{{url('uploads/'.$destination->filename_deux)}}">
        </div>
      </div>
      <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="sr-only">Précédent</span>
      </a>
      <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="sr-only">Suivant</span>
      </a>
    </div>
</div>

<div class="container">
    <div class="row">
        <div class="col-md-9 col-sm-12">
            <h1 class="titreH1 titleShow">{{$destination->title}}</h1>
            <h2 class="titreH2">{{$destination->destinate}}</h2>
            <p class="textDestination">{{$destination->description}}</p>
        </div>
        <div class="col-md-3 col-sm-12 text-center">
            <p class="priceShow ">{{$destination->price}} €</p>

            <p><span class="gras">du  {{$destination->date_departure}} au  {{$destination->date_return}}</span></p>
            <br>
            <p class="colorPlace">{{$destination->number_available - $destination->number_reserved}} places restantes !!!</p>
            <p>Dépéchez-vous !!!</p>
            <div class="divBtnReserver">
                <button class="btnReserver btn-lg" type="button">RESERVER</button>
            </div>
        </div>
    </div>
</div>
<hr class="hr50">
<div class="btnRetour">
  <a href="{{ url('destinations') }}"><button class="btnReserver btn-lg" type="button">RETOUR AU CATALOGUE</button></a>
</div>

<!--/fin VUE d'une destination-->
@endsection
