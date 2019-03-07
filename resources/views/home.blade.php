@extends('layouts.app')

@section('content')
<!--Destinations-->

<div class="container">
    <h2 class="titreH2 mt-5">Destinations</h2>
  <div class="row">
    <div class="col-sm-3 col-md-12">
      <div class="card text-white cardDestination">
        <img src="../../image/desti_seychelles.jpeg" class="img-fluid" alt="Seychelles">
        <div class="card-img-overlay">
        <h5 class="card-title nomDestination">Seychelles</h5>
        </div>
      </div>
    </div>
    <div class="col-sm-3 col-md-12">
      <div class="card text-white cardDestination">
        <img src="{{asset('/image/desti_maurice.jpg')}}" class="img-fluid" alt="Maurice">
        <div class="card-img-overlay">
        <h5 class="card-title nomDestination">Maurice</h5>
        </div>
      </div>
    </div>
    <div class="col-sm-3 col-md-12">
      <div class="card text-white cardDestination">
        <img src="../../image/desti_reunion.jpg" class="img-fluid" alt="Réunion">
        <div class="card-img-overlay">
        <h5 class="card-title nomDestination">Réunion</h5>
        </div>
      </div>
    </div>
    <div class="col-sm-3 col-md-12">
      <div class="card text-white cardDestination">
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
    <h2 class="titreH2">Nos offres</h2>   
  <div class="row">
    <div class="col-sm cardOffres">
        <div class="card" style="width: 20rem;">
          <img src="../../image/mu_canonnier1.jpg" class="card-img-top " alt="offre hotel">
          <div class="card-body">
            <h5 class="card-title">Title</h5>
            <p class="card-text">Price</p>
            <a href="#" class="btn btn-primary">Voir l'offre</a>
          </div>
        </div>
    </div>
    <div class="col-sm cardOffres">
        <div class="card" style="width: 20rem;">
          <img src="../../image/mu_canonnier2.jpg" class="card-img-top " alt="offre hotel">
          <div class="card-body">
            <h5 class="card-title">Title</h5>
            <p class="card-text">Price</p>
            <a href="#" class="btn btn-primary">Voir l'offre</a>
          </div>
        </div>
    </div>
    <div class="col-sm cardOffres">
        <div class="card" style="width: 20rem;">
          <img src="../../image/mu_canonnier3.jpg" class="card-img-top " alt="offre hotel">
          <div class="card-body">
            <h5 class="card-title">Title</h5>
            <p class="card-text">Price</p>
            <a href="#" class="btn btn-primary">Voir l'offre</a>
          </div>
        </div>
    </div>
    <div class="col-sm cardOffres">
        <div class="card" style="width: 20rem;">
          <img src="../../image/mu_canonnier1.jpg" class="card-img-top " alt="offre hotel">
          <div class="card-body">
            <h5 class="card-title">Title</h5>
            <p class="card-text">Price</p>
            <a href="#" class="btn btn-primary">Voir l'offre</a>
          </div>
        </div>
    </div>
    <div class="col-sm cardOffres">
        <div class="card" style="width: 20rem;">
          <img src="../../image/mu_canonnier1.jpg" class="card-img-top " alt="offre hotel">
          <div class="card-body">
            <h5 class="card-title">Title</h5>
            <p class="card-text">Price</p>
            <a href="#" class="btn btn-primary">Voir l'offre</a>
          </div>
        </div>
    </div>
    <div class="col-sm cardOffres">
        <div class="card" style="width: 20rem;">
          <img src="../../image/mu_canonnier1.jpg" class="card-img-top " alt="offre hotel">
          <div class="card-body">
            <h5 class="card-title">Title</h5>
            <p class="card-text">Price</p>
            <a href="#" class="btn btn-primary">Voir l'offre</a>
          </div>
        </div>
    </div>
  </div>
</div>
<!--/nos offres-->
@endsection
