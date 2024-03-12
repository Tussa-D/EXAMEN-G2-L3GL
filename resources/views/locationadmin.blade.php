@extends('layout')
     
@section('content')
<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-header">
              <h2>Gestion Location</h2>
            </div>
            <div class="card-body">
                <a href="{{ url('/created') }}" class="btn btn-success btn-sm" title="Add New Post">Ajouter un Vehicule</a>
                <br/><br/>
                <div class="table-responsive">
                <h2>Liste des Vehicules</h2>
                <table class="table">
                <thead>
                    <tr>
                      <th>ID</th>
                      <th>Matricule</th>
                      <th>Model</th>
                      <th>Edit</th>
                      <th>Delete</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($posts as $post)
                      <tr>
                          <th scope="row">{{ $post->id }}</th>
                          <td>{{ $post->title }}</td>
                          <td><img src="cover/{{ $post->cover }}" class="img-responsive" style="max-height:100px; max-width:100px" alt="" srcset=""></td>
                          <td><a href="/edit/{{ $post->id }}" class="btn btn-outline-primary">Edit</a></td>
                          <td>
                              <form action="/delete/{{ $post->id }}" method="post">
                                <button class="btn btn-outline-danger" onclick="return confirm('Are you sure?');" type="submit">Delete</button>
                                @csrf
                                @method('delete')
                              </form>
                          </td>
                      </tr>
                    @endforeach
                  </tbody>
              </table>
 
                </div>  
            </div>                  
        </div>
    </div>                        
</div>
@endsection