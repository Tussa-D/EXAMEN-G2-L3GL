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
            <h1>MODIFIER UN CHAUFFEUR</h1> 
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
            
            
            <form action="/modifier/traitement" method="POST" class="form-group" enctype="multipart/form-data">
                @csrf

                <input type="text" name="id" style="display: none;" value="{{ $chauffeurs->id }}">

                <div class="form-group">
                  <label for="Titre">Nom</label>
                  <input type="text" class="form-control" id="Nom" name="nom" value="{{ $chauffeurs->nom }}">
                </div>
                <div class="form-group">
                    <label for="Contenu">Prenom</label>
                    <input type="text" class="form-control" id="Prenom" name="prenom" value="{{ $chauffeurs->prenom }}">
                </div>
                <div class="form-group">
                    <label for="Contenu">Experience</label>
                    <input type="text" class="form-control" id="Experience" name="experience" value="{{ $chauffeurs->experience }}">
                </div>
                <div class="form-group">
                    <label for="Contenu">N° permi</label>
                    <input type="text" class="form-control" id="npermi" name="npermi" value="{{ $chauffeurs->npermi }}">
                </div>
                <div class="form-group">
                    <label for="Contenu">Date Emission</label>
                    <input type="text" class="form-control" id="Dateemission" name="dateemission" value="{{ $chauffeurs->dateemission }}">
                </div>
                <div class="form-group">
                    <label for="Contenu">Date Expiration</label>
                    <input type="text" class="form-control" id="Dateexpiration" name="dateexpiration" value="{{ $chauffeurs->dateexpiration }}">
                </div>
                <div class="form-group">
                    <label for="Contenu">Contrat</label>
                    <input type="text" class="form-control" id="Contrat" name="contrat" value="{{ $chauffeurs->contrat }}">
                </div>

                <br> 
                <button type="submit" class="btn btn-primary">Modifier</button>
                <br/>

                <br>
                <a href="/adminvehicule" class="btn btn-danger">Liste des Vehicules</a>
                <br/>
              </form>
          </div>
        </div>
      </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
  </body>
</html>