@extends('layouts._base')
@section('content')

@section('titre','Liste des vehicules')


@include('layouts._navbar')


<section id="hero" class="hero d-flex align-items-center">
    <div class="container">
      <div class="row">
        <div class="col-xl-4">
          <div class="container text-center">
            <div class="row">
                <div class="col s12">
                    <h1>LA LISTE DES VEHICULES</h1>
                    <hr>
                        <a href="/accueil" class="btn btn-info">RETOUR A LA PAGE D'ACCUEIL</a>
                    <hr>
        
                    @if (session('status'))
                        <div class="alert-success">
                            {{ session('status') }}
                        </div>
                    @endif
        
                    <table class="table">
                        <thead>
                            <tr>
                                <th>#</th>
                                <th>Type</th>
                                <th>Date Achat</th>
                                <th>Km-Defaut</th>
                                <th>Matricule</th>
                                <th>Chauffeur</th>
                                <th>Statut</th>
        
                            </tr>
                        </thead>
                        <tbody>
        
                            @php
                                $ide = 1;
                            @endphp
                            @foreach($vehicules as $vehicule)
                            <tr>
                                <td> {{ $ide }} </td>
                                <td> {{ $vehicule->type }} </td>
                                <td> {{ $vehicule->dateachat }} </td>
                                <td> {{ $vehicule->kmdefaut }} </td>
                                <td> {{ $vehicule->matricule }} </td>
                                <td> {{ $vehicule->chauffeur }} </td>
                                <td> {{ $vehicule->statut}} </td>
                                @php
                                    $ide += 1;
                                @endphp
        
                            </tr>
                            @endforeach
                             
                           
                        </tbody>
                    </table>
                </div>
            </div>
        </div>

          @include('layouts._navbar')

      <!-- end navbar -->

        </div>
      </div>
    </div>

  </section><!-- End Hero Section -->






<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
@include('layouts._sidebar')



</body>
@endsection 