<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Gestion Chauffeur</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
  </head>
  <body>
    
        <div class="container text-center">
            <div class="row">
                <div class="col s12">
                    <h1>LA LISTE DES CHAUFFEURS</h1>
                    <hr>
                        <a href="/ajouter" class="btn btn-info">Ajouter un Chauffeur</a>
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
                                <th>Nom</th>
                                <th>Prenom</th>
                                <th>Expérience</th>
                                <th>N°Permi</th>
                                <th>Date Emission</th>
                                <th>Date Expiration</th>
                                <th>Contrat</th>
                                <th>Action</th>

                            </tr>
                        </thead>
                        <tbody>

                            @php
                                $ide = 1;
                            @endphp
                            @foreach($chauffeurs as $chauffeur)
                            <tr>
                                <td> {{ $ide }} </td>
                                <td> {{ $chauffeur->nom }} </td>
                                <td> {{ $chauffeur->prenom }} </td>
                                <td> {{ $chauffeur->experience }} </td>
                                <td> {{ $chauffeur->npermi }} </td>
                                <td> {{ $chauffeur->dateemission }} </td>
                                <td> {{ $chauffeur->dateexpiration}} </td>
                                <td> {{ $chauffeur->contrat }} </td>
                                @php
                                    $ide += 1;
                                @endphp

                                <td>
                                    <a href="/modifier_chauffeur/{{ $chauffeur->id}}" class="btn btn-success">Modifier</a>
                                    <a href="/supprimer_chauffeur/{{ $chauffeur->id}}" class="btn btn-danger">Supprimer</a>

                                </td>
                            </tr>
                            @endforeach
                             
                           
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    
    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>

  </body>
</html>