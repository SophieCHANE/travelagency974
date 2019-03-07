@extends('layouts.app')

@section('content')

<!--Jumbotron-->
@cannot('view', App\Destination::class) 
    <div class="imgHeader">
        <p class="msgHeader mx-auto">TROUVEZ L’HOTEL QUI<br>CONVIENT A VOS PROCHAINES VACANCES</p>
    </div>
@endcannot

<!--Destinations-->                             
<div class="container" id="mainContent">
    <h2 class="titreH2 mt-2 p-5">Destinations </h2>
  <div class="row">
    <div class="col-sm-12 col-md-3 pb-2">
      <div class="card text-white cardDes">
        <img src="../../image/desti_seychelles.jpeg" class="img-fluid" alt="Seychelles">
        <div class="card-img-overlay">
        <h5 class="card-title nomDestination">Seychelles</h5>
        </div>
      </div>
    </div>
    <div class="col-sm-12 col-md-3  pb-2">
      <div class="card text-white cardDes">
        <img src="../../image/desti_maurice.jpg" class="card-img" alt="Maurice">
        <div class="card-img-overlay">
        <h5 class="card-title nomDestination">Maurice</h5>
        </div>
      </div>
    </div>
    <div class="col-sm-12 col-md-3 pb-2">
      <div class="card text-white cardDes">
        <img src="../../image/desti_reunion.jpg" class="img-fluid" alt="Réunion">
        <div class="card-img-overlay">
        <h5 class="card-title nomDestination">Réunion</h5>
        </div>
      </div>
    </div>
    <div class="col-sm-12 col-md-3  pb-2">
      <div class="card text-white cardDes">
        <img src="../../image/desti_rodrigues.jpg" class="img-fluid" alt="Rodrigues">
        <div class="card-img-overlay">
        <h5 class="card-title nomDestination">Rodrigues</h5>
        </div>
      </div>
    </div>
  </div>
</div>
<!--/destinations-->
<!--nos offres-->
<div class="container">
    <h2 class="titreH2 mt-2 p-5">Nos offres</h2>   
    <div class="row">
        @foreach ($listdestinations  as $destination)
        <div class="col-sm-12 col-md-4 cardOffres">
            <div class="card">
                <img src="{{url('uploads/'.$destination->filename)}}" alt="{{$destination->filename}}" class="card-img-top ">
                <div class="card-body text-left">
                  <h5 class="card-title ">{{$destination->title}}</h5>
                  <h5 class="card-title">{{$destination->destinate}}</h5>
                  <h2 class="card-text priceH1 text-right">{{$destination->price}} €</h2>

                  <form method="GET" action="/destinations/{{$destination->id}}">
                      {{ csrf_field() }}
                        <button type="submit" class="btn-sm btnVoirOffre" >Voir l'offre</button>
                 </form>
                </div>
            </div>
        </div>
      @endforeach
     
    
    </div>
</div>
<!--/nos offres-->

@endsection
