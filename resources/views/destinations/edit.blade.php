@extends('layouts.app')

@section('content')
<form method="POST" action="/destinations/{{$destination->id}}" enctype="multipart/form-data">
    {{ csrf_field() }}
    {{ method_field('PUT') }}
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8"><!--Liste erreurs-->
                @if (count($errors) > 0)
                <div class="alert alert-danger">
                    <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                    </ul>
                </div>
                @endif
                
                <div class="card text-center"> <!-- title-->
                    <div class="card-header">
                        <h2 class="titre">Modification d'un voyage</h2>
                    </div>
                </div>
                    
                <div class="card"> <!-- title-->
                    <div class="card-body">
                        <label class="col-3" for="title">Nom de l'hotel*</label>
                        <input required autofocus  class="col-6" type="text" name="title" value="{{old('title',$destination->title) }}">   
                    </div>
                    
                    <div class="card-body"> <!-- destination-->
                        <label class="col-3" for="destinate">Destination*</label>
                        <input required autofocus class="col-6" type="text" name="destinate" value="{{old('destinate', $destination->destinate) }}">   
                    </div>
                    
                    <div class="card-body"> <!-- price-->
                        <label class="col-3" for="price">Prix en (€)*</label>
                        <input required autofocus class="col-6" type="number" name="price" value="{{old('price', $destination->price) }}">   
                    </div>
                    
                    <div class="card-body"> <!-- date depart-->
                        <label class="col-3" for="date_departure">Date de départ*</label>
                        <input required autofocus class="col-6" type="date" name="date_departure" value="{{old('date_departure', $destination->date_departure) }}">
                    </div>   
                    
                    <div class="card-body"> <!-- date retour-->
                        <label class="col-3" for="date_return">Date de retour*</label>
                        <input required autofocus class="col-6" class="form-control" type="date" name="date_return" value="{{old('date_return', $destination->date_return) }}">
                    </div>
                    
                    <div class="card-body"> <!-- pourcentage-->
                        <label  class="col-3" for="percentage_discount">Pourcentage de remise</label>
                        <input class="col-6" type="number" name="percentage_discount" value="{{old('percentage_discount', $destination->percentage_discount) }}">   
                    </div>
                    
                    <div class="card-body"> <!-- date debut promo-->
                        <label class="col-3" for="date_start_discount">Date de debut de promotion</label>
                        <input class="col-6" type="date" name="date_start_discount" value="{{old('date_start_discount', $destination->date_start_discount) }}">
                    </div>
                    
                    <div class="card-body"> <!-- date fin promo-->
                        <label class="col-3" for="date_end_discount">Date de fin de promotion</label>
                        <input class="col-6" type="date" name="date_end_discount" value="{{old('date_end_discount', $destination->date_end_discount) }}">
                    </div>
                    
                    <div class="card-body"> <!-- nombre de place disponible-->
                        <label class="col-3" for="number_available">Nombre de place disponible*</label>
                        <input required autofocus class="col-6" type="number" name="number_available" value="{{old('number_available', $destination->number_available) }}">   
                    </div>
                    
                    <div class="card-body"> <!-- nombre de place reervées-->
                        <label class="col-3" for="number_reserved">Nombre de place reservées*</label>
                        <input required autofocus class="col-6" type="number" name="number_reserved" value="{{old('number_reserved', $destination->number_reserved) }}">   
                    </div>
                    
                    <div class="card-body"> <!-- image-->
                        <!-- affichage img-->
                        <div class="d-flex justify-content-around mb-3">
                            <img class="imgEdit" src="{{url('uploads/'.$destination->filename)}}" alt="{{$destination->filename}}">
                            <img class="imgEdit" src="{{url('uploads/'.$destination->filename)}}" alt="{{$destination->filename}}">
                            <img class="imgEdit" src="{{url('uploads/'.$destination->filename)}}" alt="{{$destination->filename}}">
                        </div>
                        <label class="col-3" for="image">inserer une image</label>
                        <input class="col-6 mb-2" type="file" name="image" value="{{old('image') }}">
                        <label class="col-3" for="image1"></label>
                        <input class="col-6 mb-2" type="file" name="image1" value="{{old('image1') }}"> 
                        <label class="col-3" for="image2"></label>
                        <input class="col-6 mb-2" type="file" name="image2" value="{{old('image2') }}"> 

                    </div>
                    
                    <div class="card-body"><!-- description-->
                        <label class="col-3" for="description">Description*</label>
                        <textarea required autofocus class="col-12" class="form-control" name="description" value="" rows="6">{{old('description', $destination->description) }}</textarea>
                    </div>
                    <p class="gris">* champ obligatoire</p>
                    
                    <div class="card-body d-flex justify-content-center">
                        <button type="submit" class="btn btnModifier btn-lg">Modifier</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</form>
    <hr class="hr50">
    <div class="btnRetour">
      <a href="{{ url('destinations') }}"><button class="btnReserver btn-lg" type="button">RETOUR A LA LISTE</button></a>
    </div>


@endsection