@extends('layouts.app')

@section('content')
<div class="container">
    <!--liste des destinations par SO-->
<h2 class="titreH2">Catalogue produits</h2>

<div class="container">
    <div class="btnRajouter"><a class="btn-sm btnDestination mt-3 mb-3" type="button" href="/destinations/create">Rajouter une destination</a>
    </div>

    <table class="table  text-center  tableDestinate">
        <thead>
            <tr>
                <th>ID</th>
                <th>Destination</th>
                <th>Nom de l'hotel</th>
                <th>Prix en (€)</th>
                <th>Photos</th>                
                <th colspan="3">Options</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($listDestinations  as $destination)<!--//affiche les articles-->
            <tr>
                <td>{{$destination->id}}</td>
                <td>{{$destination->destinate}}</td>
                <td>{{$destination->title}}</td>
                <td>{{$destination->price}}</td>
                <td class="destinageListImg"><!----------img------->
                    <img class="card-img-top" src="{{url('uploads/'.$destination->filename)}}" alt="{{$destination->filename}}" style="width: 90px; height: 50px;"> 
                    <img class="card-img-top" src="{{url('uploads/'.$destination->filename_un)}}" alt="{{$destination->filename_un}}" style="width: 90px; height: 50px;">
                    <img class="card-img-top" src="{{url('uploads/'.$destination->filename_deux)}}" alt="{{$destination->filename_deux}}" style="width: 90px; height: 50px;">
                </td><!----------end img------->
                                
               <td>                    
                    <form method="GET" action="/destinations/{{$destination->id}}">
                        {{ csrf_field() }}
                          <button type="submit" class="btn-sm btnDestination" >Afficher</button>
                    </form>
                </td>
                <td>                    
                    <form method="GET" action="/destinations/{{$destination->id}}/edit">
                        {{ csrf_field() }}
                          <button type="submit" class="btn-sm btnDestination" >Modifier</button>
                    </form>
                </td>
                <td>                    
                    <form method="POST" action="/destinations/{{$destination->id}}">
                        {{ csrf_field() }}
                        {{ method_field('DELETE') }}
                          <button type="submit" class="btn-sm btnDestination" >Supprimer</button>
                    </form>                    
                </td>
            </tr>
            @endforeach 
        </tbody>
        
    </table>
</div>
<!--/liste des destinations par SO-->


@endsection 
</div>
