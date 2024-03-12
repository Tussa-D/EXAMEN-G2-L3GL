<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Ajouter un Chauffeur</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
  </head>
  <body>
    

    <div class="container">
        <div class="row">
          <div class="col s12">
            <hr>
            <h1>AJOUTER UN CHAUFFEUR</h1> 
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
            
            
            <form action="/ajouter/traitement" method="POST" class="form-group" enctype="multipart/form-data">
                @csrf
                <div class="form-group">
                  <label for="Nom">Nom</label>
                  <input type="text" class="form-control" id="Nom" name="nom">
                </div>
                <div class="form-group">
                    <label for="Prenom">Prenom</label>
                    <input type="text" class="form-control" id="Prenom" name="prenom">
                </div>
                <div class="form-group">
                    <label for="Experience">Experience</label>
                    <input type="text" class="form-control" id="Experience" name="experience">
                </div>
                <div class="form-group">
                    <label for="npermi">N° permi</label>
                    <input type="text" class="form-control" id="npermi" name="npermi">
                </div>
                <div class="form-group">
                    <label for="Dateemission">Date Emission</label>
                    <input type="text" class="form-control" id="Dateemission" name="dateemission">
                </div>
                <div class="form-group">
                    <label for="Dateexpiration">Date Expiration</label>
                    <input type="text" class="form-control" id="Dateexpiration" name="dateexpiration">
                </div>
                <div class="form-group">
                    <label for="Contrat">Contrat</label>
                    <input type="text" class="form-control" id="Contrat" name="contrat">
                </div>

                <br> 
                <button type="submit" class="btn btn-primary">Ajouter</button>
                <br/>

                <br>
                <a href="/chauffeur" class="btn btn-danger">Liste des Chauffeur</a>
                <br/>
              </form>
          </div>
        </div>
      </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
  </body>
</html>