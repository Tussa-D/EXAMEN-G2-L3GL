<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Modifier un Chauffeur</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
  </head>
  <body>
    

    <div class="container">
        <div class="row">
          <div class="col s12">
            <hr>
            <h1>MODIFIER UN VEHICULES</h1> 
            <hr>

            @if (session('status'))
                <div class="alert alert-success">
                    {{ session('status') }}
                </div>              
            @endif
            <ul>
                @foreach ($errors->all() as $error)
                    <li class="alert alert-danger"> {{ $error }} </li>
                @endforeach
            </ul>
            
            
            <form action="/modifie/traitement" method="POST" class="form-group" enctype="multipart/form-data">
                @csrf

                <input type="text" name="id" style="display: none;" value="{{ $vehicules->id }}">

                <div class="form-group">
                  <label for="Titre">Type</label>
                  <input type="text" class="form-control" id="Type" name="type" value="{{ $vehicules->type }}">
                </div>
                <div class="form-group">
                    <label for="Contenu">Date Achat</label>
                    <input type="text" class="form-control" id="Dateachat" name="dateachat" value="{{ $vehicules->dateachat }}">
                </div>
                <div class="form-group">
                    <label for="Contenu">Km-Defaut</label>
                    <input type="text" class="form-control" id="Kmdefaut" name="kmdefaut" value="{{ $vehicules->kmdefaut }}">
                </div>
                <div class="form-group">
                    <label for="Contenu">Matricule</label>
                    <input type="text" class="form-control" id="Matricule" name="matricule" value="{{ $vehicules->matricule }}">
                </div>
                <div class="form-group">
                    <label for="Contenu">Chauffeur</label>
                    <input type="text" class="form-control" id="Chauffeur" name="chauffeur" value="{{ $vehicules->chauffeur }}">
                </div>
                <div class="form-group">
                    <label for="Contenu">Statut</label>
                    <input type="text" class="form-control" id="Statut" name="statut" value="{{ $vehicules->statut }}">
                </div>

                <br> 
                <button type="submit" class="btn btn-primary">Modifier</button>
                <br/>

                <br>
                <a href="/vehicule" class="btn btn-danger">Liste des Vehicules</a>
                <br/>
              </form>
          </div>
        </div>
      </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
  </body>
</html>