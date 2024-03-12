<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Ajouter un Vehicule</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
  </head>
  <body>
    

    <div class="container">
        <div class="row">
          <div class="col s12">
            <hr>
            <h1>AJOUTER UN VEHICULE</h1> 
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
            
            
            <form action="/ajout/traitement" method="POST" class="form-group" enctype="multipart/form-data">
                @csrf


                <div class="form-group">
                  <label for="Type">Type</label>
                  <input type="text" class="form-control" id="Type" name="type">
                </div>
                <div class="form-group">
                    <label for="Dateachat">Date Achat</label>
                    <input type="text" class="form-control" id="Dateachat" name="dateachat">
                </div>
                <div class="form-group">
                    <label for="Kmdefaut">Km-Defaut</label>
                    <input type="text" class="form-control" id="Kmdefaut" name="kmdefaut">
                </div>
                <div class="form-group">
                    <label for="Matricule">Matricule</label>
                    <input type="text" class="form-control" id="Matricule" name="matricule">
                </div>
                <div class="form-group">
                    <label for="Chauffeur">Chauffeur</label>
                    <input type="text" class="form-control" id="Chauffeur" name="chauffeur">
                </div>
                <div class="form-group">
                    <label for="Statut">Statut</label>
                    <input type="text" class="form-control" id="Statut" name="statut">
                </div>
                {{-- <div class="form-group">
                    <label for="Vignette">Image</label>
                    <input type="file" class="form-control" id="image" name="image">
                </div> --}}

                <div class="form-group">
                    <label for="image">Image</label>
                    <input type="file" class="form-control" id="image" name="image">
                </div>

                <br> 
                <button type="submit" class="btn btn-primary">Ajouter</button>
                <br/>

                <br>
                <a href="/create_vehicule" class="btn btn-danger">Liste des Vehicules</a>
                <br/>
              </form>
          </div>
        </div>
      </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
  </body>
</html>