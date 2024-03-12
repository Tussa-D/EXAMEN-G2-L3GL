@extends('layout')
     
@section('content')
<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-header">
              <h2>Info Client</h2>
            </div>
            <div class="card-body">
                <form action="/reservationterminer/{{ $posts->id }}" method="post" enctype="multipart/form-data">
                    @csrf
                    @method("put")
                    <label class="m-2">Nom</label>
                    <input type="text" name="nom" class="form-control m-2" placeholder="title" value="{{ $posts->title }}">
                    <label class="m-2">Prénom</label>
                    <input type="text" name="Prenom" class="form-control m-2" placeholder="author" value="{{ $posts->author }}">
                    <label class="m-2">Numéro de Téléphone</label>
                    <input type="text" name="Numero" class="form-control m-2" placeholder="author" value="{{ $posts->author }}">

                     
                    <label class="m-2">Lieu de Depart</label>
                    <input type="text" name="Lieu de Depart" class="form-control m-2" placeholder="author" value="{{ $posts->author }}">

                    <label class="m-2">Lieu d'Arrivée</label>
                    <input type="text" name="Lieu d'Arrivee" class="form-control m-2" placeholder="author" value="{{ $posts->author }}">

                    <label class="m-2">Heure de Depart</label>
                    <input type="text"  class="form-control m-2" placeholder="Heure de Depart" value="{{ $posts->author }}">
                    
                    <button type="submit" class="btn btn-success mt-3 ">Submit</button>
                </form>
                 
                    @csrf
                    </form>
                    <br>
                     
            </div>                  
        </div>
    </div>                        
</div>
@endsection