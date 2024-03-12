@extends('layout')
     
@section('content')
<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-header">
              <h2>Gestion Location</h2>
            </div>
            <div class="card-body">
                <br/><br/>
                <div class="table-responsive">
                <h2>Liste des Vehicules</h2>
                <table class="table">
                <thead>
                    <tr>
                      <th>Matricule</th>
                      <th>Nom Chauffeur</th>
                      <th>Model</th>
                      <th>Réservation</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($posts as $post)
                      <tr>
                          <th scope="row">{{ $post->id }}</th>
                          <td>{{ $post->title }}</td>
                          <td><img src="cover/{{ $post->cover }}" class="img-responsive" style="max-height:100px; max-width:100px" alt="" srcset=""></td>
                          <td><a href="/reservation/{{ $post->id }}" class="btn btn-outline-primary">Réserver</a></td>
                      </tr>
                    @endforeach
                  </tbody>
              </table>
 
                </div>  
            </div>                  
        </div>
    </div>                        
</div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>

@endsection